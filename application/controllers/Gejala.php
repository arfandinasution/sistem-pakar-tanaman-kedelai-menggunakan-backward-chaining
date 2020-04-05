<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
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
        $data['judul'] = 'Halaman Gejala Hama & Penyakit';
        $data['hama_penyakit'] = $this->db->get('hama_penyakit')->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('gejala/index', $data);
        $this->load->view('template/footer-admin');
    }

    public function detail($kode)
    {
        $data['judul'] = 'Halaman Detail Gejala Hama & Penyakit';
        $data['hama_penyakit'] = $this->db->get_where('hama_penyakit', ['kode' => $kode])->row_array();
        $data['gejala'] = $this->db->get_where('gejala', ['kode_hamapenyakit' => $kode])->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('gejala/detail', $data);
        $this->load->view('template/footer-admin');
    }

    public function tambah($kode)
    {
        $this->form_validation->set_rules('kode', 'Kode Gejala Hama & Penyakit', 'required|trim');
        $this->form_validation->set_rules('gejala', 'Gejala Hama & Penyakit', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-times-circle mr-1"></i>Kode dan Gejala Hama & Penyakit tidak boleh kosong.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('gejala/detail/' . $kode);
        } else {
            $data = [
                'kode' => strip_tags($this->input->post('kode', true)),
                'gejala' => strip_tags($this->input->post('gejala', true)),
                'kode_hamapenyakit' => $this->input->post('kode_hamapenyakit', true)
            ];
            
            $this->db->insert('gejala', $data);

            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle mr-1"></i>Data gejala berhasil disimpan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('gejala/detail/' . $kode);
        }
    }

    public function edit($kode)
    {
        $this->form_validation->set_rules('gejala', 'Gejala Hama & Penyakit', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-times-circle mr-1"></i>Gejala hama & penyakit tidak boleh kosong.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('gejala/detail/' . $kode);
        } else {
            $this->db->set('gejala', strip_tags($this->input->post('gejala', true)));
            $this->db->where('kode', strip_tags($this->input->post('kode', true)));
            $this->db->update('gejala');
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle mr-1"></i>Data gejala hama & penyakit berhasil diedit.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('gejala/detail/' . $kode);
        }
    }

    public function hapus($kode_hamapenyakit, $kode_gejala)
    {
        $this->db->delete('gejala', ['kode' => $kode_gejala]);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle mr-1"></i>Data gejala hama & penyakit berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('gejala/detail/' . $kode_hamapenyakit);
    }
}
