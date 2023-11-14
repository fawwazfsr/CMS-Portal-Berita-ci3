<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_user_by_id($user_id)
    {
        $this->db->where('id_user', $user_id)->get('user')->row();
    }
    public function update_password($user_id, $hashed_password)
    {
        $this->db->where('id_user', $user_id)->update('user', ['password' => $hashed_password]);
    }
}
