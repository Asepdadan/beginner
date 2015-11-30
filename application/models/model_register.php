<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	public function insert($tablename,$data)
	{
		$query = $this->db->insert($tablename,$data); 
		return $query;
	}

	    function simpanfoto($tablename,$data)
    {
            $query = $this->db->insert_string($tablename, $data);
            $this->db->query($query);
    }
}
