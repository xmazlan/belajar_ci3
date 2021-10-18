<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Upload_model extends CI_Model
{
	public function read()
	{
		return $this->db->get('tb_file')->result();
	}

	public function create($data)
	{
		return $this->db->insert('tb_file', $data);
	}
}

/* End of file Upload_model.php */
