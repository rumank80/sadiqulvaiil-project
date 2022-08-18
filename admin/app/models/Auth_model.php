<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{
	//input values of login form
	private function input_values()
	{
		$data = array(
			'username' => remove_forbidden_characters($this->input->post('username', true)),
			'password' => remove_forbidden_characters($this->input->post('password', true)),
		);
		return $data;
	}

	//input values of register form
	private function register_input_values()
	{
		$data = array(
			'username' => remove_forbidden_characters($this->input->post('username', true))
		);
		return $data;
	}

	//login
	public function login()
	{
		$data = $this->input_values();
		$user = $this->get_user_by_username($data['username']);

		if (!empty($user)) {
			//verify password
			if (!password_verify($data['password'], $user->password)) {
				return false;
			}
			if ($user->user_role !== "admin" && $user->user_role !== "user") {
				return false;
			}

			//set user data
			$user_data = array(
				'rt_session_id' => $user->id,
				'rt_session_username' => $user->username,
				'rt_session_role' => $user->user_role,
				'rt_session_logged_in' => true,
			);
			$this->session->set_userdata($user_data);
			if ($user->user_role == "admin") {
				return "admin";
			}
			else
			{
				return "user";

			}
		}
		else
		{
			return false;
		}
	}

	//register
	public function register()
	{
		$data = $this->register_input_values();
		//secure password
		$data['password'] = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		if ($this->db->insert('users', $data)) {
			$id = $this->db->insert_id();
			$user = $this->get_user($id);
			//set user data
			$user_data = array(
				'rt_session_id' => $user->id,
				'rt_session_username' => $user->username,
				'rt_session_role' => $user->user_role,
				'rt_session_logged_in' => true
			);
			$this->session->set_userdata($user_data);
			return true;
		} else {
			return false;
		}
	}

	//get user by username
	public function get_user_by_username($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		return $query->row();
	}


	//get user by id
	public function get_user($id)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		return $query->row();
	}

	//get website by id
	public function get_website($id)
	{
		$query = $this->db->get_where('websites', array('website_id' => $id));
		return $query->row();
	}


	//check if username is unique
	public function is_unique_username($username, $user_id = 0)
	{
		$user = $this->get_user_by_username($username);

		//if id doesnt exists
		if ($user_id === 0) {
			if (empty($user)) {
				return true;
			} else {
				return false;
			}
		}

		if ($user_id !== 0) {
			if (!empty($user) && $user->id !== $user_id) {
				//username taken
				return false;
			} else {
				return true;
			}
		}
	}

	//is logged in
	public function is_logged_in()
	{
		$user = $this->get_logged_user();
		//check if user logged in
		if ($this->session->userdata('rt_session_logged_in') === true && !empty($user)) 
		{
			return true;
		}
		else
		{
			$this->logout();
			return false;
		}
	}

	//function get user
	public function get_logged_user()
	{
		if ($this->session->userdata('rt_session_logged_in') === true) {
			$query = $this->db->get_where('users', array('id' => $this->get_user_id()));
			return $query->row();
		}
	}

	//get logged user id
	public function get_user_id()
	{
		return $this->session->userdata('rt_session_id');
	}


	//is admin
	public function is_admin()
	{
		//check logged in
		if (!$this->is_logged_in()) {
			return false;
		}

		//check role
		if ($this->session->userdata('rt_session_role') === 'admin') {
			return true;
		} else {
			return false;
		}
	}

	//is root
	public function is_root()
	{
		//check logged in
		if (!$this->is_logged_in()) {
			return false;
		}

		//check role
		if ($this->session->userdata('rt_session_role') === 'admin' && $this->session->userdata('rt_session_id') == '1') {
			return true;
		} else {
			return false;
		}
	}

	//is user
	public function is_user()
	{
		//check logged in
		if (!$this->is_logged_in()) {
			return false;
		}

		//check role
		if ($this->session->userdata('rt_session_role') === 'user') {
			return true;
		} else {
			return false;
		}
	}

	//logout
	public function logout()
	{
		//unset user data
		$this->session->unset_userdata('rt_session_id');
		$this->session->unset_userdata('rt_session_username');
		$this->session->unset_userdata('rt_session_role');
		$this->session->unset_userdata('rt_session_logged_in');
	}

}