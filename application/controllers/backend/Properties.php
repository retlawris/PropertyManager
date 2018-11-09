<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();


    }

    public function index()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/properties/properties');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function add()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/properties/properties-add');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function edit()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/properties/properties-edit');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function view()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/properties/properties-view');
        } else {
            redirect("backend/auth/login");
        }

    }

}