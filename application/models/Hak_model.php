<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_model extends CI_Model {

	public $order = 'DESC';
	public $id = 'id';

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
		$this->db->insert('hak_akses', $data);
	}

	function total_rows($q = NULL)
	{
        $this->db->like('id', $q);
        $this->db->or_like('nama_akses', $q);
		$this->db->or_like('id_akses', $q);
		$this->db->from('hak_akses');
        
        return $this->db->count_all_results();
    }

    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->or_like('id', $q);
        $this->db->or_like('nama_akses', $q);
        $this->db->or_like('id_akses', $q);
		$this->db->limit($limit, $start);
        return $this->db->get('hak_akses')->result();
    }
    function delete_data($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('hak_akses');
    }
    function get_by_id($id)
    {
    	$this->db->where('nip', $id);
    	$data = $this->db->get('karyawan')->result();
    	return $data;
    }
    function update_data($id, $data)
    {
    	$this->db->where('nip', $id);
    	$this->db->update('karyawan', $data);
    }

}
