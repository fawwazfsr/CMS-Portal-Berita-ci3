<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Search_model');
    }
    public function index()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('foto', 'DESC');
        $konten = $this->db->limit(4)->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('foto', 'DESC');
        $rencent = $this->db->limit(4)->get()->result_array();
        $data = array(
            'judul' => "Beranda | News",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
            'rencent' => $rencent,
        );
        $this->load->view('beranda', $data);

    }
    public function search()
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('foto', 'DESC');
        $rencent = $this->db->limit(4)->get()->result_array();
        $keyword=$this->input->post('keyword');
        $hasil = $this->Search_model->search($keyword);
        $data = array(
            'judul' => "Beranda | News",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $hasil,
            'rencent' => $rencent,
        );
        $this->load->view('beranda', $data);

    }
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $data = array(
            'judul'     => $nama_kategori."",
            'nama_kategori' => $nama_kategori,
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'caraousel'  => $caraousel,
            'konten'  => $konten
        );
		$this->load->view('kategori', $data);
	}

    public function artikel($id)
    {
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $rencent = $this->db->limit(4)->get()->result_array();
        $data = array(
            'judul' => $konten->judul . " | Cms",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
            'rencent' => $rencent
        );
        $this->load->view('detail', $data);
    }  
}