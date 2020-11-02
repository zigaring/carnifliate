<?php
	class Show_model extends CI_Model
	{
		public function get_show($id = FALSE)
		{
			if($id === FALSE)
				{
				$this->db->order_by('id','ASC');
				$query = $this->db->get('shows');
				return $query->result_array();
				}
			else
			{
				$query = $this->db->get_where('shows', array('id' => $id));
				return $query->row_array();
			}
		}

		public function create_show()
		{
			$data = array(
					'date' => $this->input->post('date'),
					'city' => $this->input->post('city'),
					'country' => $this->input->post('country'),
					'venue' => $this->input->post('venue')
					);
				return $this->db->insert('shows',$data);
		}

		public function update_show()
		{
			$data = array(
				'date' => $this->input->post('date'),
				'city' => $this->input->post('city'),
				'country' => $this->input->post('country'),
				'venue' => $this->input->post('venue')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('shows', $data);
		}

		public function delete_show($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('shows');
			return true;
		}
	}

?>