<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function index()
    {
        $this->db->from('user');
        $user = $this->db->get()->result_array();

        $this->db->select('*')->from('history');
        $this->db->order_by('waktu', 'DESC');
        $history = $this->db->get()->result_array('history');
        $data = array(
            'history' => $history,
            'user' => $user,
            'judul_halaman' => 'Activity Log'
        );
        $data['start'] = $this->uri->segment(3);
        $this->template->load('template_admin', 'admin/history', $data);
    }
}
