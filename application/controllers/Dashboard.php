<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('antrian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('dashboard', $data);
    }

    public function cek()
    {
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|integer',
            array(
                'required' => "Kolom %s harus diisi.",
                'is_unique' => "%s ini sudah terdaftar.",
                'integer' => "%s harus berupa angka."
            )
        );

        // Cek validasi
        if ($this->form_validation->run() == true) {
            $data['nik'] = $this->input->post('nik');
            $data['result'] = $this->antrian_model->getByNIK($data['nik']);

            // var_dump($data['nik'], $data['result']);
            // die;
            $data['title'] = 'Cek Antrian';
            $this->load->view('cek', $data);
        } else {
            // load view dashboard
            $data['title'] = 'Dashboard';
            $this->load->view('dashboard', $data);
        }
    }
}
