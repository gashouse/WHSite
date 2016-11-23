<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use App\Hours;
use App\Excerpt;
use App\Menu;
use Carbon\Carbon;
use Gas\Social\Instagram;

class SiteController extends Controller
{
    public function __construct()
    {

    }

    public function home()
    {
		$page  = Page::where('slug', 'home')->first();
		$hours = Hours::all();
		$about = Excerpt::where('slug', 'details-about')->first();
		$menus = Menu::all();
		$instagram_obj = new Instagram();
		$instagrams = $instagram_obj->get_feed(16);
		$default_date = Carbon::now()->format('Y-m-d');

		// Comma delimited
		$js_components = '["./templates/template-home.js"]';

		return view('site.templates.home',  compact([
			'page', 'hours', 'about',
			'menus', 'default_date',
			'instagrams', 'js_components'
		]));
    }

// --------------------------------------------------------------------------------
// ABOUT
// --------------------------------------------------------------------------------
    public function about()
    {
    	$page = Page::where('slug', 'about')->first();
    	$js_components = '["./templates/template-home.js"]';

    	return view('site.templates.about',  compact([
    		'page',
    		'js_components'
    	]));
    }

// --------------------------------------------------------------------------------
// BOOKING
// --------------------------------------------------------------------------------
	public function booking()
    {
    	$page = Page::where('slug', 'booking')->first();
    	$js_components = '["./templates/template-home.js"]';

    	return view('site.templates.booking',  compact([
    		'page',
    		'js_components'
    	]));
    }

// --------------------------------------------------------------------------------
// CONNECT
// --------------------------------------------------------------------------------
	public function connect()
    {
    	$page = Page::where('slug', 'connect')->first();
    	$js_components = '["./templates/template-home.js"]';

    	return view('site.templates.connect',  compact([
    		'page',
    		'js_components'
    	]));
    }

// --------------------------------------------------------------------------------
// CONTACT
// --------------------------------------------------------------------------------
	public function contact()
    {
    	$page = Page::where('slug', 'contact')->first();
    	$js_components = '["./templates/template-home.js"]';

    	return view('site.templates.contact',  compact([
    		'page',
    		'js_components'
    	]));
    }

}
