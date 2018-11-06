<?php
error_reporting(0);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        header('Content-type: text/json');
        date_default_timezone_set('Africa/Nairobi');
        //Load email library
        $this->load->library('email');
        $this->load->library('session');
        $this->load->helper('form');

    }

    public function index()
    {
        echo json_encode(array("response" => "Welcome to Salon."));
    }

    public function login() {
        $data = array();
        $_POST = $_REQUEST;

        $this->form_validation->set_rules('username', 'Username',  'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $data["response"] = false;
            $data["status"] = 201;
            $data["error"] =  strip_tags($this->form_validation->error_string());

        }else {
            $params=array(
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password')
            );
            $row=$this->Auth_model->login($params);

            if (count($row) > 0):
                //create session
                //check if user is created by certain user (secodary admin)
                if($row->created_by == 0):
                    $session_data =array(
                        "user_id"=>$row->id,
                        "log_user_id"=>$row->id,
                        "user_fullname"=>$row->fullname,
                        "user_email"=>$row->email,
                        "user_roleid"=>$row->role_id,
                        "user_phone"=>$row->phone
                    );
                else:
                    $session_data =array(
                        "user_id"=>$row->created_by,
                        "log_user_id"=>$row->id,
                        "user_fullname"=>$row->fullname,
                        "user_email"=>$row->email,
                        "user_roleid"=>$row->role_id,
                        "user_phone"=>$row->phone
                    );
                endif;
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);

                $data["response"] = true;
                $data["status"] = 200;
                $data["data"] = array(
                    "user_roleid"=>$row->role_id,
                    "user_id"=>$row->id,
                    "user_fullname"=>$row->fullname,
                    "user_email"=>$row->email,
                    "user_phone"=>$row->phone,
                    "user_image"=>$row->image
                );

                //pass username
                $data["response"] = true;
                $data["status"] = 200;
                $data["error"] = 'Welcome.';

            else:
                $data["response"] = false;
                $data["status"] = 201;
                $data["error"] = 'Username or password is incorrect.';
            endif;
        }
        echo json_encode($data);
    }

    public function logout() {
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
    }

}