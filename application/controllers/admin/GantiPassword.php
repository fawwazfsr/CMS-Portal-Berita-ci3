<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GantiPassword extends CI_Controller
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
            'judul_halaman' => 'Ganti Password'
        );
        $this->template->load('template_admin', 'admin/gantipw', $data);
    }
    public function simpan()
    {
        $passBaru = $this->input->post('passBaru');
        $ulangpw = $this->input->post('ulangpw');

        $this->form_validation->set_rules('PassBaru', 'password baru', 'required|matches[ulangpw]');
        $this->form_validation->set_rules('ulangpw', 'ulang password baru', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data = array('password' => $passBaru,);
            $where = array('id_user' => $this->session->userdata('id_user'));
            $this->db->update('user', $data, $where);
            $this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Password Berhasil DiUpdate
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>');
            redirect('admin/auth');
        }else{
            $this->session->set_flashdata('alert', '
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> Gagal Mengganti Password
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
		');
            redirect('admin/gantipassword');
        }
    }
}
