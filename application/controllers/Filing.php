<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filing extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');


    }



    public function index()
    {
       
        // $this->load->model('pxrajal');
        // $get = $this->pxrajal->getpxrajal();
        // foreach ($get->result() as $key) {
        //     $id = $key->id;
        //     $idpasien = 'PAS'.$id;
        //     $datestrinf = $key->TGLDAFTAR;
            
        //     $datetime = explode(' ', $datestrinf);
        //     $date = explode('/', $datetime[0]);
        //     $realdate = $date[2].'-'.$date[1].'-'.$date[0];
        //     $time = explode(':', $datetime[1]);
            
        //     if($time[0]/10 >= 1){
        //        $realtime = $time[0].':'.$time[1].':'.$time[2];    
        //     }
        //     else{
        //        $realtime = '0'.$time[0].':'.$time[1].':'.$time[2];   
        //     }
            
        //     $datetime = $realdate.' '.$realtime;


        //     $poli = $key->NAMARUANGAN;
        //     $realpoli = explode(' -', $poli);
            
        //     if($realpoli[0] == 'Klinik Tumbuh Kembang'){
        //         $idpoli = 1;
        //     }else if($realpoli[0] == 'Poli  Syaraf'){
        //         $idpoli = 2;
        //     }else if($realpoli[0] == 'Poli Anak'){
        //         $idpoli = 3;
        //     }else if($realpoli[0] == 'Poli Bayi'){
        //         $idpoli = 4;
        //     }else if($realpoli[0] == 'Poli Bedah'){
        //         $idpoli = 5;
        //     }else if($realpoli[0] == 'Poli Bedah Plastik'){
        //         $idpoli = 6;
        //     }else if($realpoli[0] == 'Poli Broschoscopy'){
        //         $idpoli = 8;
        //     }else if($realpoli[0] == 'Poli Dalam'){
        //         $idpoli = 9;
        //     }else if($realpoli[0] == 'Poli Bedah Syaraf'){
        //         $idpoli = 7;
        //     }else if($realpoli[0] == 'Poli Darul Hafidz'){
        //         $idpoli = 10;
        //     }else if($realpoli[0] == 'Poli Diabetes'){
        //         $idpoli = 11;
        //     }else if($realpoli[0] == 'Poli EEG'){
        //         $idpoli = 12;
        //     }else if($realpoli[0] == 'Poli Endoscopy'){
        //         $idpoli = 13;
        //     }else if($realpoli[0] == 'Poli Gigi && Mulut'){
        //         $idpoli = 14;
        //     }else if($realpoli[0] == 'Poli Gizi'){
        //         $idpoli = 15;
        //     }else if($realpoli[0] == 'Poli Hamil'){
        //         $idpoli = 16;
        //     }else if($realpoli[0] == 'Poli Hematologi'){
        //         $idpoli = 17;
        //     }else if($realpoli[0] == 'Poli Imunisasi'){
        //         $idpoli = 18;
        //     }else if($realpoli[0] == 'Poli Jantung'){
        //         $idpoli = 19;
        //     }else if($realpoli[0] == 'Poli Jiwa'){
        //         $idpoli = 20;
        //     }else if($realpoli[0] == 'Poli Kandungan'){
        //         $idpoli = 21;
        //     }else if($realpoli[0] == 'Poli Kosmetik'){
        //         $idpoli = 22;
        //     }else if($realpoli[0] == 'Poli Kulit && Kelamin'){
        //         $idpoli = 23;
        //     }else if($realpoli[0] == 'Poli Mata'){
        //         $idpoli = 24;
        //     }else if($realpoli[0] == 'Poli Medical Checkup'){
        //         $idpoli = 25;
        //     }else if($realpoli[0] == 'Poli Orthopedi'){
        //         $idpoli = 26;
        //     }else if($realpoli[0] == 'Poli Paliatif'){
        //         $idpoli = 27;
        //     }else if($realpoli[0] == 'Poli Paru'){
        //         $idpoli = 28;
        //     }else if($realpoli[0] == 'Poli Pegawai'){
        //         $idpoli = 29;
        //     }else if($realpoli[0] == 'Poli Psykology'){
        //         $idpoli = 30;
        //     }else if($realpoli[0] == 'Poli Rehabilitasi Medik'){
        //         $idpoli = 31;
        //     }else if($realpoli[0] == 'Poli Respirologi Anak'){
        //         $idpoli = 32;
        //     }else if($realpoli[0] == 'Poli THT'){
        //         $idpoli = 33;
        //     }else if($realpoli[0] == 'Poli Urologi'){
        //         $idpoli = 34;
        //     }else if($realpoli[0] == 'Ruangan Bedah Minor'){
        //         $idpoli = 35;
        //     }else{
        //         echo "eror = ".$key->id.",";
        //         $idpoli = 0;
        //     }

        //     $nama = $key->NAMALENGKAP; 
        //     $data2 = array('idpoli' => $idpoli,
        //         'dateregistrate' => $datetime);
        //     $this->pxrajal->updatepxrajalbyid($id,$data2);
            

        //     // if($key->idpasien == ''){
                
        //     //         $data = array('idpasien' => $idpasien);
        //     //         $this->pxrajal->updatepxrajal($nama,$data);
        //     //     }
            

                
            
                
                
          


        // }

         $this->load->model('pxrajal');
        $get = $this->pxrajal->getcount();
        $value=0;
        foreach ($get->result() as $key) {
            $value = $key->nomor;
        }
        for ($i=1; $i = $value ; $i++) {
            $as  = $this->pxrajal->getidpaslimit(); 
            $content = $this->pxrajal->getidpas($as);
            foreach ($content->result() as $key) {
                if($key->idpasien == ''){
                        $nama = $key->NAMALENGKAP;
                        $id = $key->id;
                        $idpasien = 'PAS'.$id;
                        $data = array('idpasien' => $idpasien);
                        $this->pxrajal->updatepxrajal($nama,$data);
                }
            }
            
        }



    }

     function generateRandomStrings($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}