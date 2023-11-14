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
        //load
        $this->load->model('History_model', 'history');
        $this->load->library('pagination');

        //ambil data keyword
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('aktivitas', $data['keyword']);
        $this->db->or_like('username', $data['keyword']);
        $this->db->or_like('waktu', $data['keyword']);
        $this->db->from('history');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['history'] = $this->history->getHistory($config['per_page'], $data['start'], $data['keyword']);
        $this->template->load('template_admin', 'admin/history', $data);
    }
}
