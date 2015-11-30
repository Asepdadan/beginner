<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {


	function login($username,$password)
	{

		$hasil = $this->db->where('username',$username)
						  ->where('password',$password)
						  ->limit(1)
						  ->get('daftar');
		
		if($hasil->num_rows()>0)
		{
			return $hasil->row();

		}
		else
		{
			return false;
		}
	}

	function select($tablename)
	{
				$this->db->select('nama_depan, username');

				$query = $this->db->get($tablename);

				return $query->result();
	}

	
}