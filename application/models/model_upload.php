<?php
class Model_upload extends CI_Model {
   
 
    function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function fetch_image($path) {
        $this->load->helper('file');
        return get_filenames($path);
    }
 
    //fungsi insert ke database
    function get_insert($tablename,$data){
       $this->db->insert($tablename,$data);
       return TRUE;
    }
}