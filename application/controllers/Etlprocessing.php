<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etlprocessing extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
		ini_set('memory_limit','2048M');
         $this->load->library('session');
        if(!$this->session->userdata('finadmin') == 'yesiam'){
            redirect(base_url().'login');
        }
    }



    public function index(){
        $header['title'] = 'Home';
       $this->load->view('header',$header);
       $this->load->view('etlprocessing/index');
       $this->load->view('footer');
      

    }

    
}