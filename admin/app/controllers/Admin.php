<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	protected $id = '';
	public function __construct()
	{
		parent::__construct();
        $this->load->model('admin_model');
        $this->load->library("pagination");
        $this->id = $this->session->userdata('rt_session_id');
        
		//check auth
        if (!is_admin()) {
            redirect('login');
        }
	}

	public function index()
	{
		redirect($this->agent->referrer());
	}

    public function dashboard()
    {

		if ($this->id == 1) {
			$user_count = $this->admin_model->all_user_count();
		}
		else
		{
			$user_count = $this->admin_model->all_user_count_without_root();
		}

		$website_count = $this->admin_model->all_website_count();

		if ($this->id == 1) {
			$information_count = $this->admin_model->information_count();
		}
		else
		{
			$information_count = $this->admin_model->information_count_without_root();
		}

        $data = [
            'page'						=> 'dashboard',
            'page_title' 				=> trans('dashboard'),
			'user_count' 				=> $user_count,
			'website_count'				=> $website_count,
			'information_count'			=> $information_count
        ];
        $this->load->view('admin/index', $data);
    }

	// delete record with ajax
	public function delete_record(){
        $response           = array();
        $row_id             = $this->input->post('row_id');
        $table_name         = $this->input->post('table_name');
		$query 				= $this->admin_model->delete_record($row_id, $table_name);
        if($query)
		{
            $response['message'] = trans('delete_success');
		}
		else
		{
			$response['message'] = trans('delete_fail');
		}     
        echo json_encode($response);     
    }


	// user list
    public function user_list()
    {
    	if ($this->id == 1) {
    		$users = $this->admin_model->user_list();
    	}
    	else
    	{
    		$users = $this->admin_model->user_list_without_root();
    	}
    	$data = [
            'page'      	=> 'user/user_list',
            'page_title' 	=> trans('user_list'),
			'users'			=> $users

        ];
        $this->load->view('admin/index', $data);
    }

    // add user form 
	public function add_user()
	{
		$data = [
			'page'      	=> 'user/add_user',
			'page_title' 	=> trans('add_user')

		];
		$this->load->view('admin/index', $data);
	}

	// add user form 
	public function add_user_post()
	{
		if ($this->input->post()) {
			
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'username',
					'label'	=> trans('username'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[20]|is_unique[users.username]'
				],
				[
					'field'	=> 'user_role',
					'label'	=> trans('user_role'),
					'rules'	=> 'required|xss_clean|trim'
				],
				[
					'field'	=> 'password',
					'label'	=> trans('password'),
					'rules'	=> 'required|xss_clean|trim|min_length[6]|max_length[150]'
				]
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->add_user();
			}
			else
			{
				if($this->admin_model->add_user())
				{
					$this->session->set_flashdata('success_message', trans('user_successfully_added'));
					redirect(site_url('admin/add_user'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('admin/add_user'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}

	// edit user
	public function edit_user($id = '')
	{
		$users = $this->admin_model->edit_user($id);
		$data = [
            'page'      	=> 'user/edit_user',
            'page_title' 	=> trans('edit_user'),
            'users'			=> $users
        ];
        $this->load->view('admin/index', $data);
	}

	// edit user post
	public function edit_user_post()
	{
		if ($this->input->post()) {

			$data = [
				'username' 		=> $this->input->post('username')
			];
			$user_id = $this->input->post('user_id');
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'username',
					'label'	=> trans('username'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[20]'
				],
				[
					'field'	=> 'user_role',
					'label'	=> trans('user_role'),
					'rules'	=> 'required|xss_clean|trim'
				],
				[
					'field'	=> 'password',
					'label'	=> trans('password'),
					'rules'	=> 'xss_clean|trim|min_length[6]|max_length[150]'
				]
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->edit_user($user_id);
			}
			else
			{

				//is username unique
				if (!$this->auth_model->is_unique_username($data["username"], $user_id)) {
					$this->session->set_flashdata('error_message', trans("username_unique_error"));
					redirect($this->agent->referrer());
					exit();
				}
				if($this->admin_model->update_user($user_id))
				{
					$this->session->set_flashdata('success_message', trans('user_successfully_edited'));
					redirect(site_url('admin/users'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('admin/users'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}

	}


	// website list
    public function website_list()
    {
		$websites = $this->admin_model->website_list();
    	$data = [
            'page'      	=> 'website/website_list',
            'page_title' 	=> trans('website_list'),
			'websites'			=> $websites

        ];
        $this->load->view('admin/index', $data);
    }

    // website list
    public function informations()
    {
    	$config = array();
        $config["base_url"] = base_url() . "admin/informations";

        if ($this->id == 1) {
			$config["total_rows"] = $this->admin_model->information_count();
		}
		else
		{
			$config["total_rows"] = $this->admin_model->information_count_without_root();
		}

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


    	if ($this->id == 1) {
    		$informations = $this->admin_model->root_informations($config['per_page'], $page);
    	}
    	else
    	{
    		$informations = $this->admin_model->informations($config['per_page'], $page);
    	}
    	$data = [
            'page'      	=> 'informations/informations',
            'page_title' 	=> trans('informations'),
			'informations'	=> $informations,
			'links'			=> $this->pagination->create_links()

        ];
        $this->load->view('admin/index', $data);
    }

    // add website form 
	public function add_website()
	{
		$data = [
			'page'      	=> 'website/add_website',
			'page_title' 	=> trans('add_website')

		];
		$this->load->view('admin/index', $data);
	}

	// add website post form 
	public function add_website_post()
	{
		if ($this->input->post()) {
			
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'website_id',
					'label'	=> trans('website_id'),
					'rules'	=> 'required|xss_clean|trim|numeric'
				],
				[
					'field'	=> 'website_name',
					'label'	=> trans('website_name'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'website_url',
					'label'	=> trans('website_url'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'website_login_url',
					'label'	=> trans('website_login_url'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->add_website();
			}
			else
			{
				if($this->admin_model->add_website())
				{
					$this->session->set_flashdata('success_message', trans('website_successfully_added'));
					redirect(site_url('admin/add_website'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('admin/add_website'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}

	// edit user
	public function edit_website($id = '')
	{
		$websites = $this->admin_model->edit_website($id);
		$data = [
            'page'      	=> 'website/edit_website',
            'page_title' 	=> trans('edit_website'),
            'websites'		=> $websites
        ];
        $this->load->view('admin/index', $data);
	}

	// edit website post form 
	public function edit_website_post()
	{
		if ($this->input->post()) {
			$web_id = $this->input->post('web_id');
			
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'website_id',
					'label'	=> trans('website_id'),
					'rules'	=> 'required|xss_clean|trim|numeric'
				],
				[
					'field'	=> 'website_name',
					'label'	=> trans('website_name'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'website_url',
					'label'	=> trans('website_url'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'website_login_url',
					'label'	=> trans('website_login_url'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->edit_website($web_id);
			}
			else
			{
				if($this->admin_model->update_website($web_id))
				{
					$this->session->set_flashdata('success_message', trans('website_successfully_edited'));
					redirect(site_url('admin/website_list'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('admin/website_list'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}


	// settings
    public function settings()
    {
    	$data = [
            'page'      	=> 'settings/settings',
            'page_title' 	=> trans('settings')

        ];
        $this->load->view('admin/index', $data);
    }


    // settings post 
	public function settings_post()
	{
		if ($this->input->post()) {
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'sitename',
					'label'	=> trans('sitename'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'registration',
					'label'	=> trans('registration'),
					'rules'	=> 'xss_clean|trim'
				],
				[
					'field'	=> 'onesignal_app_id',
					'label'	=> trans('onesignal_app_id'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
				[
					'field'	=> 'onesignal_api_key',
					'label'	=> trans('onesignal_api_key'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[255]'
				],
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->settings();
			}
			else
			{
				if($this->admin_model->settings())
				{
					$this->session->set_flashdata('success_message', trans('settings_successfully_updated'));
					redirect(site_url('admin/settings'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('admin/settings'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}

}