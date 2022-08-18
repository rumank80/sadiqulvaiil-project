<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//get translated message
if (!function_exists('trans')) {
	function trans($string)
	{
		$ci =& get_instance();

		if($ci->lang->line($string) === FALSE)
		{
        	$translate_phrase = ucwords(str_replace("_", " ", $string));         
		}
		else
		{
			$translate_phrase = $ci->lang->line($string, FALSE);
		}

		return $translate_phrase;
	}
}


//get translated message
if (!function_exists('site_config')) {
	function site_config($string)
	{
		$ci =& get_instance();
		$query = $ci->db->get_where('settings' , array('name' => $string));
		if($query->num_rows() > 0)
		{
            $result = $query->row()->value;
		}
		return $result;
	}
}

//get user by id
if (!function_exists('get_user')) {
	function get_user($user_id)
	{
		// Get a reference to the controller object
		$ci =& get_instance();
		return $ci->auth_model->get_user($user_id);
	}
}

// one signal notification
if (!function_exists('send_notification')) {
	function send_notification($data = [])
	{
		$content = [
			"en" => $data['message']
		];
		$headings = [
			"en" => $data['title']
		];
		$fields = [
			'app_id'                => site_config('onesignal_app_id'),
			'included_segments'     => array('All'),
			'url'                   => $data['url'],
			'filters'               => [
				[
					'field' => 'tag',
					'key' => 'user_id',
					'relation' => '=',
					'value' => $data['user_id']
				]
			],

			'contents'              => $content,
			'headings'              => $headings
		];

		$fields = json_encode($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Authorization: Basic ' . site_config('onesignal_api_key')
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}

// one signal notification
if (!function_exists('send_notification_admin')) {
	function send_notification_admin($data = [])
	{
		$content = [
			"en" => $data['message']
		];
		$headings = [
			"en" => $data['title']
		];
		$fields = [
			'app_id'                => site_config('onesignal_app_id'),
			'included_segments'     => array('All'),
			'url'                   => $data['url'],
			'filters'               => [
				[
					'field' => 'tag',
					'key' => 'admin_id',
					'relation' => '=',
					'value' => 1
				]
			],

			'contents'              => $content,
			'headings'              => $headings
		];

		$fields = json_encode($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Authorization: Basic ' . site_config('onesignal_api_key')
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}