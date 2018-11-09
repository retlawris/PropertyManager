<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners extends MY_Controller {

    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();


    }

    public function index()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/owners/owners');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function add()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/owners/owners-add');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function edit()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/owners/owners-edit');
        } else {
            redirect("backend/auth/login");
        }

    }

    public function view()
    {
        if  ($this->is_logged_in()) {
            $this->load->front_store_template('backend/pages/owners/owners-view');
        } else {
            redirect("backend/auth/login");
        }

    }

}