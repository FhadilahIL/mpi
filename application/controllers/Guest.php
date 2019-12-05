<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->model('News');
    }

    function index()
    {
        $data['berita_related'] = $this->News->related_news()->result();
        $data['berita_carousel'] = $this->News->carousel_news()->result();
        $this->load->view('guest/index', $data);
    }

    function login_page()
    {
        if ($this->session->userdata('role') != NULL) {
            redirect('auth/cek_session');
        }
        $this->load->view('guest/login');
    }

    function detail_berita()
    {
        $id_berita = $this->uri->segment(3);
        $cari = $this->News->cari($id_berita);
        if ($cari->num_rows() > 0) {
            $a = $cari->row();
            if ($a->id_berita = $id_berita) {
                $data['tampil_berita'] = $this->News->tampil_berita($id_berita)->row();
                $this->load->view('guest/detail_berita', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }
}
