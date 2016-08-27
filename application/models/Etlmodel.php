<?php

class Etlmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getdokter(){
    	return $this->db->get('dokter');
    }

    public function getpoli(){
    	return $this->db->get('poli');
    }

    public function getasuransi(){
    	return $this->db->get('asuransi_kesehatan');
    }

    public function getrujukan(){
    	return $this->db->get('rujukan_medis');
    }

    public function getpenyakit(){
    	return $this->db->get('penyakit');
    }

    public function getpasien(){
    	return $this->db->get('pasien');
    }

    public function getdiagnosa(){
 
    }

    public function getalldata($startdate , $lastdate){
        $query = $this->db->query("select d.iddiagnosa, d.dokter_id, do.namadokter, d.pasien_id, p.nama_pasien, p.tahun_umur, p.jenis_kelamin, c.nama_kota, pr.nama_province, d.jadwal_praktek_id, po.id, po.nama_poli, po.jumlah_ruangan, jp.ruangan, jp.tanggal, d.cost,ak.idasuransi_kesehatan, ak.nama_asuransi, rm.idrujukan_medis, rm.asal_rujukan, pyd.penyakit_id, pen.kode_penyakit, pen.nama_penyakit from diagnosa as d INNEr JOIN dokter as do ON d.dokter_id = do.id INNER JOIN pasien as p ON d.pasien_id = p.id INNER join cities as c ON c.idcities = p.cities_idcities INNER JOIN provinces as pr on pr.idprovinces = p.cities_provinces_idprovinces  INNER JOIN jadwal_praktek as jp ON d.jadwal_praktek_id = jp.id INNER join poli as po ON d.jadwal_praktek_poli_id = po.id INNER JOIN asuransi_kesehatan as ak ON ak.idasuransi_kesehatan = d.asuransi_kesehatan_idasuransi_kesehatan INNER join rujukan_medis as rm on rm.idrujukan_medis = d.rujukan_medis_idrujukan_medis INNER JOIN penyakit_yang_diderita as pyd on pyd.diagnosa_iddiagnosa = d.iddiagnosa  INNER join penyakit as pen on pen.id = pyd.penyakit_id WHERE jp.tanggal BETWEEN '".$startdate."' AND '".$lastdate."' group by d.iddiagnosa");
        return $query;
    }

    public function insertpxrajal($data){
        return $this->db->insert('PXRAJAL2014', $data);
    }

    public function inserthistory($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('historyetl', $data);
    }

    public function gethistory(){
        $this->load->library('multipledb');
        $query2 = $this->multipledb->db->get('historyetl'); 
        return $query2;
    }

    public function gethistorydesc(){
        $this->load->library('multipledb');
        $query2 = $this->multipledb->db->query(" SELECT etllast FROM `historyetl` ORDER BY `historyetl`.`id` DESC limit 1"); 
        return $query2;
    }
    
    public function getyear(){
        $this->load->library('multipledb');
        $query2 = $this->multipledb->db->query(" SELECT tahun FROM `dimwaktu` ORDER BY `dimwaktu`.`tahun` ASC limit 1"); 
        return $query2;
    }


// DW DOKTER
    public function getdwdokter($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimdokter', $id);
        $query2 = $this->multipledb->db->get('dimdokter'); 
        return $query2;
    }
    public function insertdwdokter($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimdokter', $data);

    }

    public function updatedwdokter($id,$data){
    	$this->load->library('multipledb');
        $this->multipledb->db->where('idDimdokter', $id);
        return $this->multipledb->db->update('dimdokter', $data);
    }

// DW POLI
    public function getdwpoli($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimpoli', $id);
        $query2 = $this->multipledb->db->get('dimpoli'); 
        return $query2;
    }
    public function insertdwpoli($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimpoli', $data);
    }
    public function updatedwpoli($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimpoli', $id);
        return $this->multipledb->db->update('dimpoli', $data);
    }

//DW ASURANSI
    public function getdwasuransi($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimAsuransi', $id);
        $query2 = $this->multipledb->db->get('dimasuransi'); 
        return $query2;
    }
    public function insertdwasuransi($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimasuransi', $data);
    }
    public function updatedwasuransi($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimAsuransi', $id);
        return $this->multipledb->db->update('dimasuransi', $data);
    }




// DW RUJUKAN
    public function getdwrujukan($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimRujukan', $id);
        $query2 = $this->multipledb->db->get('dimrujukan'); 
        return $query2;
    }
    public function insertdwrujukan($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimrujukan', $data);
    }
    public function updatedwrujukan($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimRujukan', $id);
        return $this->multipledb->db->update('dimrujukan', $data);
    }


//DW PENYAKIT
    public function getdwpenyakit($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimPenyakit', $id);
        $query2 = $this->multipledb->db->get('dimpenyakit'); 
        return $query2;
    }
    public function insertdwdwpenyakit($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimpenyakit', $data);
    }
    public function updatedwpenyakit($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimPenyakit', $id);
        return $this->multipledb->db->update('dimpenyakit', $data);
    }

//DIM PASIEN
    public function getdwpasien($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimPasien', $id);
        $query2 = $this->multipledb->db->get('dimpasien'); 
        return $query2;
    }
    public function insertdwdwpasien($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimpasien', $data);
    }    
    public function updatedwpasien($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimPasien', $id);
        return $this->multipledb->db->update('dimpasien', $data);
    }
    //DIM Waktu
     public function getdwwaktu($id){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimWaktu', $id);
        $query2 = $this->multipledb->db->get('dimwaktu'); 
        return $query2;
    }
    public function insertdwwaktu($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('dimwaktu', $data);
    }    
    public function updatedwwaktu($id,$data){
        $this->load->library('multipledb');
        $this->multipledb->db->where('idDimWaktu', $id);
        return $this->multipledb->update('dimwaktu', $data);
    }
    //Fact Table
    
    public function insertdwfact($data){
        $this->load->library('multipledb');
        return $this->multipledb->db->insert('factkedatanganpas', $data);
    }    
   



}