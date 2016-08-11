<?php

class Reportmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getdwreport($start,$end){
        $this->load->library('multipledb');
        $query2 = $this->multipledb->db->query('select f.iddiagnosa, f.Totalcost , da.namaAsuransi, dp.namaPenyakit, dp.kodepenyakit, dd.namadokter, dpo.namaPoli, dpo.statusPoli, dr.jenisRujukan, dpas.namaPasien, dpas.kotatinggal, dpas.provinsitinggal, dpas.umur, dpas.jenisKelamin, dw.tanggal, dw.bulan, dw.tahun, dw.hari  from factkedatanganpas as f INNER join dimasuransi as da ON f.DimAsuransi_idDimAsuransi = da.idDimAsuransi INNER join dimpenyakit as dp ON dp.idDimPenyakit = f.DimPenyakit_idDimPenyakit INNER join dimdokter as dd on dd.idDimdokter = f.Dimdokter_idDimdokter INNER join dimpoli as dpo on dpo.idDimpoli = f.DimPoli_idDimpoli INNER join dimrujukan as dr on dr.idDimRujukan = f.DimRujukan_idDimRujukan INNER join dimpasien as dpas on dpas.idDimPasien = f.DimPasien_idDimPasien INNER join dimwaktu dw on dw.idDimWaktu = f.DimWaktu_idDimWaktu where dw.idDimWaktu BETWEEN '.$start.' and '.$end); 
        return $query2;
        // return $this->multipledb->
    }


    public function getalreadyreport(){
         $this->load->library('multipledb');
         $query2 = $this->multipledb->db->get('report');
         return $query2;
    }
    public function insertreport($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('report', $data);
    }

    public function getreportbyid($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('id', $id);
        return $this->multipledb->db->get('report');
    }
}