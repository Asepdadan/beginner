<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_chart extends CI_Model {

	public function select($tablename)
	{

		$data = $this->db->get($tablename);
		return $data->result_array();
	}

}