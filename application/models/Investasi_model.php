<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Investasi_model extends CI_Model
{
    public function read($jenisInvestasi)
    {
        $this->db->select('*, tb_lokasi.nama_lokasi as nama_wilayah');
        $this->db->join('tb_lokasi', 'tb_lokasi.id = tb_investasi.kode_lokasi');
        $this->db->join('tb_negara', 'tb_negara.id = tb_investasi.kode_negara');
        if ($jenisInvestasi == 'pmdn') {
            $this->db->where('nama_negara', 'Indonesia');
        } elseif ($jenisInvestasi == 'pma') {
            $this->db->not('nama_negara !=', 'Indonesia');
        }

        return $this->db->get('tb_investasi')->result();
    }

    public function create($data)
    {
        return $this->db->insert('tb_investasi', $data);
    }
}
