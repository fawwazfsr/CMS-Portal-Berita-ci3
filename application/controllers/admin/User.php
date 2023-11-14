<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if ($this->session->userdata('level') <> 'admin') {
			redirect('auth');
		}
	}
	public function index()
	{
		$this->db->from('user');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Data User',
			'user'          => $user
		);
		$this->template->load('template_admin', 'admin/user', $data);
	}
	public function simpan()
	{
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'username'	=> $this->input->post('username'),
			'password' 	=> md5($this->input->post('password')),
			'level' 	=> $this->input->post('level'),
		);
		$this->db->from('user');
		$this->db->where('username', $this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if ($cek <> NULL) {
			$this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i> Username sudah ada
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
            ');
			redirect('admin/user');
		}
		$this->db->insert('user', $data);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> Pengguna berhasil ditambah
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
		');
		redirect('admin/user');
		$username = $this->session->userdata('username');
        $history = array(
            'username' => $username,
            'waktu' => date('Y-m-d H:i:s'),
            'aktivitas' => 'Menambah User'
        );
        $this->db->insert('history', $history);
	}
	public function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->db->Delete('user', $where);
		$this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Berhasil Dihapus
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>');
		redirect('admin/user');
		$username = $this->session->userdata('username');
		$history = array(
			'username' => $username,
			'waktu' => date('Y-m-d H:i:s'),
			'aktivitas' => 'Menghapus User'
		);
		$this->db->insert('history', $history);
	}
	public function edit_user()
	{
		$data = array(
			'nama' 		=> $this->input->post('nama', 'ASC'),
			'level' 	=> $this->input->post('level')
		);
		$where = array('id_user' => $this->input->post('id_user'));
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Berhasil DiUpdate
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>');
		$username = $this->session->userdata('username');
		$history = array(
			'username' => $username,
			'waktu' => date('Y-m-d H:i:s'),
			'aktivitas' => 'Memperbarui User'
		);
		$this->db->insert('history', $history);
		redirect('admin/user');
	}
}
