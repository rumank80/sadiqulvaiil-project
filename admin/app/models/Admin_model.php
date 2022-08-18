<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	//input values of add users
	public function user_input_values()
	{
		$data = array(
			'username' => remove_forbidden_characters($this->input->post('username', true)),
			'user_role' => $this->input->post('user_role', true),
		);
		return $data;
	}

	//input values of add users
	public function website_input_values()
	{
		$data = array(
			'website_id' => $this->input->post('website_id', true),
			'website_name' => $this->input->post('website_name', true),
			'website_url' => $this->input->post('website_url', true),
			'website_login_url' => $this->input->post('website_login_url', true),
		);
		return $data;
	}


	// delete record with ajax
	public function delete_record($id, $table)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}



	//get category by id
	public function get_category($cid)
	{
		$query = $this->db->get_where('categories', array('cid' => $cid));
		return $query->row();
	}

	// get all users
	public function user_list()
	{
		$query = $this->db->get('users'); //, $start, $limit
		return $query->result();
	}
	// get all users
	public function user_list_without_root()
	{
		$this->db->where('id !=', 1);
		$query = $this->db->get('users'); //, $start, $limit
		return $query->result();
	}

	// get website
	public function website_list()
	{
		$query = $this->db->get('websites'); //, $start, $limit
		return $query->result();
	}

	// get all information
	public function informations($limit, $start)
	{
		$this->db->where('user_id !=', 1);
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('informations'); //, $start, $limit
		return $query->result();
	}

	// get all information
	public function root_informations($limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('informations'); //, $start, $limit
		return $query->result();
	}

	// count all user
	public function all_user_count()
	{
		//return $this->db->get_where('users', array('id =' => 1))->num_rows();
		return $this->db->count_all('users');
	}

	// count all user
	public function all_user_count_without_root()
	{
		return $this->db->get_where('users', array('id !=' => 1))->num_rows();
		//return $this->db->count_all('users');
	}

	//count website list
	public function all_website_count()
	{
		return $this->db->count_all('websites');
	}
	//count informations
	public function information_count()
	{
		//return $this->db->get_where('informations', array('user_id =' => 1))->num_rows();
		return $this->db->count_all('informations');
	}

	//count informations
	public function information_count_without_root()
	{
		return $this->db->get_where('informations', array('user_id !=' => 1))->num_rows();
		//return $this->db->count_all('informations');
	}

	// add user
	public function add_user()
	{
		$data = $this->user_input_values();
		if ($this->input->post('password', true)) {
			$data['password'] = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		}

		return $this->db->insert('users', $data);
	}

	// edit user
	public function edit_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->result();
	}

	// update user
	public function update_user($id)
	{
		$data = $this->user_input_values();

		if ($this->input->post('password', true)) {

			$data['password'] = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		}

		$this->db->where('id', $id);
		return $this->db->update('users', $data);
	}


	// add user
	public function add_website()
	{
		$data = $this->website_input_values();
		return $this->db->insert('websites', $data);
	}

	// edit user
	public function edit_website($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('websites');
		return $query->result();
	}

	// update user
	public function update_website($id)
	{
		$data = $this->website_input_values();
		$this->db->where('id', $id);
		return $this->db->update('websites', $data);
	}


	// settings 
	public function settings()
	{
		// sitename
		$data['value']    =   $this->input->post('sitename');
		$this->db->where('name', 'sitename');
		$this->db->update('settings', $data);

		// registration
		$data['value']    =   $this->input->post('registration');
		$this->db->where('name', 'registration');
		$this->db->update('settings', $data);

		// onesignal_app_id
		$data['value']    =   $this->input->post('onesignal_app_id');
		$this->db->where('name', 'onesignal_app_id');
		$this->db->update('settings', $data);

		// onesignal_api_key
		$data['value']    =   $this->input->post('onesignal_api_key');
		$this->db->where('name', 'onesignal_api_key');
		$this->db->update('settings', $data);
		return true;
	}
}
