<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosis extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Diagnosis';
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['gejala'] = '';

        if ($this->input->post('keyword', true)) {
            $kode_kategori = $this->input->post('keyword', true);
            $this->db->select('*');
            $this->db->from('hama_penyakit');
            $this->db->join('gejala', 'gejala.kode_hamapenyakit = hama_penyakit.kode');
            $this->db->where('hama_penyakit.kode_kategori', $kode_kategori);
            $data['gejala'] = $this->db->get()->result_array();
            $data['kategori2'] = $this->db->get_where('kategori', ['kode' => $kode_kategori])->row_array();
        }

        $this->load->view('template/header', $data);
        $this->load->view('diagnosis/index', $data);
        $this->load->view('template/footer');
    }

    public function hasil()
    {
        $data['judul'] = 'Halaman Hasil Diagnosis';
        $data['gejala'] = $this->input->post('gejala', true);

        if ($data['gejala']) {
            if ($data['gejala'][0] == 'GD001' && $data['gejala'][1] == 'GD002' && $data['gejala'][2] == 'GD003' && $data['gejala'][3] == 'GD004') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h01'])->row_array();
            } elseif ($data['gejala'][0] == 'GD004' && $data['gejala'][1] == 'GD005') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h02'])->row_array();
            } elseif ($data['gejala'][0] == 'GD007' && $data['gejala'][1] == 'GD008') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h03'])->row_array();
            } elseif ($data['gejala'][0] == 'GD009' && $data['gejala'][1] == 'GD010' && $data['gejala'][2] == 'GD011') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h04'])->row_array();
            } elseif ($data['gejala'][0] == 'GD012' && $data['gejala'][1] == 'GD013') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h05'])->row_array();
            } elseif ($data['gejala'][0] == 'GD014' && $data['gejala'][1] == 'GD015') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h06'])->row_array();
            } elseif ($data['gejala'][0] == 'GD016' && $data['gejala'][1] == 'GD017' && $data['gejala'][2] == 'GD018') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h07'])->row_array();
            } elseif ($data['gejala'][0] == 'GD019' && $data['gejala'][1] == 'GD020') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h08'])->row_array();
            } elseif ($data['gejala'][0] == 'GD021' && $data['gejala'][1] == 'GD022') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h09'])->row_array();
            } elseif ($data['gejala'][0] == 'GD023' && $data['gejala'][1] == 'GD024') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h10'])->row_array();
            } elseif ($data['gejala'][0] == 'GD025' && $data['gejala'][1] == 'GD026') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h11'])->row_array();
            } elseif ($data['gejala'][0] == 'GD027' && $data['gejala'][1] == 'GD028' && $data['gejala'][2] == 'GD029' && $data['gejala'][3] == 'GD030') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h12'])->row_array();
            } elseif ($data['gejala'][0] == 'GD031' && $data['gejala'][1] == 'GD032' && $data['gejala'][2] == 'GD033') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h13'])->row_array();
            } elseif ($data['gejala'][0] == 'GD034' && $data['gejala'][1] == 'GD035' && $data['gejala'][2] == 'GD036' && $data['gejala'][3] == 'GD037' && $data['gejala'][4] == 'GD038') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h14'])->row_array();
            } elseif ($data['gejala'][0] == 'GD039' && $data['gejala'][1] == 'GD040' && $data['gejala'][2] == 'GD041' && $data['gejala'][3] == 'GD042' && $data['gejala'][4] == 'GD043') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h15'])->row_array();
            } elseif ($data['gejala'][0] == 'GD044' && $data['gejala'][1] == 'GD045' && $data['gejala'][2] == 'GD046') {
                $this->db->select('*');
                $this->db->join('kategori', 'kategori.kode = hama_penyakit.kode_kategori');
                $data['hasil'] = $this->db->get_where('hama_penyakit', ['hama_penyakit.kode' => 'h16'])->row_array();
            } else {
                $data['hasil'] = '';
            }

            $this->load->view('template/header', $data);
            $this->load->view('diagnosis/hasil', $data);
            $this->load->view('template/footer');
        } else {
            echo 'tidak ada pilihan';
        }
    }
}
