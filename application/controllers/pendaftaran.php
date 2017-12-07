<?php
	defined('BASEPATH') OR exit ('NO direct script access allowed');

	/**
	* 
	*/
	class Pendaftaran extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('pendaftaran_model');
		}

		public function index()
		{
			$data['main_view'] = "pendaftaran_view";
			$this->load->view('template', $data);
		}

		public function simpan()
		{
				//validasi form
				$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
				$this->form_validation->set_rules('telp', 'No.Telp', 'trim|required|numeric');
				$this->form_validation->set_rules('asal_smp', 'Asal SMP', 'trim|required');
			
			//menjalankan validasi form
			if($this->form_validation->run() == TRUE) {

				//konfigurasi upload foto
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';

				//load libarary upload file
				$this->load->library('upload', $config);

				//jika upload file berhasil
				if ($this->upload->do_upload('foto'))
				{
						//insert data jika validasi berhasil
					if ($this->pendaftaran_model->insert($this->upload->data()) == TRUE) 
					{
						//jika pendaftaran sukses
						$data['notif'] = 'Pendaftaran siswa berhasil';
						$data['main_view'] = 'pendaftaran_view';
						$this->load->view('template',$data);

					}else {
						//jika pendaftaran gagal atau RETURN FALSE
						$data['notif'] = 'pendaftaran gagal!';
						$data['main_view'] = 'pendaftaran_view';
						$this->load->view('template',$data);
					}

				}
				//jika upload gagal
				else{
					$data['main_view'] 	= 'pendaftaran_view';
					$data['notif']		= $this->upload->display_errors();
					$this->load->view('template', $data);
				}
					
				
			}else{
				//jika validasi gagal
				$data['notif'] = validation_errors();
				$data['main_view'] = 'pendaftaran_view';
				$this->load->view('template',$data);
			}
		}
	}
