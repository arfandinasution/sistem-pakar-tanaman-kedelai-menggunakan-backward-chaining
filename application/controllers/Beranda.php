<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Beranda';

        $this->load->view('template/header', $data);
        $this->load->view('beranda/index');
        $this->load->view('template/footer');
    }
}
