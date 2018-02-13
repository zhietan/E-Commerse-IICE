<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

	public $order = 'DESC';
	public $id = 'id_jb';

	public function __construct()
	{
		parent::__construct();
	}
	public function view_data($tabel, $limit, $offset)
	{
		$this->db->from($tabel);
		$this->db->limit($limit, $offset);
		return $this->db->get();
	}

	public function insert_data($data)
	{
		$this->db->insert('jabatan', $data);
	}

	function total_rows($q = NULL)
	{
        $this->db->like('id_jb', $q);
		$this->db->or_like('nama_jb', $q);
		$this->db->from('jabatan');
        
        return $this->db->count_all_results();
    }

    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_jb', $q);
		$this->db->or_like('nama_jb', $q);
		$this->db->limit($limit, $start);
        return $this->db->get('jabatan')->result();
    }
    function delete_data($id)
    {
    	$this->db->where('id_jb', $id);
    	return $this->db->delete('jabatan');
    }
    function get_by_id($id)
    {
    	$this->db->where('id_jb', $id);
    	$data = $this->db->get('jabatan')->result();
    	return $data;
    }
    function update_data($id, $data)
    {
    	$this->db->where('id_jb', $id);
    	$this->db->update('jabatan', $data);
    }

}
