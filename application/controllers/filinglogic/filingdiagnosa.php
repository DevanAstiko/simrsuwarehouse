<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingdiagnosa extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '6000M');
        $this->load->model('diagnosamodel');
    }



    public function index()
    {
    	$datadiagnosa = $this->diagnosamodel->getdiagnosa();
        $i=420001;
        foreach ($datadiagnosa->result() as $key) {
    	$iddiagnosa ='diag'.$key->id;
    	$kode_medis_diagnosa = $key->NOCM;
    	$idpoli = $key->idpoli;
    	
    	$pasien = $key->idpasien;
    	$jdwlpraktek = $key->idjadwal;
    	$dokter =$this->diagnosamodel->getdokter($idpoli,$jdwlpraktek);
    	$idadmin = 'DW20160303145140' ; 
    	$idprev = 1 ; 
    	$diagnosadeskripsi = 'tidak ada';
    	$no_registrasi = $key->NOREGISTRASI;
    	$rujukanmedis = rand ( 1 , 5 );

    	if($key->KDICD == 'E11.9'){
    		$cost = rand ( 250 , 260 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'Btl'){
    		$cost = rand ( 680 , 720 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'I63.9'){
    		$cost = rand ( 300 , 320 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'I20.8'){
    		$cost = rand ( 320 , 350 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'M19.9'){
    		$cost = rand ( 680 , 720 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'G40.9'){
    		$cost = rand ( 300 , 350 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'A15.0'){
    		$cost = rand ( 370 , 390 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'I11.9'){
    		$cost = rand ( 580 , 620 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'K04.1'){
    		$cost = rand ( 680 , 720 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'M54.5'){
    		$cost = rand ( 680 , 720 );
    		$cost = $cost.'00';
    	}else if($key->KDICD == 'Z01.2'){
    		$cost = rand ( 380 , 400 );
    		$cost = $cost.'00';
    	}else {
    		$cost = rand ( 250 , 420 );
    		$cost = $cost.'00';
    	}

        $asuransi = $key->NAMAJENISPASIEN;
        $idasuransi = $this->diagnosamodel->getidasuransi($asuransi);


        
        // echo $iddiagnosa.','.$kode_medis_diagnosa.','.$dokter.','.$pasien.','.$jdwlpraktek.','.$idpoli.','.$dokter.','.$idadmin.','.$idprev.','.$diagnosadeskripsi.','.$catatan_tambahan.','.$rujukanmedis.','.$cost.','.$idasuransi;
         $data = array(
                'iddiagnosa'=> $iddiagnosa,
                'kode_medis_diagnosa' =>$kode_medis_diagnosa ,
                'dokter_id' => $dokter,
                'pasien_id' => $pasien,
                'jadwal_praktek_id'=>$jdwlpraktek ,
                'jadwal_praktek_poli_id' =>$idpoli ,
                'jadwal_praktek_dokter_id' =>$dokter ,
                'jadwal_praktek_admins_id' =>$idadmin ,
                'jadwal_praktek_admins_previllages_id'=>$idprev ,
                'diagnosa_diskripsi' =>$diagnosadeskripsi ,
                'no_registrasi' =>$no_registrasi ,
                'rujukan_medis_idrujukan_medis' =>$rujukanmedis ,
                'cost' =>$cost ,
                'asuransi_kesehatan_idasuransi_kesehatan' =>$idasuransi,
                'indeks'=>$i 
                
                
                    );
         $this->diagnosamodel->insertdiagnosa($data);

         $idpenyakit = $key->KDICD;
         $idrealpenyakit = $this->diagnosamodel->getidpenyakit($idpenyakit); 
          $datapenyakit = array(
                'diagnosa_iddiagnosa'=> $iddiagnosa,
                'diagnosa_dokter_id' =>$dokter,
                'diagnosa_pasien_id' => $pasien,
                'diagnosa_jadwal_praktek_id' => $jdwlpraktek,
                'diagnosa_jadwal_praktek_poli_id'=>$idpoli,
                'diagnosa_jadwal_praktek_dokter_id' =>$dokter,
                'diagnosa_jadwal_praktek_admins_id' =>$idadmin,
                'diagnosa_jadwal_praktek_admins_previllages_id' =>$idprev,
                'penyakit_id'=>$idrealpenyakit
                
                    );
          // echo "buat relasi ";
          // echo $idrealpenyakit;
          $this->diagnosamodel->insertpenyakitdiderita($datapenyakit);
          $i++;
        
    }
    }	
   // SELECT `diagnosa_iddiagnosa`, `diagnosa_dokter_id`, `diagnosa_pasien_id`, `diagnosa_jadwal_praktek_id`, `diagnosa_jadwal_praktek_poli_id`, `diagnosa_jadwal_praktek_dokter_id`, `diagnosa_jadwal_praktek_admins_id`, `diagnosa_jadwal_praktek_admins_previllages_id`, `penyakit_id` FROM `penyakit_yang_diderita`
    
    
	}		