<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_produk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('iice_model'));
  }

  function index()
  {
    $this->load->view('pembeli/homepage/kategori');
  }

  function viewCategoryProduct($id)
  {
    $data['subcategory'] = $this->iice_model->where1('library_products_subcategory', 'ProductCategoryID', $id);
    $this->load->view('pembeli/homepage/subkategori', $data);    
  }

}
