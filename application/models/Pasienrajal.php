<?php

class Pasienrajal extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
//fungsi untuk ambil tabel admins
    
    public function getgroupidpasienpxrajal(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM `pxrajal2014` group by idpasien"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }
    public function kotalahir($id){
        
      
       $this->db->where('idcities', $id);
       $a = $this->db->get('cities');
       foreach ($a->result() as $key ) {
            $a = $key->nama_kota;
        } 


        return $a;

    }

   public function insertasiendw($data){
             $this->db->insert('pasien', $data);
        }
}