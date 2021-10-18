<?php

class Upload extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		if (!has_login()) kick_it_out('Halaman yang Anda tuju hanya tersedia untuk pengguna yang sudah login');
		else $this->user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->model('upload_model');
	}

	public function index()
	{
		$data['title'] = 'Upload file';
		$data['page'] = 'pages/upload_form';
		$data['user'] = $this->user;
		$data['error'] = array('error' => ' ');
		$data['list_file'] = $this->upload_model->read();

		$this->load->view('layouts/app', $data);
	}

	public function do_upload()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'xls|xlsx';
		$config['max_size']             = 2048; // 2MB

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$this->session->set_flashdata('upload_message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
			return redirect(base_url('upload'));
		} else {
			$data = [
				'path' => $this->upload->file_name
			];
			$this->upload_model->create($data);
			$this->session->set_flashdata('upload_message', '<div class="alert alert-success" role="alert">Berhasil diupload : ' . $this->upload->file_name . '</div>');
			return redirect(base_url('upload'));
		}
	}
}
