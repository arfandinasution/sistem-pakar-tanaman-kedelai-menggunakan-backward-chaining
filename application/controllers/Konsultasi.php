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
                        'id' => base_convert(microtime(false), 10, 32),
                        'nama' => $this->input->post('nama', true),
                        'gambar' => $this->upload->data('file_name'),
                        'tanggal' => time()
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
                            Berkas gambar tanaman Berhasil dikirim. Silahkan tunggu beberapa menit kemudian muat ulang kembali halaman.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('konsultasi/hasil');
                } else {
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
        $this->db->from('konsultasi');
        $this->db->join('hama', 'hama.id = konsultasi.id_hama');
        $this->db->where('konsultasi.id', $this->session->userdata('id'));
        $data['konsultasi'] = $this->db->get()->row_array();

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
