<?php
namespace Gas\Social;

use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Instagram {

	public $user_id;
	public $client_id;
	public $client_secret;
	public $access_token;
	public $client;

	public function __construct()
	{
		$this->user_id = $this->set_user_id();
		$this->client_id = $this->set_client_id();
		$this->client_secret = $this->set_client_secret();
		$this->access_token = $this->set_access_token();
		$this->client = $this->set_client();
	}

// ---------------------------------------------------------------------------------
// User ID
// ---------------------------------------------------------------------------------
	public function set_user_id()
	{
		return config('social.instagram.user_id');
	}

	public function get_user_id()
	{
		return $this->user_id;
	}

// ---------------------------------------------------------------------------------
// Client ID
// ---------------------------------------------------------------------------------
	public function set_client_id()
	{
		return config('social.instagram.client_id');
	}

	public function get_client_id()
	{
		return $this->client_id;
	}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
	public function set_client_secret()
	{
		return config('social.instagram.secret');
	}

	public function get_client_secret()
	{
		return $this->client_secret;
	}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
	public function set_access_token()
	{
		return config('social.instagram.token');
	}

	public function get_access_token()
	{
		return $this->client_secret;
	}

// ---------------------------------------------------------------------------------
// Client, Oauth
// ---------------------------------------------------------------------------------
	public function set_client()
	{
		$client = new \GuzzleHttp\Client([
			'base_uri' => 'https://api.instagram.com/v1/'
		]);
		return $client;
		// return new Client([
		// 	'base_url' => 'https://api.instagram.com/v1/',
		// 	'defaults' => ['auth' => 'oauth']
		// ]);
	}

	public function get_client()
	{
		return $this->client;
	}

// ---------------------------------------------------------------------------------
// Get Feed Response
// ---------------------------------------------------------------------------------
	public function get_feed_response($count)
	{
		$feed = json_decode(
			$this->client->get('https://api.instagram.com/v1/users/' . $this->user_id . '/media/recent/',
				[
				'query' => [
					'access_token' => $this->access_token,
					'count' => $count
				]])->getBody());
		return $feed->data;
	}

// ---------------------------------------------------------------------------------
// Formatted Feed
// ---------------------------------------------------------------------------------
	public function get_format_feed($count = 10)
	{
		$formatted_feed = [];
		$instagram_items = $this->get_feed_response($count);

		$index = 0;
		foreach ($instagram_items as $instagram_item)
		{
			// Network
			$formatted_feed[$index]['network'] = 'instagram';
			// Post Type
			$formatted_feed[$index]['post_type'] = 'photo';
			// Photo
			$formatted_feed[$index]['photo'] = $instagram_item->images->standard_resolution->url;
			// Text
			$formatted_feed[$index]['text'] = $instagram_item->caption->text;
			// Link
			$formatted_feed[$index]['link'] = $instagram_item->link;
			// Likes
			$formatted_feed[$index]['likes'] = $instagram_item->likes->count;
			// Created
			$created_at = Carbon::createFromTimestamp($instagram_item->created_time);
			// Timestamp
			$formatted_feed[$index]['timestamp']  = $created_at->timestamp;
			// Time Ago
			$formatted_feed[$index]['time_ago']  = $created_at->diffForHumans();

			// Increment
			$index++;
		}

		// Return Formatted Feed
		return $formatted_feed;
	}


// ---------------------------------------------------------------------------------
// Get Feed
// ---------------------------------------------------------------------------------
	public function get_feed($count)
	{
		if (Cache::has('recent_instagram'))
		{
			return collect(Cache::get('recent_instagram'));
		}
		else {
			$new_feed = $this->get_format_feed($count);
			Cache::put('recent_instagram', $new_feed, 22*60);
			return collect($new_feed);
		}
	}

}
