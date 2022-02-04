<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('antrian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        unset($_SESSION['pesan']);
        unset($_SESSION['error']);
        $data['title'] = 'form';
        $data['antrian'] = $this->antrian_model->getAntrian() + 1;
        $data['faskes'] = $this->antrian_model->getFaskes();
        $this->load->view('form2', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|is_unique[tbl_pasien.nik]|integer',
            array(
                'required' => "Kolom %s harus diisi.",
                'is_unique' => "%s ini sudah terdaftar.",
                'integer' => "%s harus berupa angka."
            )
        );
        $this->form_validation->set_rules(
            'Nama',
            'Nama',
            'required',
            array(
                'required' => "Kolom %s harus diisi."
            )
        );
        $this->form_validation->set_rules(
            'Alamat',
            'Alamat',
            'required',
            array(
                'required' => "Kolom %s harus diisi."
            )
        );
        $this->form_validation->set_rules(
            'Tanggal',
            'Tanggal',
            'required',
            array(
                'required' => "Kolom %s harus diisi."
            )
        );
        $this->form_validation->set_rules('antrian', 'antrian', 'required');

        $antrian = $this->antrian_model->getAntrian();
        if ($this->form_validation->run() == true) {
            if ($antrian < 10) {
                $data['nik'] = $this->input->post('nik');
                $data['nama_pasien'] = $this->input->post('Nama');
                $data['alamat'] = $this->input->post('Alamat');
                $data['tgl_datang'] = $this->input->post('Tanggal');
                $data['no_antrian'] = $this->input->post('antrian');
                $data['id_faskes'] = $this->input->post('faskes');

                // $this->antrian_model->save($data);
                $this->db->insert('tbl_pasien', $data);
                $this->session->set_flashdata('pesan', 'Data berhasil di simpan');

                $last_id = $this->db->insert_id();

                $data['info'] = $this->antrian_model->getById($last_id);
                $data['title'] = 'output';
                $this->load->view('success', $data);
            } else {
                $this->session->set_flashdata('error', 'Antrian sudah penuh!');
                $data['title'] = 'output';
                $this->load->view('failed', $data);
            }
        } else {
            $data['title'] = 'form';
            $data['antrian'] = $this->antrian_model->getAntrian() + 1;
            $data['faskes'] = $this->antrian_model->getFaskes();

            $this->load->view('form2', $data);
        }
    }
}
