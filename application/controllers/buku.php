<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Buku extends CI_Controller{
		
		//property
		public $data = '';
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('buku_model');
		}
		
		public function index()
		{
			$this->data['data_buku'] = $this->buku_model->getBook();
			
			//load view
			$this->load->view('buku_view', $this->data);
		}
	}