<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data = array(
            'judul_halaman' => 'Profile'
        );
        $this->template->load('template_admin', 'admin/profile', $data);
    }
   
}
