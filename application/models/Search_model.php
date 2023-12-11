<?php
class Search_model extends CI_Model
{
    // public function getKonten($limit, $start, $keyword = null)
    // {
    //     if ($keyword) {
    //         $this->db->like('keterangan', $keyword);
    //         $this->db->or_like('judul', $keyword);
    //         $this->db->or_like('tanggal', $keyword);
    //     }
    //     return $this->db->get('konten', $limit, $start)->result_array();
    // }

    public function search($keyword){
        $this->db->like('judul', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('foto', 'DESC');
        return $this->db->get('konten a')->result_array();
    }
}
