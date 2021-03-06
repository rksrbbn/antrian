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
        // unset($_SESSION['pesan']);
        // unset($_SESSION['error']);
        $data['title'] = 'Form Antrian';

        // Get Nomor Antrian
        $data['antrian'] = $this->antrian_model->getAntrian() + 1;
        $data['faskes'] = $this->antrian_model->getFaskes();

        // Get Timestamp
        $data['ts'] = $this->antrian_model->timer()->ts;
        $var = strtotime($data['ts']);

        // Get Waktu/Tanggal Hari ini
        $date_now = date('Y-m-d');
        $date = strtotime($date_now);

        // Cek jika hari sudah berganti
        if ($var < $date) {
            // echo ('Terhapus');
            $this->antrian_model->deleteTimestamp();
            $this->antrian_model->makeTimestamp();
        } else {
            // echo ('BELUM SAATNYA');
        }
        $this->load->view('form2', $data);
    }

    // public function cek()
    // {
    //     $this->form_validation->set_rules(
    //         'nik',
    //         'NIK',
    //         'required|integer',
    //         array(
    //             'required' => "Kolom %s harus diisi.",
    //             'is_unique' => "%s ini sudah terdaftar.",
    //             'integer' => "%s harus berupa angka."
    //         )
    //     );

    //     // Cek validasi
    //     if ($this->form_validation->run() == true) {
    //         $data['nik'] = $this->input->post('nik');
    //         $data['result'] = $this->antrian_model->getByNIK($data['nik']);

    //         // var_dump($data['nik'], $data['result']);
    //         // die;
    //         $data['title'] = 'Cek Antrian';
    //         $this->load->view('cek', $data);
    //     } else {
    //         // load view dashboard
    //         redirect('dashboard');
    //     }
    // }

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
        $this->form_validation->set_rules('antrian', 'antrian', 'required');

        $antrian = $this->antrian_model->getAntrian();
        if ($this->form_validation->run() == true) {

            // Cek antrian sudah penuh atau belum
            if ($antrian < 10) {
                $data['nik'] = $this->input->post('nik');
                $data['nama_pasien'] = $this->input->post('Nama');
                $data['alamat'] = $this->input->post('Alamat');
                $data['tgl_datang'] = date('Y-m-d');
                $data['no_antrian'] = $this->input->post('antrian');
                $data['id_faskes'] = $this->input->post('faskes');

                // $this->antrian_model->save($data);

                // Save data ke database
                $this->db->insert('tbl_pasien', $data);
                $this->session->set_flashdata('pesan', 'Data berhasil di simpan');

                $last_id = $this->db->insert_id();

                $data['info'] = $this->antrian_model->getById($last_id);
                $data['title'] = 'Antrian';
                $this->load->view('success', $data);
            } else {
                $this->session->set_flashdata('error', 'Antrian sudah penuh!');
                $data['title'] = 'Antrian';
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
