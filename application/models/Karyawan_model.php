<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

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
		$this->db->insert('karyawan', $data);
	}

	function total_rows($q = NULL)
	{
        $this->db->like('nip', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('alamat', $q);
		$this->db->or_like('tlp', $q);
		$this->db->from('karyawan');
        
        return $this->db->count_all_results();
    }

    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->or_like('nama', $q);
        $this->db->or_like('alamat', $q);
        $this->db->or_like('tlp', $q);
		$this->db->limit($limit, $start);
        return $this->db->get('karyawan')->result();
    }
    function delete_data($id)
    {
    	$this->db->where('nip', $id);
    	return $this->db->delete('karyawan');
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
