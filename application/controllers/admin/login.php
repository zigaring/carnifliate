<?php
	class login extends CI_Controller
	{
		public function index()
		{
			if($this->session->userdata('logged_in')){
				redirect('admin/shows');
			}
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		}

		public function verify()
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user_id = $this->admin_model->verify($username, $password);

			if($user_id)
			{

				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);  //set_userdata - funkcija v session library 
				redirect('admin/dashboard');
			}
			else
			{
				redirect('admin');
			}
		}
	}

?>