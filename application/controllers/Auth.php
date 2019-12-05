<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        
    }

    function cek_login()
    {
        $this->load->helper('loguser');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->User->cari_user($username);
        if ($data->num_rows() > 0) {

            $user = $data->row();

            if (password_verify($password, $user->password)) {
                $data_user = array(
                    'nama'      => $user->nama,
                    'id'        => $user->id_pegawai,
                    'nik'       => $user->nik,
                    'password'  => $password,
                    'role'      => $user->id_akses,
                    'jabatan'   => $user->nama_jabatan
                );

                if ($data_user['role'] == 1) {
                    $data_user['akses'] = "admin.psd";
                } else if ($data_user['role'] == 2) {
                    $data_user['akses'] = "pegawai.psd";
                } else if ($data_user['role'] == 3) {
                    $data_user['akses'] = "manager.psd";
                } else {
                    $this->session->set_flashdata('pesan', 'User Belum Didaftarkan Hak Aksesnya');
                    redirect('guest/login_page');
                }
                userLog('Loggin', $data_user['id']);
                $this->session->set_userdata($data_user);
                redirect('auth/cek_session');
            } else {
                $this->session->set_flashdata('pesan', 'Password Yang Anda Masukan Salah');
                redirect('guest/login_page');
            }
        } else {
            $this->session->set_flashdata('pesan', 'NIK atau Email Tidak Terdaftar');
            redirect('guest/login_page');
        }
    }

    function cek_session()
    {
        if ($this->session->userdata('role') === '1') {
            redirect('admin');
        } else if ($this->session->userdata('role') === '2') {
            redirect('pegawai');
        } else if ($this->session->userdata('role') === '3') {
            redirect('manager');
        } else {
            $this->session->set_flashdata('pesan', 'Anda Harus Login Terlebih Dahulu');
            redirect('guest/login_page');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function error_page()
    {
        redirect($_SERVER['HTTP_REFERER']);
    }
}
