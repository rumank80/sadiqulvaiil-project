<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	protected $id = '';
	public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
        $this->load->library("pagination");
        $this->id = $this->session->userdata('rt_session_id');

		//check auth
        if (!is_user()) {
            redirect('login');
        }
	}

	public function index()
	{
		redirect($this->agent->referrer());
	}

    public function dashboard()
    {

		// all count data
		$click_count = $this->user_model->click_count($this->id);
		$website_count = $this->user_model->all_website_count();
		$information_count = $this->user_model->information_count($this->id);
        $data = [
            'page'						=> 'dashboard',
            'page_title' 				=> trans('dashboard'),
			'click_count' 				=> $click_count,
			'website_count'				=> $website_count,
			'information_count'			=> $information_count
        ];
        $this->load->view('user/index', $data);
    }



	// website list
    public function website_list()
    {
		$websites = $this->user_model->website_list();
    	$data = [
            'page'      	=> 'website/website_list',
            'page_title' 	=> trans('website_list'),
			'websites'			=> $websites

        ];
        $this->load->view('user/index', $data);
    }

    // website list
    public function informations()
    {
        $config = array();
        $config["base_url"] = base_url() . "user/informations";
        $config["total_rows"] = $this->user_model->information_count($this->id);

        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        // start main config
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';

        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $config['cur_tag_open'] = '<li class="page-item"> <a class="page-link active" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$informations = $this->user_model->informations($this->id, $config['per_page'], $page);
    	$data = [
            'page'      	=> 'informations/informations',
            'page_title' 	=> trans('informations'),
			'informations'	=> $informations,
            'links'         => $this->pagination->create_links()

        ];
        $this->load->view('user/index', $data);
    }


}