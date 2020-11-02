<?php
	class Admin_model extends CI_Model
	{
		public function verify($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('admins');

			if($result->num_rows() == 1)
			{
				return $result->row(0)->id;
			}
			else
			{
				return false;
			}
		}

		public function get_about()
		{
			$query = $this->db->get('about');
			return $query->result_array();
		}

		public function update_about()
		{
			$data = array(
				'opis_slo' => $this->input->post('opis_slo'),
				'opis_eng' =>$this->input->post('opis_eng')
			);

			return $this->db->update('about', $data);
		}
	}

?>