<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SubCategoryProducts_model extends CI_Model {

		public $tableName = 'library_products_subcategory';
	
		public function __construct()
		{
			parent::__construct();
		}

		public function getAllSubCategoryProduct()
		{
			$data = $this->db->query("SELECT *FROM library_products_category");
			return $data;
		}
		public function insert($data)
		{
			return $this->db->insert($this->tableName, $data);
		}

	
	}
