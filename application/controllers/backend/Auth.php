<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {


    public function index()
    {
        if  ($this->is_logged_in()) {
            redirect("backend/dashboard");

        } else {
            redirect("backend/auth/login");
        }

    }

    public function login() {

        if  ($this->is_logged_in()) {
            redirect("backend/dashboard");
        } else {
            $this->load->view('backend/login');
        }
    }

    public function logout() {

    }
}