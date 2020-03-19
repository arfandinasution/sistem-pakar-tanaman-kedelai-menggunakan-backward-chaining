<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $data['judul'] = 'Halaman Admin';

        $this->db->where('status', 0);
        $this->db->from('konsultasi');
        $data['konsultasi_terbaru'] = $this->db->count_all_results();
        $data['hama_penyakit'] = $this->db->count_all_results('hama_penyakit');
        $data['kategori'] = $this->db->count_all_results('kategori');
        $data['gejala'] = $this->db->count_all_results('gejala');

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer-admin');
    }

    public function konsultasi()
    {
        $data['judul'] = 'Halaman Konsultasi';
        $this->db->order_by('waktu', 'desc');
        $data['konsultasi_terbaru'] = $this->db->get_where('konsultasi', ['status' => 0])->result_array();

        $this->db->select('*');
        $this->db->join('hama_penyakit', 'hama_penyakit.kode = konsultasi.kode_hamapenyakit');
        $this->db->order_by('konsultasi.waktu', 'desc');
        $data['konsultasi_histori'] = $this->db->get_where('konsultasi', ['status' => 1])->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/konsultasi', $data);
        $this->load->view('template/footer-admin');
    }

    public function detailkonsultasi($id)
    {
        $this->form_validation->set_rules('kode_hamapenyakit', 'Pilihan Hama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Detail Konsultasi';

            $this->db->select('*');
            $this->db->join('hama_penyakit', 'hama_penyakit.kode = konsultasi.kode_hamapenyakit');
            $data['konsultasi_histori'] = $this->db->get_where('konsultasi', ['id' => $id])->row_array();

            $data['konsultasi_terbaru'] = $this->db->get_where('konsultasi', ['id' => $id])->row_array();

            $data['hama_penyakit'] = $this->db->get('hama_penyakit')->result_array();

            $this->load->view('template/header-admin', $data);
            $this->load->view('admin/detail-konsultasi', $data);
            $this->load->view('template/footer-admin');
        } else {
            $kode_hamapenyakit = $this->input->post('kode_hamapenyakit');

            $this->db->set('kode_hamapenyakit', $kode_hamapenyakit);
            $this->db->set('status', 1);
            $this->db->where('id', $id);
            $this->db->update('konsultasi');

            redirect('admin/konsultasi');
        }
    }

    public function hapuskonsultasi($id)
    {
        $this->db->delete('konsultasi', ['id' => $id]);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-fw fa-check-circle mr-1"></i>Data konsultasi berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('admin/konsultasi');
    }
}
