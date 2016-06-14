<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filingjadwal extends CI_Controller {



    public function __construct(){
        parent::__construct();
        ini_set('max_execution_time', 0); 
        ini_set('memory_limit', '2000M');
        $this->load->model('jadwalmodel');
    }



    public function index()
    {
    	//12 LAST DATE
    	$get  = $this->createDateRangeArray('2015-01-07','2015-12-31');
    	$idjadwal = 18253;
    	for($i=0 ; $i<count($get); $i++) {
    		$variable = $this->jadwalmodel->renamepxrajal($get[$i]);
    		foreach ($variable->result() as $key) {
    			$idjadwal++;
	    		$datetime = explode(' ', $key->dateregistrate);
	        	$date = $datetime[0];
	            
		        $dokter = $this->jadwalmodel->randomdokter($key->idpoli);
	        		foreach ($dokter->result() as $keys) {
	        			
	        			 $data = array('id' => 'JDWL'.$idjadwal,
	        			 				'ruangan' =>  $key->NAMARUANGAN,
	        			 				'tanggal' =>  $date,
	        			 				'poli_id' => $key->idpoli,
	        			 				'dokter_id'=> $keys->id,
	        			 				'admins_id' => 'DW20160303145140',
	        			 				'admins_previllages_id' => 1

	        			  );
	    				$this->jadwalmodel->jadwalinsert($data);
	    				$this->jadwalmodel->updatepxrajal('JDWL'.$idjadwal,$key->NAMARUANGAN,$date);       
	        		}
	        	
	        	}
       
    
    	}
    	
        
    }	
    

    
    function createDateRangeArray($strDateFrom,$strDateTo)
	{
	   

	    $aryRange=array();

	    $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
	    $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

	    if ($iDateTo>=$iDateFrom)
	    {
	        array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
	        while ($iDateFrom<$iDateTo)
	        {
	            $iDateFrom+=86400; // add 24 hours
	            array_push($aryRange,date('Y-m-d',$iDateFrom));
	        }
	    }
	    return $aryRange;
		}
	}		