<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Products_model extends CI_Model {

		public $tableName = 'library_products';
	
		public function __construct()
		{
			parent::__construct();
		}

		public function getAllProduct()
		{
			$data = $this->db->query('SELECT * FROM library_products
										INNER JOIN library_products_category ON library_products.ProductCategory = library_products_category.ProductCategoryID
										INNER JOIN library_products_subcategory ON library_products.ProductSubCategory = library_products_subcategory.ProductSubCategoryID
										INNER JOIN library_products_model ON library_products.ProductModel = library_products_model.ModelID
										INNER JOIN library_products_images ON library_products_model.ModelID = library_products_images.ProductModel
										INNER JOIN library_products_descriptions ON library_products_model.ModelID = library_products_descriptions.ModelID GROUP BY library_products_images.ProductModel
									');
			return $data;
		}

		public function getSingleProduct($id)
		{
			$data = $this->db->query('SELECT * FROM library_products
										INNER JOIN library_products_category ON library_products.ProductCategory = library_products_category.ProductCategoryID
										INNER JOIN library_products_subcategory ON library_products.ProductSubCategory = library_products_subcategory.ProductSubCategoryID
										INNER JOIN library_products_model ON library_products.ProductModel = library_products_model.ModelID
										INNER JOIN library_products_images ON library_products_model.ModelID = library_products_images.ProductModel
										INNER JOIN library_products_descriptions ON library_products_model.ModelID = library_products_descriptions.ModelID
										WHERE library_products.ProductID = '.$id.' GROUP BY library_products_images.ProductModel');
			return $data;	
		}
	
	}
	
	/* End of file Products_model.php */
	/* Location: ./application/models/Products_model.php */
