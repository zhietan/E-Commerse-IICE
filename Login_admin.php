<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login_admin extends CI_Controller {
	
		public function index()
		{
			$this->load->view('admin/login_admin');
		}

		public function verifikasi_user()
		{
			$uname = $this->input->post('uname');
			$pass = $this->input->post('pass');
			if (($uname == 'administrator') and ($pass == 'admin')) {
				$_SESSION['id'] = 12345;
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $pass;
				redirect(base_url('admin/a_dashboard'));
			}else{
				$this->session->set_flashdata('info', 'periksa kembali username atau password anda');
				redirect(base_url('admin/login_admin'));
			}
		}

		public function keluar()
		{
			session_destroy();
			redirect(base_url('admin/login_admin'));
		}
	
	}
	
	/* End of file Login_admin.php */
	/* Location: ./application/controllers/admin/Login_admin.php */


?>