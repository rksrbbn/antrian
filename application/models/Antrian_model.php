<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian_model extends CI_Model
{
 private $table = 'tbl_pasien';

 public function getAntrian()
 {
     $sql =  $this->db->get($this->table);
     if($sql->num_rows() > 0) {
        return $sql->num_rows();
    } else {
         return 0;
    } 
 }

 public function getFaskes()
 {
     $sql = 'SELECT * FROM tbl_faskes';
     return $this->db->query($sql)->result();
 }

 public function save($data)
 {
    return $this->db->insert($this->table, $data);
 }

//  public function limit()
//  {
//     $sql =  $this->db->get($this->table);
//     if($sql->num_rows() > 0) {
//        return $sql->num_rows();
//    } else {
//         return 0;
//    } 
//  }
}