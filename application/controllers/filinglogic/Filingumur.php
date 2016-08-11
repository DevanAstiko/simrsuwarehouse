<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingumur extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');


    }
     




    public function index()
    {
       
  //---------------------------------umur--------------------------------------------------------------------------------
      $this->load->model('pxrajal');
        $pointer = 0;
        $number = $this->pxrajal->countpxbyumur();
        for ($i=0; $i < $number ; $i++) { 
           
            $get = $this->pxrajal->getpxumur();
            foreach ($get->result() as $key) {
                
                $poli= $key->idpoli;
                if ($poli == 1){//tumbuh kembang
                    // $umur = rand(1,21)
                    $idpasien = $key->idpasien;
                    $umur = rand(1,21);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 2){//syaraf
                    $idpasien = $key->idpasien;
                    $umur = rand(36,68);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 3){//anak
                   
                }else if($poli == 4){//bayi
                    
                }else if($poli == 5){//bedah
                    $idpasien = $key->idpasien;
                    $umur = rand(25,65);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 6){//bedah plastik
                    $idpasien = $key->idpasien;
                    $umur = rand(32,50);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 7){//bedah syaraf
                    $idpasien = $key->idpasien;
                    $umur = rand(40,72);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 8){//broschocopy
                    $idpasien = $key->idpasien;
                    $umur = rand(38,63);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 9){//dalam
                    $idpasien = $key->idpasien;
                    $umur = rand(16,72);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 10){// darul hafidz
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 11){//diabetes
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 12){//EEG
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 13){// endoscopy
                    $idpasien = $key->idpasien;
                    $umur = rand(32,56);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 14){//gigimulut
                    $idpasien = $key->idpasien;
                    $umur = rand(12,62);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 15){///gizi
                    $idpasien = $key->idpasien;
                    $umur = rand(18,38);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 16){//hamil
                    $idpasien = $key->idpasien;
                    $umur = rand(23,42);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 17){//hematologi
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);

                }else if($poli == 18){//imunisasi
                    $idpasien = $key->idpasien;
                    $umur = rand(22,56);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 19){//jantung
                    $idpasien = $key->idpasien;
                    $umur = rand(34,72);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 20){//jiwa
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 21){//kandungan
                    $idpasien = $key->idpasien;
                    $umur = rand(22,44);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 22){//kosmetik
                    $idpasien = $key->idpasien;
                    $umur = rand(19,37);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 23){//kulit dan kelamin
                    $idpasien = $key->idpasien;
                    $umur = rand(22,62);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 24){//mata
                    $idpasien = $key->idpasien;
                    $umur = rand(14,61);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 25){//medical cekup
                    $idpasien = $key->idpasien;
                    $umur = rand(28,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 26){//ortopedi
                    $idpasien = $key->idpasien;
                    $umur = rand(18,65);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 27){//paliatif
                    $idpasien = $key->idpasien;
                    $umur = rand(31,58);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 28){//paru
                    $idpasien = $key->idpasien;
                    $umur = rand(37,58);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 29){//pegawai
                    $idpasien = $key->idpasien;
                    $umur = rand(20,49);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if ($poli == 30){//psykologi
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if ($poli == 31){//rehabilitasi medik
                    $idpasien = $key->idpasien;
                    $umur = rand(32,48);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if ($poli == 32){//respirologianak

                }else if ($poli == 33){//tht
                    $idpasien = $key->idpasien;
                    $umur = rand(33,68);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if ($poli == 34){//urologi
                    $idpasien = $key->idpasien;
                    $umur = rand(18,44);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else if($poli == 35){//bedah minor
                    $idpasien = $key->idpasien;
                    $umur = rand(21,68);
                    $this->pxrajal->updatepxumur($idpasien,$umur);
                }else {
                    echo "id = ". $idpasien;
                }

            }
        }
//---------------------------------umur--------------------------------------------------------------------------------
       
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


