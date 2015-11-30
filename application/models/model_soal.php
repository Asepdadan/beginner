<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_soal extends CI_Model {

	public function select($tablename)
	{
		$query = $this->db->get($tablename);
		return $query->result_array();

	}

	public function select_hitung()
	{

		$this->db->select('jawaban');
		$query = $this->db->get('soal');

		return $query;
	}

	public function insert($tablename,$data)
	{
		$query = $this->db->insert($tablename,$data);
		return $query;

	}
}