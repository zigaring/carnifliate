<?php
	class Gallery_model extends CI_Model
	{
		public function get_galleries($slug = FALSE)
		{
			if($slug === FALSE)
			{ 	
				$this->db->order_by('id','DESC');
				$query = $this->db->get('gallery');
				return $query->result_array();
			}
			else
			{
				$query = $this->db->get_where('gallery', array('slug' => $slug));
				return $query->row_array();
			}	
		}

		public function gallery_insert()
		{
			$slug = url_title($this->input->post('name'));

			$data = array(
					'name' => $this->input->post('name'),
					'slug' => $slug
					);
			
			return $this->db->insert('gallery',$data);
		}

		public function image_insert($post_image, $gallery_id)
		{
			$data = array(
				'gallery_id' => $gallery_id,
				'image_name' => $post_image
			);

			return $this->db->insert('photo', $data);
		}

		public function get_images($gallery_id)
		{	
			$this->db->join('gallery','gallery.id = photo.gallery_id');

			$query = $this->db->get_where('photo', array('gallery_id' => $gallery_id));
			return $query->result_array();
		}
	}

?>