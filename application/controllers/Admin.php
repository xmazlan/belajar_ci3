<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!has_login()) kick_it_out('Halaman yang Anda tuju hanya tersedia untuk pengguna yang sudah login');
		else $this->user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
	}

	public function index()
	{
		$data['title'] = 'Dasbor';
		$data['page'] = 'pages/welcome';
		$data['user'] = $this->user;

		$this->load->view('layouts/app', $data);
	}
}
