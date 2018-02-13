<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_model extends CI_Model {

	public $order = 'DESC';
	public $id = 'id_jb';

	public function __construct()
	{
		parent::__construct();
	}
	public function view_data($tabel, $limit, $offset)
	{
		$this->db->from('gaji');
		$this->db->limit($limit, $offset);
		return $this->db->get();
	}

	public function insert_data($data)
	{
		$this->db->insert('gaji', $data);
	}

	function total_rows($q = NULL)
	{
        $this->db->like('id', $q);
        $this->db->or_like('pokok', $q);
        $this->db->or_like('tjg', $q);
		$this->db->or_like('bonus', $q);
		$this->db->from('gaji');
        
        return $this->db->count_all_results();
    }

    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('pokok', $q);
        $this->db->or_like('tjg', $q);
		$this->db->or_like('bonus', $q);
		$this->db->limit($limit, $start);
        return $this->db->get('gaji')->result();
    }
    function delete_data($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('gaji');
    }
    function get_by_id($id)
    {
    	$this->db->where('id', $id);
    	$data = $this->db->get('gaji')->result();
    	return $data;
    }
    function update_data($id, $data)
    {
    	$this->db->where('id', $id);
    	$this->db->update('gaji', $data);
    }

}
