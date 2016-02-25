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
		$header['title'] = 'Home';
		$this->load->view('header', $header);
		$this->load->view('personalization/index');
		$this->load->view('footer');
	}

}