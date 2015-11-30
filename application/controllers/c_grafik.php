<?php
 
class C_grafik extends CI_Controller {
 /**
  *
  **/
 function __construct()
 {
  parent::__construct(); 
  $this->load->model('model_chart','',TRUE);
  $this->load->database();
  $this->load->helper('url');
 }

 public function index()
 {

 	$req = $this->model_chart->select('nilai');

 	
 	
 	

 	$this->load->view('admin/head');
	$this->load->view('admin/sidebar');
 	$this->load->view('chart/v_grafik');
 	$this->load->view('admin/footer');
 }




}