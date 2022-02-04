<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian_model extends CI_Model
{
    private $table = 'tbl_pasien';

    public function getAntrian()
    {
        $sql =  $this->db->get($this->table);
        if ($sql->num_rows() > 0) {
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

    public function getById($id)
    {
        $sql = "SELECT nik, nama_pasien, alamat, no_antrian, tgl_datang, nama_faskes FROM tbl_pasien INNER JOIN tbl_faskes ON tbl_pasien.id_faskes = tbl_faskes.id_faskes WHERE tbl_pasien.id = $id";
        return $this->db->query($sql)->result();
        // return $this->db->get_where($this->table, ["id" => $id])->result();
    }

    // public function save($data)
    // {
    //     $this->db->trans_start();
    //     $this->db->insert($this->table, $data);

    //     $this->db->trans_complete();
    //     $this->db->trans_status();
    // }
}
