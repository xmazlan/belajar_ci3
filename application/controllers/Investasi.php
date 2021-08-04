<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Investasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!has_login()) kick_it_out('Halaman yang Anda tuju hanya tersedia untuk pengguna yang sudah login');
        else $this->user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('investasi_model');
    }

    public function pmdn()
    {
        $data['title'] = 'PMDN';
        $data['page'] = 'pages/pmdn';
        $data['user'] = $this->user;

        $this->load->view('layouts/app', $data);
    }

    public function pmdn_create()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'required');
        $this->form_validation->set_rules('no_dan_tgl', 'nomor dan tanggal', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            //tampil form
            $data['title'] = 'Input PMDN';
            $data['page'] = 'pages/pmdn_create';
            $data['user'] = $this->user;

            $this->load->view('layouts/app', $data);
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'no_dan_tgl' => $this->input->post('no_dan_tgl'),
                'bidang_usaha' => $this->input->post('bidang_usaha'),
                'alamat_kantor' => $this->input->post('alamat_kantor'),
                'kode_lokasi' => $this->input->post('kode_lokasi'),
                'kode_negara' => $this->input->post('kode_negara'),
                'investasi_tambahan' => $this->input->post('investasi_tambahan'),
                'investasi_total' => $this->input->post('investasi_total'),
                'tki' => $this->input->post('tki'),
                'tka' => $this->input->post('tka'),
                'mata_uang' => $this->input->post('mata_uang')

            );

            $this->investasi_model->tambah($data);
        }
    }
}
