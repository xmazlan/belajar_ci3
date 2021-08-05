<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!has_login()) kick_it_out('Halaman yang Anda tuju hanya tersedia untuk pengguna yang sudah login');
        else $this->user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('wilayah_model');
    }

    public function index()
    {
        $data['title']  = 'Wilayah';
        $data['page']   = 'pages/wilayah';
        $data['user']   = $this->user;
        $data['lokasi'] = $this->wilayah_model->read('tb_lokasi');
        $data['negara'] = $this->wilayah_model->read('tb_negara');

        $this->load->view('layouts/app', $data);
    }

    public function create($jenis)
    {
        $this->form_validation->set_rules('nama_wilayah', 'Wilayah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Input';
            $data['jenis'] = $jenis;
            $data['page']  = 'pages/wilayah_create';
            $data['user']  = $this->user;

            $this->load->view('layouts/app', $data);
        } else {
            if ($this->wilayah_model->create($jenis)) {
                return redirect(base_url('wilayah'));
            } else {
                return 'terjadi kesalahan';
            }
        }
    }

    public function edit($jenis, $id)
    {
        $this->form_validation->set_rules('nama_wilayah', 'Wilayah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title']   = 'Update';
            $data['jenis'] = $jenis;
            $data['page']    = 'pages/wilayah_update';
            $data['user']    = $this->user;
            $data['wilayah'] = $this->wilayah_model->readById($id, $jenis);

            $this->load->view('layouts/app', $data);
        } else {
            if ($this->wilayah_model->update($id, $jenis)) {
                return redirect(base_url('wilayah'));
            }
        }
    }

    public function delete($jenis, $id)
    {
        if ($this->wilayah_model->delete($id, $jenis)) {
            return redirect(base_url('wilayah'));
        }
    }
}

/* End of file Wilayah.php */