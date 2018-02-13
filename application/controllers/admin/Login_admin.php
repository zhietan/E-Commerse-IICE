<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login_admin extends CI_Controller {
	
		public function index()
		{
			$this->load->view('admin/login_admin');
		}

		public function verifikasi_user()
		
		public function keluar()
		{
			session_destroy();
			redirect(base_url('admin/login_admin'));
		}
	
	}
	
	/* End of file Login_admin.php */
	/* Location: ./application/controllers/admin/Login_admin.php */


?>