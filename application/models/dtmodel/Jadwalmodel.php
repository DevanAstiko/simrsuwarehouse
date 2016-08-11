<?php

class Jadwalmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
//fungsi untuk ambil tabel admins
    public function renamepxrajal($id){
      
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("SELECT * FROM pxrajal2014 where dateregistrate like '".$id."%' group by NAMARUANGAN"); // running query using library.
        $this->multipledb->save();// calling library function.
        
        if ($query2!= null){
        return $query2;    
        }
        else{
        return true;
        }
        
    }

    public function randomdokter($id){
      
       // loading library.
        $query2 = $this->db->query("SELECT * FROM dokter WHERE id_polispesialis = ".$id." ORDER BY rand() LIMIT 1"); // running query using library.
        return $query2;
        
    }

    public function jadwalinsert($data){
        $this->db->insert('jadwal_praktek', $data);
    }

    public function updatepxrajal($jadwal,$ruangan,$tanggal){
        $this->load->library('multipledb'); // loading library.
        $query2 = $this->multipledb->db->query("UPDATE `pxrajal2014` SET `idjadwal`= '".$jadwal."' WHERE `NAMARUANGAN` like '".$ruangan."' and dateregistrate like '".$tanggal."%'"); // running query using library.
        $this->multipledb->save();// calling library function.
        
    }
}