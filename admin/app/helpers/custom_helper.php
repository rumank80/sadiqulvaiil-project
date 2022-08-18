<?php
defined('BASEPATH') or exit('No direct script access allowed');

//get translated message
if (!function_exists('trans')) {
	function trans($string)
	{
		$ci = &get_instance();

		if ($ci->lang->line($string) === FALSE) {
			$translate_phrase = ucwords(str_replace("_", " ", $string));
		} else {
			$translate_phrase = $ci->lang->line($string, FALSE);
		}

		return $translate_phrase;
	}
}


//get translated message
if (!function_exists('site_config')) {
	function site_config($string)
	{
		$ci = &get_instance();
		$query = $ci->db->get_where('settings', array('name' => $string));
		if ($query->num_rows() > 0) {
			$result = $query->row()->value;
		}
		return $result;
	}
}

//remove forbidden characters
if (!function_exists('remove_forbidden_characters')) {
	function remove_forbidden_characters($str)
	{
		$str = str_replace(';', '', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace('$', '', $str);
		$str = str_replace('%', '', $str);
		$str = str_replace('*', '', $str);
		$str = str_replace('/', '', $str);
		$str = str_replace('\'', '', $str);
		$str = str_replace('<', '', $str);
		$str = str_replace('>', '', $str);
		$str = str_replace('=', '', $str);
		$str = str_replace('?', '', $str);
		$str = str_replace('[', '', $str);
		$str = str_replace(']', '', $str);
		$str = str_replace('\\', '', $str);
		$str = str_replace('^', '', $str);
		$str = str_replace('`', '', $str);
		$str = str_replace('{', '', $str);
		$str = str_replace('}', '', $str);
		$str = str_replace('|', '', $str);
		$str = str_replace('~', '', $str);
		return $str;
	}
}


// form validation set value

if (!function_exists('old')) {
	function old($str)
	{
		return html_escape(set_value($str));
	}
}


// placeholder html eascape with translation

if (!function_exists('placeholder')) {
	function placeholder($str)
	{
		return html_escape(trans($str));
	}
}

// invalid form alert

if (!function_exists('form_invalid')) {
	function form_invalid($str)
	{
		return (form_error($str) ? 'is-invalid' : '');
	}
}

//lang base url
if (!function_exists('lang_base_url')) {
	function lang_base_url()
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		return $ci->lang_base_url;
	}
}

//check admin
if (!function_exists('is_admin')) {
	function is_admin()
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_admin();
	}
}

//check root
if (!function_exists('is_root')) {
	function is_root()
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_root();
	}
}

//check user
if (!function_exists('is_user')) {
	function is_user()
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		$ci->load->model('auth_model');
		return $ci->auth_model->is_user();
	}
}


//get logged user
if (!function_exists('user')) {
	function user()
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		return $ci->auth_model->get_logged_user();
	}
}

//get user by id
if (!function_exists('get_user')) {
	function get_user($user_id)
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		return $ci->auth_model->get_user($user_id);
	}
}

//get website by id
if (!function_exists('get_website')) {
	function get_website($website_id)
	{
		// Get a reference to the controller object
		$ci = &get_instance();
		return $ci->auth_model->get_website($website_id);
	}
}

//get website by id
if (!function_exists('get_image')) {
	function get_image($website_id, $image)
	{
		$website_url = get_website($website_id)->website_url;
		$image_link = $website_url . '/uploads/' . $image;
		return $image_link;
	}
}
