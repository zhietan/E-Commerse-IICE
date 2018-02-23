<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public $tables = 'library_users';

    public function add_account($data) {
    // gunakan return untuk mengembalikan nilai ke controller yang nantinya akan dioper lagi ke proses email
    return $this->db->insert($this->tables, $data);
  }

	function changeActiveState($key)
	{
		$data = array(
		'UserIsActive' => 1,
		'UserEmailVerified' => 1
	);
		$this->db->where('UserVerificationCode', $key);
		$this->db->update($this->tables, $data);
		return true;
	}
}
