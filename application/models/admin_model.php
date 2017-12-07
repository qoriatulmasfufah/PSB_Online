<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin_model extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();

		}

		public function cek_user()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$query = $this->db->where('username',$username)
							->where('password',md5($password))
							->get('admin');


			if ($query->num_rows() > 0) {
				$data = array(
						'username'	=> $username,
						'logged_in'	=> TRUE);

				$this->session->set_userdata($data);
				return TRUE;

			} else {
				return FALSE;
			}
	
		}


		public function delete($id_pendaftar)
		{
			$this->db->where('id', $id_pendaftar)
					->delete('pendaftar');
			//cek apakaah hapus berhasil
					if ($this->db->affected_rows() > 0) 
					{
						return TRUE;
					} else {
						return FALSE;
					}
		}

		public function get_data_pendaftar($limit,$start){
			return $this->db->limit($limit, $start)
							->get('pendaftar')
							->result();
		}

		public function get_detail_pendaftaran($id_siswa)
		{

			return $this->db->where('id', $id_siswa)
							->get('pendaftar')
							->row();
		}

		public function total_records()
		{
			return $this->db->from('pendaftar')
							->count_all_results();
		}
	}
	
	/* End of file admin_model.php */
	/* Location: ./application/models/admin_model.php */

?>