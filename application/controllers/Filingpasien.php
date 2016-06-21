<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingpasien extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');
        // $this->load->model('pasienrajal');
        
     }



    public function index()
    {
        $pasien = $this->pasienrajal->getgroupidpasienpxrajal();
        
        foreach ($pasien->result() as $key) {
            $idpasien =  $key->idpasien;
            $nama_pasien = $key->namalengkap;
            $alamat = 'pxrajal'.$this->generateRandomStrings;
            $jenis_kelamin= $key->jenis_kelamin;
            $jenis_pasien = 'Rawat Jalan';
            //umur 
            $umur = $key->idpoli;
            $tanggalrandom = 
            if($umur = 1){//tumbuh kembang

            }else if($umur = 2){//syaraf

            else if($umur = 3){//anak

            }else if($umur = 4){//bayi
                 
            }else if($umur = 5){//bedah

            }else if($umur = 6){//bedah plastik

            }else if($umur = 7){//bedah syaraf

            }else if($umur = 8){//broschocopy

            }else if($umur = 9){//dalam

            }else if($umur = 10){// darul hafidz

            }else if($umur = 11){//diabetes

            }else if($umur = 12){//EEG

            }else if($umur = 13){// endoscopy

            }else if($umur = 14){//gigimulut

            }else if($umur = 15){///gizi

            }else if($umur = 16){//hamil

            }else if($umur = 17){//hematologi

            }else if($umur = 18){//imunisasi

            }else if($umur = 19){//jantung

            }else if($umur = 20){//jiwa

            }else if($umur = 21){//kandungan

            }else if($umur = 22){//kosmetik

            }else if($umur = 23){//kulit dan kelamin

            }else if($umur = 24){//mata

            }else if($umur = 25){//medical cekup

            }else if($umur = 26){//ortopedi

            }else if($umur = 27){//paliatif

            }else if($umur = 28){//paru

            }else if($umur = 29){//pegawai

            }else if ($umur = 30){//psykologi

            }else if ($umur = 31){//rehabilitasi medik

            }else if ($umur = 32){//respirologianak

            }else if ($umur = 33){//tht

            }else if ($umur = 34){//urologi

            }else if($umur = 35){//bedah minor

            }else {
                echo "id = ". $idpasien;
            }

            // tahunumur dan bulan umur, tanggal lahir,tempat llahir

        }
          // SELECT `id`, `nama_pasien`, `tahun_umur`, `bulan_umur`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `telepon`, `handphone`, `jenis_kelamin`, `created_at`, `deleted-at`, `jenis_pasien`, `cities_idcities`, `cities_provinces_idprovinces` FROM `pasien` WHERE 1

        $tanggalrandom = $this->rand_date('1993-09-10 09:38:58','1995-12-10 09:38:58');
        $tanggalselisih = '2015-12-31';
        $umur = $tanggalselisih-$tanggalrandom;
        echo'tanggal lahir = '.$tanggalrandom.', ini umur = '.$umur  ;
    }

    public function insertpasien(){
        
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

    function rand_date($min_date, $max_date) {
    /* Gets 2 dates as string, earlier and later date.
       Returns date in between them.
    */

    $min_epoch = strtotime($min_date);
    $max_epoch = strtotime($max_date);

    $rand_epoch = rand($min_epoch, $max_epoch);

    return date('Y-m-d H:i:s', $rand_epoch);
    }

}