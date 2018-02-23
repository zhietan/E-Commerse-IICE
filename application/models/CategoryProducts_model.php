<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class CategoryProducts_model extends CI_Model {

		public $tableName = 'library_products_category';
	
		public function __construct()
		{
			parent::__construct();
		}

		public function getAllCategoryProduct()
		{
			$data = $this->db->query('SELECT * FROM library_products_subcategory
										INNER JOIN library_products_category  ON library_products_subcategory.ProductCategoryID = library_products_category.ProductCategoryID
									');
			return $data;
		}
		public function insert($data)
		{
			return $this->db->insert($this->tableName, $data);
		}

	
	}
