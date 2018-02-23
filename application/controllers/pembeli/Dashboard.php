<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model(array('products_model','categoryproducts_model'));
		}

		public function index()
		{
			$data = array(
							'product_list' => $this->products_model->getAllProduct()->result(),
							'categoryproduct_list' => $this->categoryproducts_model->getAllCategoryProduct()->result()
						 );
			$this->load->view('pembeli/homepage/homePage', $data);
			
		}
	
	}
	
	/* End of file Dashboard.php */
	/* Location: ./application/controllers/users/Dashboard.php */

?>