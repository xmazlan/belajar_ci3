<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
    public function read(String $tabel)
    {
        return $this->db->get($tabel)->result();
    }

    public function create($jenis)
    {
        if ($jenis == 'lokasi') {
            $tabel = 'tb_lokasi';
            $data = [
                'nama_lokasi' => $this->input->post('nama_wilayah')
            ];
        } elseif ($jenis == 'negara') {
            $tabel = 'tb_negara';
            $data = [
                'nama_negara' => $this->input->post('nama_wilayah')
            ];
        }

        return $this->db->insert($tabel, $data);
    }

    public function readById($id, $jenis)
    {
        if ($jenis == 'lokasi') {
            $tabel = 'tb_lokasi';
        } elseif ($jenis == 'negara') {
            $tabel = 'tb_negara';
        }

        $nama = 'nama_' . $jenis . ' AS nama';

        return $this->db->select('*,' . $nama)->where('id', $id)->get($tabel)->row_object();
    }

    public function update($id, $jenis)
    {
        if ($jenis == 'lokasi') {
            $tabel = 'tb_lokasi';
            $data = [
                'nama_lokasi' => $this->input->post('nama_wilayah')
            ];
        } elseif ($jenis == 'negara') {
            $tabel = 'tb_negara';
            $data = [
                'nama_negara' => $this->input->post('nama_wilayah')
            ];
        }

        return $this->db->update($tabel, $data, array('id' => $id));
    }

    public function delete($id, $jenis)
    {
        if ($jenis == 'lokasi') {
            $tabel = 'tb_lokasi';
        } elseif ($jenis == 'negara') {
            $tabel = 'tb_negara';
        }
        return $this->db->delete($tabel, array('id' => $id));
    }
}
