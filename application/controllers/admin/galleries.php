<?php
	class galleries extends CI_Controller
	{
		public function index()
		{
			$data['title'] = 'Photo Gallery';
			$data['galleries'] = $this->gallery_model->get_galleries();
	
			//$data['photos'] = $this->gallery_model->get_first_image($gallery_id);
			
			$this->load->view('templates/header');
			$this->load->view('pages/gallery', $data);
			$this->load->view('templates/footer');
		}

		public function gallery_view($slug = NULL)
		{
			$data['gallery'] = $this->gallery_model->get_galleries($slug);
			$data['title'] = $data['gallery']['name'];

			//$data['gallery_id'] = $data['gallery']['id'];  --ne rabiš
			$data['images'] = $this->gallery_model->get_images($data['gallery']['id']);

			//print_r ($data); --za preverit podatke v arrayu

			$this->load->view('templates/header');
			$this->load->view('pages/view', $data);
			$this->load->view('templates/footer');
		}

		public function gallery_add()
		{
			$this->load->view('templates/header');
			$this->load->view('pages/gallery_add');
			$this->load->view('templates/footer');
		}

		public function gallery_insert()
		{
			$this->form_validation->set_rules('name','Name','required');

			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('pages/gallery_add');
				$this->load->view('templates/footer');
			}
			else
			{
	          	$this->gallery_model->gallery_insert();
           		redirect('galleries');
			}
		}

		public function image_insert($slug)
		{
			$data = array();

				$countfiles = count($_FILES['files']['name']);

				for($i=0; $i<$countfiles; $i++)
				{
					$_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                    $config['upload_path'] = './assets/images/gallery';
		           	$config['allowed_types'] = 'jpg|png|';
		            $config['max_size'] = '2048';
		            $config['max-width'] = '1000';
		            $config['max_height'] = '1000';

		            $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 

                  // Upload file to server 
                    if($this->upload->do_upload('file'))
                    { 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 

                       // $uploadData[$i]['image_name'] = $fileData['image_name'];
                        $post_image = $_FILES['file']['name'];
                        $gallery_id = $this->input->post('id');  

                        // Insert files data into the database 
                 		$this->gallery_model->image_insert($post_image, $gallery_id);  
                    }
                    else
                    {  
                        $error = array('error' => $this->upload->display_errors());
              	 		$this->load->view('templates/header');
						$this->load->view('pages/view', $error);
						$this->load->view('templates/footer');
                    } 
                } 
           		 redirect('admin/galleries/gallery_view/'.$slug);	
			}
		}
	

?>