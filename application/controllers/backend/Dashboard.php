<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();


    }
    public function index()
    {
        if  ($this->is_logged_in()) {
//            redirect("backend/pages/dashboard");
            $this->load->front_store_template('backend/pages/dashboard');
        } else {
            redirect("backend/auth/login");
        }

    }

}