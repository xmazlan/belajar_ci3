<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
    public function read(String $jenis)
    {
        return $this->db->where('type', $jenis)->get('tb_wilayah')->result();
    }

    public function create($data)
    {
        $this->db->insert('tb_wilayah', $data);
    }
}
