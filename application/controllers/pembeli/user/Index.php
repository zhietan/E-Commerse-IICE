<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	/* Created By : SatrioDwiPrabowo@IICE-Dev
	*	19022018
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user');
		//$this->load->model('user_model','user');
	}


	// ------------------------------------------------------------------------
	// User
	// ------------------------------------------------------------------------
	public function signup()
	{
		 $email = $this->input->post('useremail', TRUE);
		 $nama = $this->input->post('fullname', TRUE);
		 $verification_code = random_string('alnum',20);
			if ($_POST) {
			  	$getUserIP = $this->input->ip_address();
				$data = array(
			      'UserFullName'  => $this->input->post('fullname'),
			      'UserPhone'  => $this->input->post('usertelephone'),
			      'UserEmail'  => $this->input->post('useremail'),
			      'UserPassword'  =>  $this->encryption->hash($this->input->post('userpassword')),
			      'UserRegistrationDate' => date('Y-m-d H:i:s'),
			      'UserverificationCode' => $verification_code,
			      'UserIP' => $getUserIP
		    );
	        $this->user->add_account($data);
	        $id = $this->input->post('userpassword');
			$encrypted_id = $this->encryption->hash($id);
	        $this->sendemail($email,$verification_code,
	        				 $encrypted_id,$nama);
	        $this->success_registration($nama,$email);
      }
    $this->load->view('pembeli/user/signup');
}
	public function success_registration($nama,$email)
	{
		$data['name'] 	= $nama;
		$data['emails']	= $email;
		$this->load->view('pembeli/user/user_verif',$data);
	}

	public function sendemail($email,$verification_code,$encrypted_id,$nama)
	{
		$config = array(
		    'protocol'  => $this->config->item('email_prot'),
		    'smtp_host' => $this->config->item('email_host'),
		    'smtp_port' => $this->config->item('email_port'),
		    'smtp_user' => $this->config->item('email_user'),
		    'smtp_pass' => $this->config->item('email_pass'),
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		        $this->email->initialize($config);
		        $this->email->from('sdp@telecompdc.id','IICE INDONESIA');
		        $this->email->to($email);
		        $this->email->subject("[NO-REPLY] Verifikasi Akun IICE");
		        $this->email->message("Hai $nama, silahkan verifikasi akun anda dengan mengikuti tautan dibawah ini ".base_url("verify/$verification_code'?utm_source=email-verification'"));
		         if($this->email->send())
		        {
		            echo "Berhasil melakukan registrasi, silahkan cek email kamu";
		        }else
		        {
		            echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email";
		            echo $this->email->print_debugger();
		        }
  }

	public function verifikasi()
	{
		$this->user->changeActiveState($key);
	}

	
	// ------------------------------------------------------------------------
	// Dashboard for View Chart
	// ------------------------------------------------------------------------

	public function view_cart()
	{
		$this->load->view('pembeli/homepage/cart');
	}

	// ------------------------------------------------------------------------
	// Dashboard for Keranjang
	// ------------------------------------------------------------------------

	public function keranjang()
	{
		$this->load->view('pembeli/homepage/keranjang');
	}

	
	// ------------------------------------------------------------------------
	// Dashboard for Resseler
	// ------------------------------------------------------------------------

	public function resseler()
	{
		$this->load->view('pembeli/homepage/resseler');
	}

	// ------------------------------------------------------------------------
	// Dashboard for Checkout
	// ------------------------------------------------------------------------

	public function checkout()
	{
		$this->load->view('pembeli/homepage/checkout');
	}

	// ------------------------------------------------------------------------
	// Checkut for pengiriman
	// ------------------------------------------------------------------------

	public function pengiriman()
	{
		$this->load->view('pembeli/homepage/pengiriman');
	}

	// ------------------------------------------------------------------------
	// Checkut for pembayaran
	// ------------------------------------------------------------------------

	public function pembayaran()
	{
		$this->load->view('pembeli/homepage/pembayaran');
	}

	// ------------------------------------------------------------------------
	// Checkut for review
	// ------------------------------------------------------------------------

	public function review()
	{
		$this->load->view('pembeli/homepage/review');
	}


}

/* End of file User.php */
/* Location: ./application/controllers/pembeli/User.php */