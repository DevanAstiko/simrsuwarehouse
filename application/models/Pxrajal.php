<?php

class Pxrajal extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
//fungsi untuk ambil tabel admins
    public function getpxrajal(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM `pxrajal2014` WHERE idpoli = 0 and namaruangan like '%Poli Broschoscopy%'"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }

    public function getidpas($id){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM pxrajal2014 where id = ".$id); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }
    public function getidpaslimit(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT id FROM pxrajal2014 where `idpasien` = '' limit 1"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        
            foreach ($query2->result() as $value) {
               $var =  $value->id ;
            }

        return $var;    
        }
        else{
        return true;
        }
        
    }
    //--------------------------------------------------------------------------------------------------------------------------//
    public function getcountpxumur($id){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT count(idpasien) as nomor from pxrajal2014 WHERE idpoli = ".$id." and umur is null"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        foreach ($query2->result() as $key) {
            $count = $key->nomor;
        }
        return $count;
    }


    public function getpxbypoli($id){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM `pxrajal2014` WHERE idpoli = ".$id." and umur is null "); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }



    public function getpasbyid($id){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM pxrajal2014 where `idpasien` = '".$id."' "); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        
            foreach ($query2->result() as $value) {
               $var =  $value->id ;
            }

        return $var;    
        }
        else{
        return true;
        }
        
    }

     public function updatepxumur($id,$umur){
       $this->load->library('multipledb'); // loading library.
       $query2 = $this->multipledb->db->query("UPDATE `pxrajal2014` SET `umur`= ".$umur." WHERE idpasien = '".$id."'"); 
       
      

    }
    //----------------------------------------------------------------------------------//
    // public function updatepxrajal($id,$data){
    //     $this->load->library('multipledb'); // loading library.
    //     $this->multipledb->db->where('NAMALENGKAP', $id);
    //     return $this->multipledb->db->update('pxrajal2014', $data);  
      

    // }
    public function updatepxrajalbyid($id,$data){
        $this->load->library('multipledb'); // loading library.
        $this->multipledb->db->where('id', $id);
        return $this->multipledb->db->update('pxrajal2014', $data);  
      

    }

    public function getcount(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT count(id) as nomor from pxrajal2014 where `idpasien` = ''"); // running query using library.
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
    public function provlahir($id){
        
      
       $this->db->where('idcities', $id);
       $a = $this->db->get('cities');
       foreach ($a->result() as $key ) {
            $a = $key->provinces_idprovinces;
        } 


        return $a;

    }
    public function insertpasien($data){
         $this->db->insert('pasien', $data);
    }
    public function insertpasiensementara($data){
        $this->db->insert('pasiensementara',$data);
    }
    public function gettablepasien (){
        $query = $this->db->query('SELECT * FROM pasien GROUP BY nama_pasien');
        return $query;
    }

    public function getpxumur(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM `pxrajal2014` WHERE umur is null limit 1 "); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }
    public function countpxbyumur(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT  count(*) as jumlah FROM `pxrajal2014` WHERE umur is null "); // running query using library.
        $this->multipledb->save();// calling library function.
        
        foreach ($query2->result() as $key) {
            $var = $key->jumlah;
        }

        return $var;
    }



}