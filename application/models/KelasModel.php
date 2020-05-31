<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasModel extends CI_Model
{
    public function getAllClass()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $kelas = $this->db->get();
        $data = $kelas->result_array();
        return $data;
    }
    public function getDetailClassById($id)
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->where('id', $id);
        $kelas = $this->db->get();
        $data = $kelas->row_array();
        return $data;
    }
}
