<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etlprocessing extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
		    ini_set('memory_limit','2048M');
         $this->load->library('session');
        if((!$this->session->userdata('finadmin') == 'yesiam')){
            redirect(base_url().'login');
        }
        if(($this->session->userdata('coderole')!=1)&&($this->session->userdata('coderole')!=2)){

            redirect(base_url().'home');
          }
          $this->load->model('etlmodel');
    }



    public function index(){
        $a = $this->etlmodel->gethistorydesc();
        $content ['content'] = $a;
        $header['title'] = 'ETL';
        $this->load->view('header',$header);
        $this->load->view('etlprocessing/index',$content);
        $this->load->view('footer');
      

    }

    public function dotransfer(){
        // validasi form

            $this->load->library('form_validation');
            $this->form_validation->set_rules('startdate', 'startdate', 'required');
            $this->form_validation->set_rules('enddate', 'enddate', 'required');
            $this->form_validation->set_rules('datasource', 'datasource', 'required');
            $this->form_validation->set_rules('fromsource', 'fromsource', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                
                $a = $this->etlmodel->gethistorydesc();
                $content = array('content' => $a,
                                'index' => 'gagal',
                                'startdatealert' =>form_error('startdate'),
                                'enddatealert' =>form_error('enddate'),
                                'datasourcealert' =>form_error('datasource'),
                                'fromsourcealert' =>form_error('fromsource')   );
                $header['title'] = 'ETL';
                $this->load->view('header',$header);
                $this->load->view('etlprocessing/index',$content);
                $this->load->view('footer');
            }
            else
            {   
                $start = $this->input->post('startdate');
                $end = $this->input->post('enddate');
                $source = $this->input->post('datasource');
                $using = $this->input->post('fromsource');
                $name = $this->session->userdata('username');

                if(($source!=1)||($using!=1)){
                    $a = $this->etlmodel->gethistorydesc();
                    $content = array('content' => $a,
                                'index' => 'gagal',
                                'startdatealert' =>'',
                                'enddatealert' =>'',
                                'datasourcealert' =>'Format belum tersedia',
                                'fromsourcealert' =>'Format belum tersedia'   );
                    $header['title'] = 'Home';
                    $this->load->view('header',$header);
                    $this->load->view('etlprocessing/index',$content);
                    $this->load->view('footer');
                    //akhir validasi
                }else{
                    $i=0;
                    //proses etl
                    $alldata = $this->etlmodel->getalldata($start , $end);
                    foreach ($alldata->result() as $key) {
                        //data dokter
                        $dokter = $this->etlmodel->getdwdokter($key->dokter_id);
                        if($dokter->num_rows() == 1){
                            $datadokter = array('namadokter' => $key->namadokter );
                            $iddokter = $key->dokter_id;
                            $this->etlmodel->updatedwdokter($iddokter,$datadokter);
                        }else {
                            $datadokter = array('idDimdokter' => $key->dokter_id,
                                                'namadokter' => $key->namadokter );
                            $this->etlmodel->insertdwdokter($datadokter);

                        }
                        //data asuransi
                        $asuransi = $this->etlmodel->getdwasuransi($key->idasuransi_kesehatan);
                        if($asuransi->num_rows() == 1){
                            $dataasuransi = array('namaAsuransi' => $key->nama_asuransi );
                            $idDimAsuransi = $key->idasuransi_kesehatan;
                            $this->etlmodel->updatedwasuransi($idDimAsuransi,$dataasuransi);
                        }else {
                            $dataasuransi = array('idDimAsuransi' => $key->idasuransi_kesehatan,
                                                'namaAsuransi' => $key->nama_asuransi );
                            $this->etlmodel->insertdwasuransi($dataasuransi);

                        }
                        //data pasien
                        $pasien = $this->etlmodel->getdwpasien($key->pasien_id);
                        if($pasien->num_rows() == 1){
                            $datapasien = array('namaPasien' => $key->nama_pasien,
                                                'kotatinggal' => $key->nama_kota,
                                                'provinsitinggal' => $key->nama_province,
                                                'umur' => $key->tahun_umur,
                                                'jenisKelamin' => $key->jenis_kelamin);
                            $idDimPasien = $key->pasien_id;
                            $this->etlmodel->updatedwpasien($idDimPasien,$datapasien);
                        }else {
                            $datapasien = array('idDimPasien' => $key->pasien_id,
                                                'namaPasien' => $key->nama_pasien,
                                                'kotatinggal' => $key->nama_kota,
                                                'provinsitinggal' => $key->nama_province,
                                                'umur' => $key->tahun_umur,
                                                'jenisKelamin' => $key->jenis_kelamin);
                            $this->etlmodel->insertdwdwpasien($datapasien);

                        }
                        //data penyakit
                        $penyakit = $this->etlmodel->getdwpenyakit($key->penyakit_id);
                        if($penyakit->num_rows() == 1){
                            
                            if($key->penyakit_id == 1){
                                $datapenyakit = array('kodepenyakit' => 'tidak diisi',
                                                'namaPenyakit' => 'tidak diisi');
                            }else{
                                $datapenyakit = array('kodepenyakit' => $key->kode_penyakit,
                                                'namaPenyakit' => $key->nama_penyakit);
                            }

                            $idDimPenyakit = $key->penyakit_id;
                            $this->etlmodel->updatedwpenyakit($idDimPenyakit,$datapenyakit);
                        }else {
                            if($key->penyakit_id == 1){
                                $datapenyakit = array('idDimPenyakit' => $key->penyakit_id,
                                                'kodepenyakit' => 'tidak diisi',
                                                'namaPenyakit' => 'tidak diisi');
                            }else{
                                $datapenyakit = array('idDimPenyakit' => $key->penyakit_id,
                                                'kodepenyakit' => $key->kode_penyakit,
                                                'namaPenyakit' => $key->nama_penyakit);
                            }
                            $this->etlmodel->insertdwdwpenyakit($datapenyakit);

                        }
                        //data poli
                        $poli = $this->etlmodel->getdwpoli($key->id);
                        if($poli->num_rows() == 1){
                            $datapoli = array('namaPoli' => $key->nama_poli,
                                                'statusPoli' => $key->ruangan);
                            $idDimpoli = $key->id;
                            $this->etlmodel->updatedwpoli($idDimpoli,$datapoli);
                        }else {
                            $datapoli = array('idDimpoli' => $key->id,
                                                'namaPoli' => $key->nama_poli,
                                                'statusPoli' => $key->ruangan);
                            $this->etlmodel->insertdwpoli($datapoli);

                        }
                        //data rujukan
                        $rujukan = $this->etlmodel->getdwrujukan($key->idrujukan_medis);
                        if($rujukan->num_rows() == 1){
                            $datarujukan = array('jenisRujukan' => $key->asal_rujukan );
                            $idDimRujukan = $key->idrujukan_medis;
                            $this->etlmodel->updatedwrujukan($idDimRujukan,$datarujukan);
                        }else {
                            $datarujukan = array('idDimRujukan' => $key->idrujukan_medis,
                                                'jenisRujukan' => $key->asal_rujukan );
                            $this->etlmodel->insertdwrujukan($datarujukan);

                        }
                        //data waktu
                        $str = $key->tanggal;
                        $tanggal = explode("-",$str);
                        $timestamp = strtotime($str);
                        $day = date('D', $timestamp);
                        $iddwwaktu = str_replace("-","",$str);
                        $waktu = $this->etlmodel->getdwwaktu($iddwwaktu);
                        if($waktu->num_rows() == 1){
                            
                        }else {
                            $datawaktu = array('idDimWaktu' => $iddwwaktu,
                                                'tanggal' => $tanggal[2],
                                                'bulan' => $tanggal[1],
                                                'tahun' => $tanggal[0],
                                                'hari' => $day);
                            $this->etlmodel->insertdwwaktu($datawaktu);

                        }
                        //Data Fakta
                        $datafakta  = array('iddiagnosa' => $key->iddiagnosa,
                                            'Totalcost' => $key->cost,
                                            'DimWaktu_idDimWaktu' => $iddwwaktu,
                                            'DimPenyakit_idDimPenyakit' => $key->penyakit_id,
                                            'DimRujukan_idDimRujukan' => $key->idrujukan_medis,
                                            'DimPasien_idDimPasien' => $key->pasien_id,
                                            'DimAsuransi_idDimAsuransi' => $key->idasuransi_kesehatan,
                                            'DimPoli_idDimpoli' => $key->id,
                                            'Dimdokter_idDimdokter' => $key->dokter_id);
                        $this->etlmodel->insertdwfact($datafakta);
                        $i++;
                    }
                    //proses insert history
                    $datahistory = array('installationname' => 'instalasi rawat jalan',
                                            'etlstart' => $start,
                                            'etllast' => $end,
                                            'totalrowinserted' => $i,
                                            'adminname' => $name );
                    $this->etlmodel->inserthistory($datahistory);
                    // echo json_encode(array('st' => 1, 'msg' => array('status' => 'Sukses Besar')));
                    // echo "bar kantal";
                    $a = $this->etlmodel->gethistorydesc();
                    
                    $content = array('content' => $a,
                                      'index' => 'sukses'   );
                    $header['title'] = 'Home';
                    $this->load->view('header',$header);
                    $this->load->view('etlprocessing/index',$content);
                    $this->load->view('footer');
                }
            }
        // }else{
        //     show_error('This page content is forbidden');
        // }
    }

   
    
}