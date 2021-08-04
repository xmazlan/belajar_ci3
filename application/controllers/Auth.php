<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		if ($this->session->userdata('username')) {
			redirect('admin');
		}

		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'Username wajib diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password wajib diisi'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('auth/v_login', $data);
		} else {
			$this->_login();
		}
	}


	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->from('users');
		$this->db->where('email', $username);
		$this->db->or_where('username', $username);
		$user = $this->db->get()->row_array();

		// jika user ada
		if ($user) {
			// jika user aktif
			if ($user['is_active'] == '1') {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'email' => $user['email']
					];

					$this->session->set_userdata($data);
					redirect('admin', 'refresh');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Periksa kembali Password Anda!</div>');
					redirect('auth/login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum diaktifkan!</div>');
				redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar!</div>');
			redirect('auth/login');
		}
	}

	public function register()
	{
		if ($this->session->userdata('username')) {
			redirect('admin');
		}

		$this->form_validation->set_rules('fullname', 'Fullname', 'required|trim|alpha_numeric_spaces', [
			'required' => 'Nama Lengakap wajib diisi'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]|alpha_numeric', [
			'required' => 'username wajib diisi',
			'is_unique' => 'Username sudah digunakan, silakan buat Username berbeda'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
			'required' => 'Email wajib diisi',
			'valid_email' => 'Isi Email dengan benar',
			'is_unique' => 'Email ini sudah terdaftar'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[1]|matches[passwordconf]', [
			'required' => 'Password wajib diisi',
			'min_length' => 'Password minimal 8 karakter',
			'matches' => 'Ulangi Password dengan benar'
		]);
		$this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'matches[password]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Buat Akun';
			$this->load->view('auth/v_register', $data);
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'fullname' => $this->input->post('fullname'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
			];

			$this->db->insert('users', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun berhasil dibuat.</div>');
			redirect('auth/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil.</div>');
		redirect('auth/login');
	}
}
