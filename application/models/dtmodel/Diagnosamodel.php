<?php

class Diagnosamodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
//fungsi untuk ambil tabel admins
    public function getdiagnosa(){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM `pxrajal2014` WHERE id > 420000"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        
       
        return $query2;    
        }
        else{
        return true;
        }
        
    }

    public function getdokter($idpoli,$idjadwal){
        
        $query = $this->db->query("SELECT * FROM jadwal_praktek where poli_id = ".$idpoli." AND id =  '".$idjadwal."'");

        foreach ($query->result() as $key ) {
            $a = $key->dokter_id;
        } 


        return $a;
        
    }
    public function getidasuransi($id){
        $this->db->where('nama_asuransi', $id);
       $a = $this->db->get('asuransi_kesehatan');
       foreach ($a->result() as $key ) {
            $a = $key->idasuransi_kesehatan;
        } 


        return $a;
    }
    public function getidpenyakit($id){
        $this->db->where('kode_penyakit', $id);
       $a = $this->db->get('penyakit');
       foreach ($a->result() as $key ) {
            $a = $key->id;
        } 


        return $a;
    }
   
   public function insertdiagnosa($data){
        $this->db->insert('diagnosa', $data);
   }
    public function insertpenyakitdiderita($data){
        $this->db->insert('penyakit_yang_diderita', $data);
    }
}