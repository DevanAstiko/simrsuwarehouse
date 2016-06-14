<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dateecho extends CI_Controller {



    public function __construct(){
        parent::__construct();
        
    }



    public function index(){
        $get = $this->createDateRangeArray('2013-01-01', '2015-12-31');
        $a = 0;
        $tempiddokter = '';
        for ($i=0; $i <count($get) ; $i++) { 
           // echo $get[$i].' , ';
           
           // if(){

           // }else if(){

           // }else{

           // }
        }
        $datestrinf = '29/01/2015 8:30:24';
        $datetime = explode(' ', $datestrinf);
        $date = explode('/', $datetime[0]);
        $realdate = $date[2].'-'.$date[1].'-'.$date[0];
        
        $time = explode(':', $datetime[1]);
        if($time[0]/10 >= 1){
            $realtime = $time[0].':'.$time[1].':'.$time[2];    
        }
        else{
            $realtime = '0'.$time[0].':'.$time[1].':'.$time[2];   
        }
        

        $datetime = $realdate.' '.$realtime;
        echo $datetime;

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
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return date('YmdHis') . $randomString;
    }
}