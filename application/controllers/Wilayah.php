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
        $data['lokasi'] = $this->wilayah_model->read('lokasi');
        $data['negara'] = $this->wilayah_model->read('negara');

        $this->load->view('layouts/app', $data);
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_wilayah', 'Wilayah', 'trim|required');
        $this->form_validation->set_rules('type', 'Tipe Wilayah', 'trim|required|in_list[lokasi,negara]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Input Wilayah';
            $data['page']  = 'pages/wilayah_create';
            $data['user']  = $this->user;

            $this->load->view('layouts/app', $data);
        } else {
            $data = array(
                'nama_wilayah' => $this->input->post('nama_wilayah'),
                'type' => $this->input->post('type')
            );

            if ($this->wilayah_model->create($data)) {
                return redirect(base_url('wilayah'));
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_wilayah', 'Wilayah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title']   = 'Update Wilayah';
            $data['page']    = 'pages/wilayah_update';
            $data['user']    = $this->user;
            $data['wilayah'] = $this->wilayah_model->readById($id);

            $this->load->view('layouts/app', $data);
        } else {
            $data = array(
                'id'           => $id,
                'nama_wilayah' => $this->input->post('nama_wilayah')
            );

            if ($this->wilayah_model->update($data)) {
                return redirect(base_url('wilayah'));
            }
        }
    }

    public function delete($id)
    {
        if ($this->wilayah_model->delete($id)) {
            return redirect(base_url('wilayah'));
        }
    }
}

/* End of file Wilayah.php */