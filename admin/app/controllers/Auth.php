<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//check if logged in
		if ($this->auth_model->is_logged_in() === true) {
			if (is_admin()) {
	           redirect(site_url('admin/dashboard'));
	        }
	        else
	        {
	        	redirect(site_url('user/dashboard'));
	        }
		}
		$data = [
		'page'      => 'login',
		'page_title' => trans('login')
		];
		$this->load->view('auth/index', $data);
	}

	public function register()
	{
		//check if logged in
		if ($this->auth_model->is_logged_in() === true) {
			redirect(site_url());
		}

      	if (site_config('registration') !== "on") {
      		redirect(site_url());
      	}
		$data = [
		'page'      => 'register',
		'page_title' => trans('register')
		];
		$this->load->view('auth/index', $data);
	}

	// login_post
	public function login_post()
	{
		//check if logged in
		if ($this->auth_model->is_logged_in() === true) {
			redirect(site_url());
		}

		if ($this->input->post())
		{
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'username',
					'label'	=> trans('username'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[20]'
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
				return $this->login();
			}
			else
			{
				$result = $this->auth_model->login();
				if ($result === "admin") {
					$this->session->set_flashdata('success_message', trans('login_success'));
					redirect(site_url('admin/dashboard'));
				}
				elseif ($result === "user") {
					$this->session->set_flashdata('success_message', trans('login_success'));
					redirect(site_url('user/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('login_failed'));
					redirect(site_url());

				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}

	// register post
	public function register_post()
	{
		//check if logged in
		if ($this->auth_model->is_logged_in() == true) {
			redirect(site_url());
		}

		if ($this->input->post()) {
			
			//validate inputs
			$rules_config = [
				[
					'field'	=> 'username',
					'label'	=> trans('username'),
					'rules'	=> 'required|xss_clean|trim|min_length[3]|max_length[20]|is_unique[users.username]'
				],
				[
					'field'	=> 'password',
					'label'	=> trans('password'),
					'rules'	=> 'required|xss_clean|trim|min_length[6]|max_length[150]|matches[cpassword]'
				],
				[
					'field'	=> 'cpassword',
					'label'	=> trans('confirm_password'),
					'rules'	=> 'required|xss_clean|trim|min_length[6]|max_length[150]|matches[password]'
				]
			];

			$this->form_validation->set_rules($rules_config);

			if($this->form_validation->run() === FALSE)
			{
				return $this->register();
			}
			else
			{
				if($this->auth_model->register())
				{
					$this->session->set_flashdata('success_message', trans('registration_successful'));
					redirect(site_url('user/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error_message', trans('something_went_wrong'));
					redirect(site_url('register'));
				}
			}
		
		}
		else
		{
			redirect($this->agent->referrer());
		}
	}

	// logout
	public function logout()
	{
		$this->auth_model->logout();
		redirect(site_url());
	}
}