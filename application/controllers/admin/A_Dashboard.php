<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Dashboard extends CI_Controller {

	public function __construct()
	{
		
	}

	public function index()
	{
		$this->load->view('admin/a_dashboard');
	}

}

/* End of file A_Dashboard.php */
/* Location: ./application/controllers/admin/A_Dashboard.php */