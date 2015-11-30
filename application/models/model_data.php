<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {


	public function select($tablename)
	{
		$query = $this->db->get($tablename);
		return $query->result_array();

	}

	public function delete($tablename,$where)
	{
		$query = $this->db->delete($tablename, $where);
		return $query;

	}

	public function get($where="")
	{
		$query = $this->db->query('select * from daftar'.$where);
		return $query->result_array();
	}

	public function update($tablename,$data,$where)
	{
		$query = $this->db->update($tablename,$data,$where,$limit);
		return $query;

	}

	public function update_data($username,$email,$npm)
	{
		
	}
}
