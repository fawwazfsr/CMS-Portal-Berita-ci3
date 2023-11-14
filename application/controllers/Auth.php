<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek = array(
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),

        );
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();
        if ($cek == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i> Username tidak ditemukan
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
            ');
            redirect('auth');
        } else if ($password == $cek->password) {
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            $username = $this->session->userdata('username');
            $history = array(
                'username' => $username,
                'waktu' => date('Y-m-d H:i:s'),
                'aktivitas' => 'Login'
            );
            $this->db->insert('history', $history);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i> Password salah 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
            ');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $username = $this->session->userdata('username');
        $history = array(
            'username' => $username,
            'waktu' => date('Y-m-d H:i:s'),
            'aktivitas' => 'Logout'
        );
        $this->db->insert('history', $history);
        redirect('home');
    }
}
