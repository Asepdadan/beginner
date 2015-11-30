<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	
	public function tampil()
	{
	$query = $this->db->get('mahasiswa');
	return $query->result_array();
	}

	public function delete($tableName,$where)
	{
		$req = $this->db->delete($tableName,$where);
		return $req;
	}

	public function select($npm)
	{
		$this->db->select('id, npm, nama');

		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}

}