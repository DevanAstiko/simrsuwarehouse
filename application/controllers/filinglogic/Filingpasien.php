<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingpasien extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');
        $this->load->model('pasienrajal');
        
     }



    public function index()
    {
        $pasien = $this->pasienrajal->getgroupidpasienpxrajal();
        
        foreach ($pasien->result() as $key) {
            $idpasien =  $key->idpasien;
            $nama_pasien = $key->NAMALENGKAP;
            $tahun_umur = $key->umur;

            $tahunlahir = 2015 - $key->umur; 
            $gettgllahir = $this->rand_date($tahunlahir.'-01-01',$tahunlahir.'-12-31');
            $gettgllahirs = explode(' ', $gettgllahir);
            $gettgllahir =$gettgllahirs[0];
            // echo $gettgllahirs[0];
            $tempmonth = explode('-', $gettgllahirs[0]);
            $bulan_umur = 12-$tempmonth[1];
            // echo ' cok '.$bulan_umur;
            $kkelahiran = rand ( 200 , 269 );
            $tmptlhr = $this->pasienrajal->kotalahir($kkelahiran);

            $alamat = 'pxrajal'.$this->generateRandomStrings();
            $tlp = 'xxx xx'.$this->randomNumber(5);
            $hp = '081'.$this->randomNumber(9);
            $jenis_kelamin= $key->JENISKELAMIN;
            $jenis_pasien = 'Rawat Jalan';
            
            $city = rand ( 0 , 30 );
            $provinces = 16;
            if($city ==0){
                 $city = 264;
            }
            else if($city <=3){
                 $city = 234;
            }
            else if($city <=6){
                $city = 232;
            }
            else if($city <=15){
                $city = 255;
            }
            else if($city >=15){
                $city = 269;
            }
           // echo $idpasien.','.$nama_pasien.','.$tahun_umur.','.$tahunlahir.','.$gettgllahir.','.$bulan_umur.','.$alamat.','.$tlp.','.$hp.','.$jenis_kelamin.','.$jenis_pasien.','.$city.','.$provinces.','.date('Y-m-d H:i:s');
           $data = array(
                'id'=> $idpasien,
                'nama_pasien' => $nama_pasien,
                'tahun_umur' => $tahun_umur,
                'bulan_umur' => $bulan_umur,
                'tanggal_lahir'=> $gettgllahir,
                'tempat_lahir' => $tmptlhr,
                'alamat' => $alamat,
                'telepon' => $tlp,
                'handphone'=> $hp,
                'jenis_kelamin' => $jenis_kelamin,
                'created_at' => date('Y-m-d H:i:s'),
                'jenis_pasien' => $jenis_pasien,
                'cities_idcities' => $city,
                'cities_provinces_idprovinces' => $provinces
                
                
                    );
           $this->pasienrajal->insertasiendw($data);

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

     function createDateRangeArray($strDateFrom,$strDateTo) {
         $aryRange=array();

         $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
         $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

        if ($iDateTo>=$iDateFrom) {
            array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry

            while ($iDateFrom<$iDateTo) {
                $iDateFrom+=86400; // add 24 hours
                array_push($aryRange,date('Y-m-d',$iDateFrom));
                }
        }
        return $aryRange;
    }

    function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
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