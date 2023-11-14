<?php
class History_model extends CI_Model
{
    public function getHistory($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('aktivitas', $keyword);
            $this->db->or_like('username', $keyword);
            $this->db->or_like('waktu', $keyword);
        }
        return $this->db->get('history', $limit, $start)->result_array();
    }
    public function countAllHistory()
    {
        return $this->db->get('history')->num_rows();
    }
}
