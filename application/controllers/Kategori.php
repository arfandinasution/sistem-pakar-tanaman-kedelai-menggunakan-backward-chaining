<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('beranda');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kategori Hama & Penyakit';
        $this->db->order_by('waktu', 'asc');
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('template/footer-admin');
    }

    public function detail($kode)
    {
        $data['judul'] = 'Halaman Detail Kategori Hama & Penyakit';
        $data['kategori'] = $this->db->get_where('kategori', ['kode' => $kode])->row_array();
        $data['hama_penyakit'] = $this->db->get_where('hama_penyakit', ['kode_kategori' => $kode])->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('kategori/detail', $data);
        $this->load->view('template/footer-admin');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kode_kategori', 'Kode Kategori Hama & Penyakit', 'required|trim');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori Hama & Penyakit', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-times-circle mr-1"></i>Kolom kode dan nama kategori hama & penyakit tidak boleh kosong.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('kategori');
        } else {
            $data = [
                'kode' => strip_tags($this->input->post('kode_kategori', true)),
                'nama_kategori' => strip_tags($this->input->post('nama_kategori', true)),
                'waktu' => time()
            ];

            $this->db->insert('kategori', $data);
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-check-circle mr-1"></i>Data kategori hama & penyakit berhasil disimpan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('kategori');
        }
    }

    public function hapus($kode)
    {
        $data['kode_kategori'] = '';
        $this->db->update('hama_penyakit', $data, ['kode_kategori' => $kode]);

        $this->db->delete('kategori', ['kode' => $kode]);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-fw fa-check-circle mr-1"></i>Data kategori hama & penyakit berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('kategori');
    }
}
