<?php
	class about extends CI_Controller
	{
		public function index()
		{
			$data['title'] = 'About';

			$data['about'] = $this->admin_model->get_about();

			$this->load->view('templates/header');
			$this->load->view('pages/about', $data);
			$this->load->view('templates/footer');
		}

		public function update_about()
		{
			if(!$this->session->userdata('logged_in')){
				redirect('about');
			}

			$this->admin_model->update_about();
			redirect('about');
		}
	}
?>