<?php

defined('BASEPATH') or exit('No direct script access allowed');
//create update delete bisa digabung karena memiliki 1 tabel
class Investasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!has_login()) kick_it_out('Halaman yang Anda tuju hanya tersedia untuk pengguna yang sudah login');
        else $this->user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->model('investasi_model');
        $this->load->model('wilayah_model');
    }

    public function pmdn()
    {
        $data['title']      = 'PMDN';
        $data['page']       = 'pages/pmdn';
        $data['user']       = $this->user;
        $data['investment'] = $this->investasi_model->read('pmdn');

        $this->load->view('layouts/app', $data);
    }

    public function pmdn_create()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama perusahaan', 'trim|required');
        $this->form_validation->set_rules('no_dan_tgl', 'Nomor dan tanggal', 'trim|required');
        $this->form_validation->set_rules('bidang_usaha', 'Bidang usaha', 'trim|required');
        $this->form_validation->set_rules('alamat_kantor', 'Alamat kantor', 'trim|required');
        $this->form_validation->set_rules('kode_lokasi', 'Lokasi', 'trim|required|numeric');
        $this->form_validation->set_rules('investasi_tambahan', 'Investasi tambahan', 'trim|numeric');
        $this->form_validation->set_rules('investasi_total', 'Investasi total', 'trim|numeric');
        $this->form_validation->set_rules('tki', 'TKI', 'trim|numeric');
        $this->form_validation->set_rules('tka', 'TKA', 'trim|numeric');
        $this->form_validation->set_rules('mata_uang', 'Mata uang', 'trim|required|in_list[usd,rp]');

        if ($this->form_validation->run() == FALSE) {
            //tampil form
            $data['title']     = 'Input PMDN';
            $data['locations'] = $this->wilayah_model->read('tb_lokasi');
            $data['page']      = 'pages/pmdn_create';
            $data['user']      = $this->user;

            $this->load->view('layouts/app', $data);
        } else {
            $data = array(
                'nama_perusahaan'    => $this->input->post('nama_perusahaan'),
                'no_dan_tgl'         => $this->input->post('no_dan_tgl'),
                'bidang_usaha'       => $this->input->post('bidang_usaha'),
                'alamat_kantor'      => $this->input->post('alamat_kantor'),
                'kode_lokasi'        => $this->input->post('kode_lokasi'),
                'investasi_tambahan' => $this->input->post('investasi_tambahan'),
                'investasi_total'    => $this->input->post('investasi_total'),
                'tki'                => $this->input->post('tki'),
                'tka'                => $this->input->post('tka'),
                'mata_uang'          => $this->input->post('mata_uang')
            );

            if ($this->investasi_model->create($data)) {
                return redirect(base_url('investasi/pmdn'));
            } else {
                echo 'terjadi kesalahan';
            }
        }
    }

    public function pmdn_update($id)
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama perusahaan', 'trim|required');
        $this->form_validation->set_rules('no_dan_tgl', 'Nomor dan tanggal', 'trim|required');
        $this->form_validation->set_rules('bidang_usaha', 'Bidang usaha', 'trim|required');
        $this->form_validation->set_rules('alamat_kantor', 'Alamat kantor', 'trim|required');
        $this->form_validation->set_rules('kode_lokasi', 'Lokasi', 'trim|required|numeric');
        $this->form_validation->set_rules('investasi_tambahan', 'Investasi tambahan', 'trim|numeric');
        $this->form_validation->set_rules('investasi_total', 'Investasi total', 'trim|numeric');
        $this->form_validation->set_rules('tki', 'TKI', 'trim|numeric');
        $this->form_validation->set_rules('tka', 'TKA', 'trim|numeric');
        $this->form_validation->set_rules('mata_uang', 'Mata uang', 'trim|required|in_list[usd,rp]');

        if ($this->form_validation->run() == FALSE) {
            //tampil form
            $data['title']      = 'Update PMDN';
            $data['locations']  = $this->wilayah_model->read('tb_lokasi');
            $data['page']       = 'pages/pmdn_update';
            $data['user']       = $this->user;
            $data['investment'] = $this->investasi_model->readById($id);

            $this->load->view('layouts/app', $data);
        } else {
            $data = array(
                'id'                 => $id,
                'nama_perusahaan'    => $this->input->post('nama_perusahaan'),
                'no_dan_tgl'         => $this->input->post('no_dan_tgl'),
                'bidang_usaha'       => $this->input->post('bidang_usaha'),
                'alamat_kantor'      => $this->input->post('alamat_kantor'),
                'kode_lokasi'        => $this->input->post('kode_lokasi'),
                'investasi_tambahan' => $this->input->post('investasi_tambahan'),
                'investasi_total'    => $this->input->post('investasi_total'),
                'tki'                => $this->input->post('tki'),
                'tka'                => $this->input->post('tka'),
                'mata_uang'          => $this->input->post('mata_uang')
            );

            if ($this->investasi_model->update($data)) {
                return redirect(base_url('investasi/pmdn'));
            } else {
                echo 'terjadi kesalahan';
            }
        }
    }

    public function delete($jenis, $id)
    {
        if ($this->investasi_model->delete($id)) {
            return redirect(base_url('investasi/' . $jenis));
        }
    }
}
