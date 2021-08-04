<?php if (!defined('BASEPATH')) exit('no direct script allowed');

if (!function_exists('has_login')) {
	function has_login()
	{
		$ci = get_instance();
		$username = $ci->session->userdata('username');

		$query = $ci->db->get_where('users', array('username' => $username, 'is_active' => '1'))->row_array();

		$hasLoginDecision = ($query) ? TRUE : FALSE;
		return $hasLoginDecision;
	}
}

if (!function_exists('kick_it_out')) {
	function kick_it_out($kick_message = 'Akses tidak diizinkan', $alertType = 'danger')
	{
		$ci = get_instance();
		$ci->session->unset_userdata('username');
		$ci->session->unset_userdata('email');

		$ci->session->set_flashdata('message', '<div class="alert alert-' . $alertType . '" role="alert">' . $kick_message . '.</div>');
		redirect('auth/login');
	}
}
