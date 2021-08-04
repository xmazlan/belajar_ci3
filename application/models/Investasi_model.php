<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investasi_model extends CI_Model
{
    public function tambah($data)
    {
        return $this->db->insert('tb_investasi', $data);
    }
}
