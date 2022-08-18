<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{

	// get all information
	public function informations($id, $limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get_where('informations', array('user_id' => $id)); //, $start, $limit
		return $query->result();
	}
	// get website
	public function website_list($start = '', $limit ='')
	{
		$query = $this->db->get('websites'); //, $start, $limit
		return $query->result();
	}

	// count all click
	public function click_count($id)
	{
		return $this->db->get_where('clicks', array('user_id' => $id))->num_rows();
	}
	
	//count website list
	public function all_website_count()
	{
		return $this->db->count_all('websites');
	}
	//count informations
	public function information_count($id)
	{
		return $this->db->get_where('informations', array('user_id' => $id))->num_rows();
	}

}