<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Produk extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model(array('products_model', 'iice_model'));
		}

		public function index()
		{
			$this->list_product();
		}

		public function add_product()
		{
			$this->load->view('test_data/tambah_product');
		}

		public function detail_produk($idProduct)
		{
			$data = array(
					'detail_produk' => $this->products_model->getSingleProduct($idProduct)->result()
			);

			$this->load->view('pembeli/homepage/detail_produk', $data);
			
		}

		public function list_product()
		{
			$data['allproduct'] = $this->products_model->getAllProduct();
			$this->load->view('pembeli/produk/produk', $data);
		}

	}
	
	/* End of file Dashboard.php */
	/* Location: ./application/controllers/users/Dashboard.php */

?>