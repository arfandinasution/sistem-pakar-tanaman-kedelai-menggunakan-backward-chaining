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

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/index');
        $this->load->view('template/footer-admin');
    }

    public function konsultasi()
    {
        $data['judul'] = 'Halaman Konsultasi';
        $this->db->order_by('tanggal', 'desc');
        $data['konsultasi'] = $this->db->get('konsultasi')->result_array();
        $data['konsultasiTerbaru'] = $this->db->get_where('konsultasi', ['id_hama' => null])->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/konsultasi', $data);
        $this->load->view('template/footer-admin');
    }

    public function detailkonsultasi($id)
    {
        $this->form_validation->set_rules('hama', 'Pilihan Hama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Detail Konsultasi';
            $data['konsultasi'] = $this->db->get_where('konsultasi', ['id' => $id])->row_array();
            $data['hama'] = $this->db->get('hama')->result_array();

            $this->load->view('template/header-admin', $data);
            $this->load->view('admin/detail-konsultasi', $data);
            $this->load->view('template/footer-admin');
        } else {
            $id_hama = $this->input->post('hama');

            $this->db->set('id_hama', $id_hama);
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


    public function hama()
    {
        $data['judul'] = 'Halaman Hama';
        $data['hama'] = $this->db->get('hama')->result_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/hama', $data);
        $this->load->view('template/footer-admin');
    }

    public function tambahhama()
    {
        $this->form_validation->set_rules('nama', 'Nama Hama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Tambah Hama';

            $this->load->view('template/header-admin', $data);
            $this->load->view('admin/tambah-hama', $data);
            $this->load->view('template/footer-admin');
        } else {
            $data = [
                'id' => base_convert(microtime(false), 10, 16),
                'nama' => $this->input->post('nama', true),
                'pengendalian' => $this->input->post('pengendalian', true),
                'penanggulangan' => $this->input->post('penanggulangan', true)
            ];

            $this->db->insert('hama', $data);
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama berhasil disimpan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/tambahhama');
        }
    }

    public function detailhama($id)
    {
        $data['judul'] = 'Halaman Detail Hama';
        $data['hama'] = $this->db->get_where('hama', ['id' => $id])->row_array();

        $this->load->view('template/header-admin', $data);
        $this->load->view('admin/detail-hama', $data);
        $this->load->view('template/footer-admin');
    }

    public function edithama($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Hama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Edit Hama';
            $data['hama'] = $this->db->get_where('hama', ['id' => $id])->row_array();

            $this->load->view('template/header-admin', $data);
            $this->load->view('admin/edit-hama', $data);
            $this->load->view('template/footer-admin');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'pengendalian' => $this->input->post('pengendalian', true),
                'penanggulangan' => $this->input->post('penanggulangan', true)
            ];

            $this->db->update('hama', $data, ['id' => $id]);
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama berhasil diedit.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/hama');
        }
    }

    public function hapushama($id)
    {
        $this->db->delete('hama', ['id' => $id]);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-fw fa-check-circle mr-1"></i>Data hama berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('admin/hama');
    }
}
