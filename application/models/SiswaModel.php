<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaModel extends CI_Model
{
    function tambahSiswa($data)
    {
        $this->db->insert('siswa', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function getSiswaByUserId($id){
        $this->db->select("*");
        $this->db->from("siswa");
        $this->db->where("user_id", $id);
        $data = $this->db->get()->result_array();

        for ($i = 0; $i < sizeOf($data); $i++) {
            $this->db->select('*');
            $this->db->from('kelas');
            $this->db->where('id', $data[$i]['kelas_id']);
            $kelas = $this->db->get()->row_array();
            $data[$i]['kelas'] = $kelas;
        }


        return $data;
    }

}
