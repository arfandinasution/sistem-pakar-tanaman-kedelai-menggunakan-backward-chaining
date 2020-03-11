<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentikasi extends CI_Controller
{
    public function masuk()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            ['required' => '%s tidak boleh kosong.']
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            ['required' => '%s tidak boleh kosong.']
        );

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Masuk';

            $this->load->view('template/header', $data);
            $this->load->view('autentikasi/masuk');
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);

            $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

            if ($admin) {
                if (password_verify($password, $admin['password'])) {
                    $data['username'] = $admin['username'];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata(
                        'alert',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Password salah.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('autentikasi/masuk');
                }
            } else {
                $this->session->set_flashdata(
                    'alert',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Username salah.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('autentikasi/masuk');
            }
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-fw fa-info-circle mr-1"></i>Kamu telah keluar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('autentikasi/masuk');
    }
}
