<?php

// --------------------------------------------------------------------------------
// Landing Routes
// --------------------------------------------------------------------------------
Route::get('/', 'SiteController@home')->name('home');
Route::get('about', 'SiteController@about')->name('about');
Route::get('booking', 'SiteController@booking')->name('booking');
Route::get('connect', 'SiteController@connect')->name('connect');
Route::get('contact', 'SiteController@contact')->name('contact');

Route::get('sandbox', function() {
	// return view('admin.templates.sandbox');
	phpinfo();
});

Route::post('avatars', function() {
	request()->file('avatar')->store('public/uploads/avatars');
	return back();
});

// --------------------------------------------------------------------------------
// Admin Routes
// --------------------------------------------------------------------------------
Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'AdminController@dashboard')->name('dashboard');
	Route::resource('hours','HoursController', ['only' => ['index', 'edit', 'update']]);
	Route::resource('excerpts','ExcerptsController');
	Route::resource('menus','MenusController');
	Route::resource('pages','PagesController');
});
