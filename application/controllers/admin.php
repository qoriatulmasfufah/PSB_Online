<?php
	defined('BASEPATH') OR exit ('NO direct script access allowed');

	/**
	* 
	*/
	class admin extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
		}

		public function index()
		{
			if($this->session->userdata('logged_in') == TRUE)
			{
				redirect(base_url('index.php/admin/data_siswa'));
			}else{
				$this->load->view('login_view');
			}	
			
		}

		public function data_siswa()
		{
			if($this->session->userdata('logged_in') == TRUE){
				$data['main_view'] = 'datasiswa_view';

				//load library pagination
				$this->load->library('pagination');
				
				$config['base_url'] = base_url().'index.php/admin/data_siswa';
				$config['total_rows'] = $this->admin_model->total_records();
				$config['per_page'] = 3;
				$config['uri_segment'] = 3;
				$config['full_tag_open'] = "<ul class='pagination'>";
				$config['full_tag_close'] = "</ul>";
				$config['first_link'] = 'First';
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				$config['cur_tag_open'] = "<li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";

				$this->pagination->initialize($config);
				$start = $this->uri->segment(3, 0);

				$rows = $this->admin_model->get_data_pendaftar($config['per_page'],$start);

				$data['pendaftar'] = $rows;
				$data['pagination'] = $this->pagination->create_links();
				$data['start'] = $start;

				
				//load view data siswa
				$this->load->view('template', $data);
			}else{
				redirect('admin');
			}
			
		}

		public function detail_siswa()
		{
			if ($this->session->userdata('logged_in')==TRUE) {
				$data['main_view']='detildatasiswa_view';
				$id_siswa=$this->uri->segment(3);
				$data['data']=$this->admin_model->get_detail_pendaftaran($id_siswa);
				$this->load->view('template',$data);
			
			}else{

				redirect('admin','refresh');
			}

			
		}

		public function login()
		{
			if ($this->input->post('submit')) 
			{
				$this->form_validation->set_rules('username','Username','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');

				if ($this->form_validation->run() == TRUE) {
					if($this->admin_model->cek_user() == TRUE ){
						redirect(base_url('index.php/admin/data_siswa'));
					}else{
						$data['notif'] = 'login sukses';
						$this->load->view('login_view',$data);
					}
					

				}else{
					$data['notif'] = validation_errors();
					$this->load->view('login_view',$data);
				}
			}
		}

		public function logout()
		{
			$data = array(
					'username' 	=> '',
					'logged_in' =>FALSE
				);
			$this->session->sess_destroy();
			redirect(base_url('index.php/admin'));
		}

		public function hapus()
		{
			if($this->session->userdata('logged_in') == TRUE)
			{
				$pendaftar = $this->uri->segment(3);

				//cek apakah proses hapus berhasil TRUE
				if ($this->admin_model->delete($pendaftar) == TRUE) 
				{
					//Berhasil hapus
					redirect('admin/data_siswa');
				}else{
					//gagal
					redirect('admin');
				}
			}else{
				redirect('admin');
			}
		}

	}

	
?>