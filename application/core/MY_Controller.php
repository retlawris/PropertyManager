<?php
Class MY_Controller Extends CI_Controller{

	public function __construct(){
		parent::__construct();

	}
	public function is_logged_in()
	{
		return isset($this->session->userdata['logged_in']);
	}
}

