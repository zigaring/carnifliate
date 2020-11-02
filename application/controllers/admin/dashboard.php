<?php
	class dashboard extends CI_Controller
	{
		public function index()
		{
			if(!$this->session->userdata('logged_in')){  //login check
				redirect('admin/login');
			}
			$this->load->view('templates/header');
			$this->load->view('');
		}


	}

?>