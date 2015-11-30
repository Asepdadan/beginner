<?php
class Model_dashbord extends CI_Model {
   
   public function ambil($tablename)
   {
   	$this->db->group_by("id"); 
      $query = $this->db->get($tablename);

   	return $query->result_array();

   }

   public function insert_post($tablename,$data)
   {
   	$query = $this->db->insert($tablename,$data);
   	return $query;
   }

  }