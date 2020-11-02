<?php
	class shows extends CI_Controller
	{
		public function index()
		{
			$data['title'] = 'Upcoming Shows';

			$data['shows'] = $this->show_model->get_show();

			$this->load->view('templates/header');
			$this->load->view('pages/show', $data);
			$this->load->view('templates/footer');
		}

		public function create()
		{
			if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}

			$this->form_validation->set_rules('date','Date','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('country','Country','required');
			$this->form_validation->set_rules('venue','Venue','required');

			if($this->form_validation->run() === FALSE)
			{
				redirect('admin/shows/create');
			}
			else
			{
				$this->show_model->create_show();
				redirect('shows');
			}
		}

		public function edit($id)
		{
			if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}

			$data['title'] = 'Edit Show';
			$data['show'] = $this->show_model->get_show($id);

			if(empty($data['show'])){
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/edit', $data);
			$this->load->view('templates/footer');
			
		}

		public function update()
		{
			if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}

			$this->show_model->update_show();
			redirect('shows');
		}


		public function delete($id)
		{
			if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}

			$this->show_model->delete_show($id);
			redirect('shows');
		}
	}

?>