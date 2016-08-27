<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Createreport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '2048M');
        $this->load->library('session');
        if (!$this->session->userdata('finadmin') == 'yesiam') {
            redirect(base_url() . 'login');
        }

        $this->load->model('reportmodel');
    }

    public function index() {
        $this->load->model('etlmodel');
        $a = $this->etlmodel->gethistorydesc();
        $content ['content'] = $a;
        $header['title'] = 'Rawat Jalan';
        $this->load->view('headerolap', $header);
        $this->load->view('olap/inputtanggal', $content);
        $this->load->view('footerolap');
    }

    public function getfile() {
       $start = $this->input->post('startdate');
       $end = $this->input->post('enddate');
       $mulai = str_replace("-", "", $start);
       $akhir = str_replace("-", "", $end);
       $name = 'pxrajal' . $mulai.$akhir;
       if(file_exists(FCPATH.'public/filejson/' . $name . '.json')){
            $this->session->set_flashdata('namafile', $name . '.json');
            $this->custom();
       }else{
            $hasil = $this->reportmodel->getdwreporttopten($mulai, $akhir);
            foreach ($hasil->result() as $key) {
                $posts[] = array(
                    "iddiagnosa" => $key->iddiagnosa,
                    "Totalcost" => $key->Totalcost,
                    "umurpx_berobat" => $key->umurpx_berobat,
                    "namaAsuransi" => $key->namaAsuransi,
                    "namaPenyakit" => $key->namaPenyakit,
                    "kodepenyakit" => $key->kodepenyakit,
                    "namadokter" => $key->namadokter,
                    "namaPoli" => $key->namaPoli,
                    "statusPoli" => $key->statusPoli,
                    "jenisRujukan" => $key->jenisRujukan,
                    "namaPasien" => $key->namaPasien,
                    "kotatinggal" => $key->kotatinggal,
                    "provinsitinggal" => $key->provinsitinggal,
                    "jenisKelamin" => $key->jenisKelamin,
                    "tanggal" => $key->tanggal,
                    "bulan" => $key->bulan,
                    "tahun" => $key->tahun,
                    "hari" => $key->hari
                );
            }
           
            $fp = fopen('public/filejson/' . $name . '.json', 'w');
            fwrite($fp, json_encode($posts));

            $this->session->set_flashdata('namafile', $name . '.json');
            $this->custom();
       }
    }

    public function save() {
        if ($this->input->is_ajax_request()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('namalaporan', 'namalaporan', 'required');
            $this->form_validation->set_rules('baris', 'baris', 'required');
            $this->form_validation->set_rules('kolom', 'kolom', 'required');
            $this->form_validation->set_rules('bulan', 'bulan', 'required');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('st' => 0, 'msg' => array('namalaporanalert' => form_error('namalaporan'), 'barisalert' => form_error('baris'), 'kolomalert' => form_error('kolom'), 'bulanalert' => form_error('bulan'))));
            } else {
                $laporan = $this->input->post('namalaporan');
                $bulan = $this->input->post('bulan');
                $tahun = $this->input->post('tahun');
                $kolom = $this->input->post('baris');
                $baris = $this->input->post('kolom');
                $date = date('Y-m-d H:i:s');
                $user = $this->session->userdata('username');
                $jenis = $this->input->post('jenislaporan');
                $namafile = $this->session->flashdata('namafile');                

                $data = array('namalaporan' => $laporan,
                              'kolom' => $kolom,
                              'baris' => $baris,
                              'author' => $user,
                              'datepost' => $date,
                              'bulan' => $bulan,
                              'tahun' => $tahun,
                              'jenis' => $jenis,
                              'namafile' => $namafile );
                $a = $this->reportmodel->insertreport($data);
                echo json_encode(array('st' => 1, 'msg' => 'done'));
            }
        } else {
            show_error('This page content is forbidden');
        }
    }

    public function directory(){
        $a = $this->reportmodel->getalreadyreport();
        $content ['table'] = $a;
        $header['title'] = 'Rawat Jalan';
        $this->load->view('headerolap', $header);
        $this->load->view('olap/directory', $content);
        $this->load->view('footerolap');
    }



    public function custom() {
        $this->session->keep_flashdata('namafile');
        $namafile = $this->session->flashdata('namafile');
        $this->session->keep_flashdata('namafile');
        $header['title'] = 'Rawat Jalan';
        $content ['namafile'] = $namafile;
        $this->load->view('headerolap', $header);
        $this->load->view('olap/index', $content);
        $this->load->view('footerolap');
    }

    public function generate($a){
      // if ($this->input->is_ajax_request()) {
          // $a = $this->input->post('target');
          $content = $this->reportmodel->getreportbyid($a);
          foreach ($content->result() as $key) {
            
            $contents ['kolom']= $key->kolom;
            $contents ['baris'] = $key->baris;
            $contents ['jenis'] = $key->jenis;
            $contents ['namalaporan'] = $key->namalaporan;
            $contents ['namafile'] = $key->namafile;
          }

          $header['title'] = 'Rawat Jalan';
          
          $this->load->view('headerolap', $header);
          $this->load->view('olap/dynamicsave', $contents);
          $this->load->view('footerolap');
      // }else{

      // }
    }

    public function already() {
        $this->session->keep_flashdata('table');
        if ($this->session->flashdata('table') != null) {
            $body['table'] = $this->session->flashdata('table');
            $this->load->view('olap/generate', $body);
            $this->getpdf();
        } else {
            show_error("No direct access allowed");
        }
    }

    public function getpdf() {
        ob_start();
        $content = $this->load->view('olap/generate', '');
        $content = ob_get_clean();

        $this->load->library('html2pdf');
        try {
            $html2pdf = new HTML2PDF('L', 'A1', 'en');
            $html2pdf->setDefaultFont('Arial');
            $html2pdf->writeHTML($content);
            //  $html2pdf->Output($_SERVER['DOCUMENT_ROOT'].'/pdfextractor/asset/pdf/tes9.pdf', 'F');
            $html2pdf->Output('tes.pdf', 'I');
        } catch (HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    }

    public function gettable() {
        if ($this->input->is_ajax_request()) {
            $target = $this->input->post('target');
            $this->session->set_flashdata('table', $target);

            echo '1';
        } else {
            show_error("No direct access allowed");
        }
    }

}
