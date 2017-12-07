<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {


	public function insert($foto)
	{
		$data = array(
			//nama_kolom //nama form_input

			'id'   			=> NULL,
			'nama' 			=> $this->input->post('nama'),
			'asal_smp'		=> $this->input->post('asal_smp'),
			'alamat'		=> $this->input->post('alamat'),
			'no_telp'		=> $this->input->post('telp'),
			'foto'			=> $foto['file_name']
			);

		//proses insert data
		$this->db->insert('pendaftar',$data);

		//cek keberhasilan insert data
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file pendaftaran_model.php */
/* Location: ./application/models/pendaftaran_model.php */

?>