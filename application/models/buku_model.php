<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class buku_model extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function getBook(){
			return array(
					array ( 'judul' => 'Belajar Framework CI',
							'pengarang' => 'Budi Raharjo',
							'penerbit' => 'Informatika'
							),
					array ('judul' => 'Mahir PBO dalam Semalam',
							'pengarang' => 'Moh.Arifin',
							'penerbit' => 'Andi Offset'
							)
			);
		}
	}
?>