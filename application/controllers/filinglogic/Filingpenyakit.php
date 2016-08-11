<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingpenyakit extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
		ini_set('memory_limit','2048M');
    }



    public function index()
    {
       
        $this->load->model('penyakit');

        $a = 1;
        $get = $this->penyakit->realpenyakit();
         
        foreach ($get->result() as $key) {
            
          
            


           $data = array(
                'id'=> $a,
                'kode_penyakit' => $key->kodepenyakit,
                'nama_penyakit' => $key->namapenyakit,
                'deskripsipenyakit' => $key->deskripsipenyakit,
                
                    );

           $a++;
            $this->penyakit->insertpenyakitdw($data);
            

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