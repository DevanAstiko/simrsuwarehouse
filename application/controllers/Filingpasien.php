<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingpasien extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');
        
     }



    public function index()
    {
       
      
          

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