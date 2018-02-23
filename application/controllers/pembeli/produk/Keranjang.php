<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('products_model'));
  }

  function index()
  {
    $this->load->view('pembeli/homepage/cart');
  }

  function add_cart($idproduct)
  {
    $product = $this->products_model->getSingleProduct($idproduct)->row();
    $data = array(
                  'id'      => $product->ProductID,
                  'name'   => $product->DescriptionsName,
                  'price'   => $product->ProductPrice,
                  'qty' => 1,
                  'image' => $product->ProductsImage,
                  'options' => array('Keterangan' => $product->DescriptionsDetails)
                );
      $this->cart->insert($data);
    
    redirect(base_url());
  }

  function delete_cart($rowid)
  {
    $data = array(
      'rowid' => $rowid,
      'qty' => 0
    );
    $this->cart->update($data);
    // $this->load->view('pembeli/homepage/cart');
    redirect(base_url().'pembeli/keranjang');
  }

  function clear_cart()
  {
    $this->cart->destroy();
		$this->load->view('pembeli/homepage/cart');
  }

}
