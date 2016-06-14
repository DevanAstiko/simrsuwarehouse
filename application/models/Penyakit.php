<?php

class Penyakit extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
//fungsi untuk ambil tabel admins
    public function realpenyakit(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM penyakit"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        
       
        return $query2;    
        }
        else{
        return true;
        }
        
    }
    public function penyakit($data){
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("INSERT INTO `penyakit`(`id`, `kodepenyakit`, `namapenyakit`, `deskripsipenyakit`) VALUES ('".$data['id']."','".$data['kodepenyakit']."','".$data['namapenyakit']."','".$data['deskripsipenyakit']."')"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        
        }


        public function insertpenyakitdw($data){
             $this->db->insert('penyakit', $data);
        }
    
}