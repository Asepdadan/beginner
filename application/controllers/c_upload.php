<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_upload extends CI_Controller
{
    var $limit=10;
    var $offset=10;
 
    public function __construct() {
        parent::__construct();
        $this->load->model('model_upload'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url
        $this->load->library('upload');
 
    }
 
    public function index($page=NULL,$offset='',$key=NULL)
    {
        //$data['titel']='Upload CodeIgniter'; //varibel title
         
        //$data['query'] = $this->model_upload->get_allimage('upload'); //query dari model
        
        //$this->load->view('upload',$data); //tampilan awal ketika controller upload di akses
    }
    public function tambah() {
         
        $data['titel']='Form Upload CodeIgniter'; //varibel title
         
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('form_upload',$data);
        
    }
    public function insert(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nama' =>$gbr['file_name'],
                  'tipe' =>$gbr['file_type']
                   );
 
                $this->mupload->get_insert('daftar',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('c_upload'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('c_upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    public function upload()
    {
		
		$config['upload_path']    	 = './upload_image/';
		$config['allowed_types']    	 = 'gig|jpg|png';
		$config['max_size']    	 = '1000';
		$config['max_width']    	 = '2024';
		$config['max_height']    	 = '1468';

		$this->load->library('upload',$config);
		
		$this->load->model('model_upload');
		$this->load->helper(array('form','url'));
			$data['message'] = '';
			if(! $this->upload->do_upload())
			{
				if(isset($_POST['submit']))
					$data['message'] = $this->upload->display_errors();
				}
				else{
					$data['upload_data'] = $this->upload->data();
					$data['message'] = 'anda telah sukses mengupload gambar';

					$config_resize = array(
						'source_image' => $data['upload_data']['full_path'],
						'new_image' => './thumb/',
						'maintain_ration' => true,
						'width' => 160,
						'height' => 120
						);

					$this->load->library('image_lib', $config_resize);
					if( ! $this->image_lib->resize())
					{
						$data['message'] = $this->image_lib->display_errors();
					}
				}

				$data['images'] = $this->model_upload->fetch_image(FCPATH.'upload_image');
				$this->load->view('upload',$data);

    }
}
 