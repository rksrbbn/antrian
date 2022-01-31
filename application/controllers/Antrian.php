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
        $this->load->view('form', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('antrian', 'antrian', 'required');
        // var_dump($this->antrian_model->getAntrian());
        // die;
        $antrian = $this->antrian_model->getAntrian();
        if ($this->form_validation->run() == true) {
            if ($antrian < 15) {
                $data['nik'] = $this->input->post('nik');
                $data['nama_pasien'] = $this->input->post('Nama');
                $data['alamat'] = $this->input->post('Alamat');
                $data['tgl_datang'] = $this->input->post('Tanggal');
                $data['no_antrian'] = $this->input->post('antrian');
                $data['id_faskes'] = $this->input->post('faskes');

                $this->antrian_model->save($data);
                $this->session->set_flashdata('pesan', 'Data berhasil di simpan');
                $data['title'] = 'output';
                $this->load->view('output', $data);
            } else {
                $this->session->set_flashdata('error', 'Antrian sudah penuh!');
                $data['title'] = 'output';
                $this->load->view('output', $data);
            }
        } else {
            $data['title'] = 'form';
            $data['antrian'] = $this->antrian_model->getAntrian() + 1;
            $data['faskes'] = $this->antrian_model->getFaskes();
            $this->session->set_flashdata('error', 'Mohon isi data yang diperlukan.');
            $this->load->view('form', $data);
        }
    }
}