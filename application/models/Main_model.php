<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function insert_data($data)
	{
		$this->db->insert('tbl_user', $data);
	}
	function fetch_data($tbl)
	{
		$this->db->select('*');
		$this->db->from($tbl);
		$query = $this->db->get();
		return $query->result();
	}
	function delete_data($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_user');
	}
	function fetch_single_data($tabel, $attr, $id)
	{
		$this->db->where($attr, $id);
		$query = $this->db->get($tabel);
		return $query->result();
	}
	function where1($tabel, $att, $isi)
	{
		$this->db->where($att, $isi);
		return $this->db->get($tabel)->row();
	}
	function where2($tabel, $att1, $isi1, $att2, $isi2)
	{
		$this->db->where($att1, $isi1)->where($att2, $isi2);
		return $this->db->get($tabel)->row();
	}
	function hitung($tabel, $attr)
	{
		return $this->db->query("SELECT COUNT($attr) AS jumlah FROM $tabel")->row();
	}
	function view_all($tabel, $att)
	{
		$this->db->order_by($att, 'DESC');
		return $this->db->get($tabel)->result();
	}

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */