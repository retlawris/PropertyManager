<?php

class MY_Loader extends CI_Loader {
	public function front_store_template($template_name, $data = array(), $return = FALSE)
	{
		if($return):

			$content  = $this->view('backend/templates/header', $data, $return);
			$content .= $this->view($template_name, $data, $return);
			$content .= $this->view('backend/templates/footer', $data, $return);

			return $content;
		else:
			$this->view('backend/templates/header', $data);
			$this->view($template_name, $data);
			$this->view('backend/templates/footer', $data);
		endif;
	}
	public function is_logged_in()
	{
		return isset($this->session->userdata['logged_in']);
	}

}
