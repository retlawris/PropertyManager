<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();


    }

    public function index()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/account/account');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function edit()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/account/account-edit');
        } else {
            redirect("backend/auth/login");
        }

    }

}