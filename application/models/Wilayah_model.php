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
        return $this->db->insert('tb_wilayah', $data);
    }

    public function readById($id)
    {
        return $this->db->where('id', $id)->get('tb_wilayah')->row_object();
    }

    public function update($data = [])
    {
        return $this->db->update('tb_wilayah', $data, array('id' => $data['id']));
    }
}
