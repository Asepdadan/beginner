<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_message extends CI_Model {

	public function insert($tablename,$data)
	{
		$query = $this->db->insert($tablename,$data);
		return $query;
	}

	public function select($tablename)
	{
		$query = $this->db->get($tablename);
   		return $query->result_array();
	}
}