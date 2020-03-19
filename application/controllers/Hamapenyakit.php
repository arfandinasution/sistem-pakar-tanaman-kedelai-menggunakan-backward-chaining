<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hamapenyakit extends CI_Controller
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
        $data['judul'] = 'Halaman Hama & Penyakit';
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['hama_penyakit'] = $this->db->get('hama_penyakit')->result_array();

        if ($this->input->post('keyword', true)) {
            $keyword = htmlspecialchars($this->input->post('keyword', true));
            $this->db->select('hama_penyakit.kode, nama_hamapenyakit, pengendalian, penanggulangan, hama_penyakit.waktu, nama_kategori, kode_kategori');
            $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
            $this->db->like('nama_hamapenyakit', $keyword);
            $this->db->or_like('nama_kategori', $keyword);
            $data['hama_penyakit'] = $this->db->get('hama_penyakit')->result_array();
        }

        $this->load->view('template/header-admin', $data);
        $this->load->view('hamapenyakit/index', $data);
        $this->load->view('template/footer-admin');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kode', 'Kode Hama & Penyakit', 'required|trim|is_unique[hama_penyakit.kode]');
        $this->form_validation->set_rules('nama_hamapenyakit', 'Nama Hama & Penyakit', 'required|trim');
        $this->form_validation->set_rules('pengendalian', 'Pengendalian Hama', 'trim');
        $this->form_validation->set_rules('penanggulangan', 'Penanggulan Hama', 'trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Form Tambah Hama & Penyakit';

            $data['kategori'] = $this->db->get('kategori')->result_array();

            $this->load->view('template/header-admin', $data);
            $this->load->view('hamapenyakit/tambah', $data);
            $this->load->view('template/footer-admin');
        } else {
            $data = [
                'kode' => strip_tags($this->input->post('kode', true)),
                'nama_hamapenyakit' => strip_tags($this->input->post('nama_hamapenyakit', true)),
                'pengendalian' => strip_tags($this->input->post('pengendalian', true)),
                'penanggulangan' => strip_tags($this->input->post('penanggulangan', true)),
                'waktu' => time(),
                'kode_kategori' => $this->input->post('kode_kategori', true)
            ];

            $this->db->insert('hama_penyakit', $data);
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama & penyakit berhasil disimpan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('hamapenyakit/tambah');
        }
    }

    public function edit($kode)
    {
        $this->form_validation->set_rules('nama_hamapenyakit', 'Nama Hama & Penyakit', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Halaman Form Edit Hama & Penyakit';
            $data['kategori'] = $this->db->get('kategori')->result_array();
            $data['hama_penyakit'] = $this->db->get_where('hama_penyakit', ['kode' => $kode])->row_array();

            $this->load->view('template/header-admin', $data);
            $this->load->view('hamapenyakit/edit', $data);
            $this->load->view('template/footer-admin');
        } else {
            $data = [
                'nama_hamapenyakit' => strip_tags($this->input->post('nama_hamapenyakit', true)),
                'pengendalian' => strip_tags($this->input->post('pengendalian', true)),
                'penanggulangan' => strip_tags($this->input->post('penanggulangan', true)),
                'kode_kategori' => strip_tags($this->input->post('kode_kategori', true)),
            ];

            $this->db->update('hama_penyakit', $data, ['kode' => $kode]);
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama & penyakit berhasil diedit.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('hamapenyakit');
        }
    }

    public function hapus($kode)
    {
        $this->db->delete('hama_penyakit', ['kode' => $kode]);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama & penyakit berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('hamapenyakit');
    }
}
