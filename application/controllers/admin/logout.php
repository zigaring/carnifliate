<?php
	class logout extends CI_Controller
	{
		public function index()
		{
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('logged_in');

			redirect('home');
		}
	}

?>