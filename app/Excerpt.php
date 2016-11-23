<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excerpt extends Model
{
	protected $table = 'excerpts';

	// protected $fillable = [
	// 	'day',
	// 	'day_abbr',
	// 	'kitchen_open',
	// 	'kitchen_open_suffix',
	// 	'kitchen_close',
	// 	'kitchen_close_suffix',
	// 	'bar_open',
	// 	'bar_open_suffix',
	// 	'bar_close',
	// 	'bar_close_suffix',
	// ];

	// protected $rules = [
	// 	'day' => 				  'required|alpha|max:9',
	// 	'day_abbr' => 			  'required|alpha|max:3',
	// 	'kitchen_open' => 		  'required',
	// 	'kitchen_open_suffix' =>  'nullable|max:2',
	// 	'kitchen_close' => 		  'required',
	// 	'kitchen_close_suffix' => 'nullable|max:2',
	// 	'bar_open' => 			  'required',
	// 	'bar_open_suffix' => 	  'nullable|max:2',
	// 	'bar_close' => 			  'required',
	// 	'bar_close_suffix' => 	  'nullable|max:2',
	// ];

}
