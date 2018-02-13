<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_populer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('pembeli/homepage/produk_populer');
  }

}
