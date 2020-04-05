<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Konsultasi';

            $this->load->view('template/header', $data);
            $this->load->view('konsultasi/index');
            $this->load->view('template/footer');
        } else {
            $uploadImage = $_FILES['image']['name'];

            if ($uploadImage) {
                $config['upload_path']          = './assets/img/konsultasi/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 5120;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $data = [
                        'id' => base_convert(hrtime(true), 10, 32),
                        'nama' => $this->input->post('nama', true),
                        'gambar' => $this->upload->data('file_name'),
                        'kode_hamapenyakit' => '',
                        'status' => 0,
                        'waktu' => time()
                    ];

                    $this->db->insert('konsultasi', $data);

                    $dataKonsultasi = [
                        'id' => $data['id'],
                        'nama' => $data['nama']
                    ];

                    $this->session->set_userdata($dataKonsultasi);

                    $this->session->set_flashdata(
                        'alert',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-fw fa-check-circle"></i>
                            Berkas gambar tanaman Berhasil dikirim. Silahkan tunggu beberapa menit halaman akan dimuat ulang otomatis.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('konsultasi/hasil');
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata(
                        'alert',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-fw fa-times-circle"></i>
                            Berkas gambar tanaman gagal dikirim.
                            Perhatikan ukuran berkas gambar tanaman kamu!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('konsultasi');
                }
            }
        }
    }

    public function hasil()
    {
        if (!$this->session->userdata('id')) {
            redirect('konsultasi');
        }

        $data['judul'] = 'Halaman Hasil Konsultasi';
        $this->db->select('*');
        $this->db->join('hama_penyakit', 'hama_penyakit.kode = konsultasi.kode_hamapenyakit');
        $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
        $data['konsultasi'] = $this->db->get_where('konsultasi', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('konsultasi/hasil', $data);
        $this->load->view('template/footer');
    }

    public function selesai()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama');

        redirect('konsultasi');
    }
}
