<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    function registrasi($data){
        $this->db->insert('user', $data);
        if ($this->db->affected_rows()>0) {
            return true;
        }else{
            return false;
        }
    }

    public function getDataUser($email)
    {
        $data = $this->db->get_where('user', ['email' => $email])->row_array();
        return $data;
    }
}
