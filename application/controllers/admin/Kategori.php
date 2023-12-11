<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $this->db->select('*')->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      => $kategori
        );
        $this->template->load('template_admin', 'admin/kategori', $data);
    }
    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i> Kategori konten sudah digunakan
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
            ');
            redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> Kategori berhasil ditambah
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
		');
        redirect('admin/kategori');
        $username = $this->session->userdata('username');
        $history = array(
            'username' => $username,
            'waktu' => date('Y-m-d H:i:s'),
            'aktivitas' => 'Menambah Kategori'
        );
        $this->db->insert('history', $history);
    }
    public function hapus_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $this->db->Delete('kategori', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Kategori Berhasil dihapus
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>');
        $username = $this->session->userdata('username');
        $history = array(
            'username' => $username,
            'waktu' => date('Y-m-d H:i:s'),
            'aktivitas' => 'Menghapus Kategori'
        );
        $this->db->insert('history', $history);
        redirect('admin/kategori');
    }
    public function edit_kategori()
    {
        $data = array('nama_kategori'         => $this->input->post('nama_kategori', 'ASC'));
        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $this->db->update('kategori', $data, $where);
        $this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>Kategori Berhasil diperbarui
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>');
        $username = $this->session->userdata('username');
        $history = array(
            'username' => $username,
            'waktu' => date('Y-m-d H:i:s'),
            'aktivitas' => 'Memperbarui Kategori'
        );
        $this->db->insert('history', $history);
        redirect('admin/kategori');
    }
}
