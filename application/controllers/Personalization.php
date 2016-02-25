<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personalization extends CI_Controller {
	public function __construct(){
		// parent::__construct();
  //       $this->load->library('session');
  //       if(!$this->session->userdata('finadmin') == 'yesiam'){
  //           redirect(base_url().'login');
  //       }
 	parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('finadmin')=='yesiam'){
			redirect(base_ur().'login');
		}
	}

	public function index(){
		$header['title'] = 'Personalization';
		$this->load->view('header', $header);
		$data = $this->getDataDetail();
		$content = array(
            'table' => $data[0]
        );
		
		 
		 	echo $data[0]['username'];
		 // $content  = array('detail' => $getdetail );
		$this->load->view('personalization/index',$content);
		$this->load->view('footer');
	}


	public function getDataDetail(){
		$this->load->model('adminmodel');
		$getid = $this->session->userdata('id');
		echo $getid;
		$getrow = $this->adminmodel->getAdminByID($getid);
		return $getrow;
	}


}