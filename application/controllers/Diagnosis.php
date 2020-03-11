<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosis extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Diagnosis';

        $this->load->view('template/header', $data);
        $this->load->view('diagnosis/index');
        $this->load->view('template/footer');
    }
}
