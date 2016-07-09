<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createreport extends CI_Controller {



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
      $header['title'] = 'Rawat Jalan';
      $this->load->view('headerolap',$header);
      $this->load->view('olap/index');
      $this->load->view('footerolap');

      

    }

    public function already(){
      $this->session->keep_flashdata('table');
      if ($this->session->flashdata('table') != null) {
             $body['table'] = $this->session->flashdata('table');
            $this->load->view('olap/generate',$body);
            $this->getpdf();
        } else {
            show_error("No direct access allowed");
        }
     
    }
    public function getpdf(){
          ob_start();
          $content = $this->load->view('olap/generate','');
          $content = ob_get_clean();

          $this->load->library('html2pdf');
          try
          {
            $html2pdf = new HTML2PDF('L', 'A3', 'en');
            $html2pdf->setDefaultFont('Arial');
            $html2pdf->writeHTML($content);
          //  $html2pdf->Output($_SERVER['DOCUMENT_ROOT'].'/pdfextractor/asset/pdf/tes9.pdf', 'F');
            $html2pdf->Output('tes.pdf', 'I');
          }
          catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
          }
    }

    public function gettable(){
      if ($this->input->is_ajax_request()) {
            $target = $this->input->post('target');
            $this->session->set_flashdata('table', $target);
            
                echo '1';
            
        } else {
            show_error("No direct access allowed");
        }
    }

    
}