<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Jabatan');
        $this->load->model('News');
        if ($this->session->userdata('role') != 1) {
            redirect('auth/cek_session');
        }
    }

    function index()
    {
        $data['judul_halaman'] = "Admin - Dashboard";
        $data['active'] = "active";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $admin = $this->User->cari_user_admin(1)->result();
        $pegawai = $this->User->cari_user_pegawai(2)->result();
        $manager = $this->User->cari_user_manager(3)->result();
        $data['berita'] = $this->News->tampil_berita_index(5)->result();
        $data['card'] = [
            ['Pegawai', count($pegawai)],
            ['Manager', count($manager)],
            ['Admin', count($admin)]
        ];
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    function data_pegawai()
    {
        $data['judul_halaman'] = "Admin - Data Pegawai";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $data['daftar_pegawai'] = $this->User->get_pegawai()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_pegawai');
        $this->load->view('templates/footer');
    }

    function tambah_pegawai()
    {
        $data['judul_halaman'] = "Admin - Tambah Pegawai";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $data['jabatan'] = $this->Jabatan->get_jabatan()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/tambah_pegawai');
        $this->load->view('templates/footer');
    }

    function data_cuti()
    {
        $data['judul_halaman'] = "Admin - Data Cuti";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), 'active', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_cuti');
        $this->load->view('templates/footer');
    }

    function data_berita()
    {
        $data['judul_halaman'] = "Admin - Data Berita";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), 'active', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $data['daftar_berita'] = $this->News->daftar_berita()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_berita');
        $this->load->view('templates/footer');
    }

    function tambah_berita()
    {
        $data['judul_halaman'] = "Admin - Tambah Berita";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), 'active', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/tambah_berita');
        $this->load->view('templates/footer');
    }

    function ubah_data()
    {
        $data['judul_halaman'] = "Admin - Ubah Data Pegawai";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $id_pegawai = $this->uri->segment(3);
        $data['user'] = $this->User->cari_user($id)->row();
        $data['pegawai'] = $this->User->detail_pegawai($id_pegawai)->row();
        if ($data['pegawai']->agama == "Islam") {
            $data['agama'] = ['selected', '', '', '', ''];
        } elseif ($data['pegawai']->agama == "Kristen") {
            $data['agama'] = ['', 'selected', '', '', ''];
        } elseif ($data['pegawai']->agama == "Katholik") {
            $data['agama'] = ['', '', 'selected', '', ''];
        } elseif ($data['pegawai']->agama == "Hindu") {
            $data['agama'] = ['', '', '', 'selected', ''];
        } elseif ($data['pegawai']->agama == "Budha") {
            $data['agama'] = ['', '', '', '', 'selected'];
        }

        if ($data['pegawai']->pendidikan == "SMA") {
            $data['pendidikan'] = ['selected', '', '', '', '', ''];
        } elseif ($data['pegawai']->pendidikan == "D3") {
            $data['pendidikan'] = ['', 'selected', '', '', '', ''];
        } elseif ($data['pegawai']->pendidikan == "D4") {
            $data['pendidikan'] = ['', '', 'selected', '', '', ''];
        } elseif ($data['pegawai']->pendidikan == "S1") {
            $data['pendidikan'] = ['', '', '', 'selected', '', ''];
        } elseif ($data['pegawai']->pendidikan == "S2") {
            $data['pendidikan'] = ['', '', '', '', 'selected', ''];
        } elseif ($data['pegawai']->pendidikan == "S3") {
            $data['pendidikan'] = ['', '', '', '', '', 'selected'];
        }

        if ($data['pegawai']->status == "Belum Menikah") {
            $data['status'] = ['selected', ''];
        } elseif ($data['pegawai']->status == "Menikah") {
            $data['status'] = ['', 'selected'];
        }

        if ($data['pegawai']->jenis_kelamin == "L") {
            $data['jenis_kelamin'] = ['selected', ''];
        } elseif ($data['pegawai']->jenis_kelamin == "P") {
            $data['jenis_kelamin'] = ['', 'selected'];
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/edit_pegawai');
        $this->load->view('templates/footer');
    }

    function ubah_berita($id_berita)
    {
        $data['judul_halaman'] = "Admin - Ubah Berita";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), 'active', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $data['lihat_berita'] = $this->News->tampil_berita($id_berita)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/edit_berita', $data);
        $this->load->view('templates/footer');
    }

    function detail_berita($id_berita)
    {
        $data['judul_halaman'] = "Admin - Detail Berita";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), '', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), 'active', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $id_berita = $this->uri->segment(3);
        $data['lihat'] = $this->News->tampil_berita($id_berita)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/detail_berita', $data);
        $this->load->view('templates/footer');
    }

    function data_pribadi($nik)
    {
        $data['judul_halaman'] = "Admin - Data Pribadi";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = "#";
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];

        $nik = $this->uri->segment(3);
        $data['user'] = $this->User->cari_user($nik)->row();

        if ($data['user']->agama == "Islam") {
            $data['agama'] = ['selected', '', '', '', ''];
        } elseif ($data['user']->agama == "Kristen") {
            $data['agama'] = ['', 'selected', '', '', ''];
        } elseif ($data['user']->agama == "Katholik") {
            $data['agama'] = ['', '', 'selected', '', ''];
        } elseif ($data['user']->agama == "Hindu") {
            $data['agama'] = ['', '', '', 'selected', ''];
        } elseif ($data['user']->agama == "Budha") {
            $data['agama'] = ['', '', '', '', 'selected'];
        }

        if ($data['user']->pendidikan == "SMA") {
            $data['pendidikan'] = ['selected', '', '', '', '', ''];
        } elseif ($data['user']->pendidikan == "D3") {
            $data['pendidikan'] = ['', 'selected', '', '', '', ''];
        } elseif ($data['user']->pendidikan == "D4") {
            $data['pendidikan'] = ['', '', 'selected', '', '', ''];
        } elseif ($data['user']->pendidikan == "S1") {
            $data['pendidikan'] = ['', '', '', 'selected', '', ''];
        } elseif ($data['user']->pendidikan == "S2") {
            $data['pendidikan'] = ['', '', '', '', 'selected', ''];
        } elseif ($data['user']->pendidikan == "S3") {
            $data['pendidikan'] = ['', '', '', '', '', 'selected'];
        }

        if ($data['user']->status == "Belum Menikah") {
            $data['status'] = ['selected', ''];
        } elseif ($data['user']->status == "Menikah") {
            $data['status'] = ['', 'selected'];
        }

        if ($data['user']->jenis_kelamin == "L") {
            $data['jenis_kelamin'] = ['selected', ''];
        } elseif ($data['user']->jenis_kelamin == "P") {
            $data['jenis_kelamin'] = ['', 'selected'];
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_pribadi', $data);
        $this->load->view('templates/footer');
    }

    function detail_pegawai()
    {
        $data['judul_halaman'] = "Admin - Detail Pegawai";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/detail_pegawai');
        $this->load->view('templates/footer');
    }

    function tambah_anak()
    {
        $data['judul_halaman'] = "Admin - Tambah Anak";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/tambah_anak');
        $this->load->view('templates/footer');
    }

    function tambah_istri()
    {
        $data['judul_halaman'] = "Admin - Tambah Istri";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/tambah_istri');
        $this->load->view('templates/footer');
    }

    function tambah_suami()
    {
        $data['judul_halaman'] = "Admin - Tambah Suami";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/tambah_suami');
        $this->load->view('templates/footer');
    }

    function update_data()
    {
        // var_dump($_POST);
        // die;
        $nik = $this->input->post('nik');
        $password_plain = $this->input->post('password');
        $password_ecrypt = password_hash($password_plain, PASSWORD_DEFAULT);
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan' => $this->input->post('pendidikan'),
            'status' => $this->input->post('status'),
            'agama' => $this->input->post('agama'),
            'no_telp' => $this->input->post('no_telp')
        );

        if ($this->User->update_data($data, $nik)) {
            $this->session->set_flashdata('pesan_berhasil', 'Data Berhasil Di Ubah');
             $this->load->helper('updatesession');
            updateSession(['nama' => $data['nama']]);
            redirect(base_url('admin/data_pribadi/') . $nik);
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Data Harus Dilengkapi. Silahkan Isi Data Ulang');
            redirect(base_url('admin/data_pribadi/') . $nik);
        }
    }

    function upload_gambar_berita($nama)
    {
        $config['upload_path']          = './assets/img/berita/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['file_name']            = $nama;
        $config['max_size']             = 1024;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
        } else {
            return $this->upload->display_errors();
        }
    }

    function input_news()
    {
        $data = [
            'id_berita'             => '',
            'id_pegawai'            => $this->session->userdata('id'),
            'judul_berita'          => $this->input->post('judul'),
            'nama_gambar_berita'    => $this->upload_gambar_berita($this->input->post('judul')),
            'tanggal'               => date('Ymd'),
            'isi_berita'            => $this->input->post('isi')
        ];
        if ($this->News->input_berita($data)) {
            $this->session->set_flashdata('pesan_berhasil', "Berita Behasil di Publish");
            redirect(base_url('admin/data_berita'));
        }
    }

    function edit_berita()
    {
        $id_berita = $this->input->post('id');
        $data = [
            'judul_berita'          => $this->input->post('judul'),
            'isi_berita'            => $this->input->post('isi'),
            // 'nama_gambar_berita'    => $this->upload_gambar_berita($this->input->post('judul')),
            'tanggal'               => date('Ymd'),
        ];
        if ($this->News->update_news($data, $id_berita)) {
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Update Berita');
            redirect(base_url('admin/data_berita'));
        }
    }

    function edit_pegawai()
    {
       
        $nik = $this->input->post('nik');
        $data = [
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'alamat'        => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan'    => $this->input->post('pendidikan'),
            'status'        => $this->input->post('status'),
            'agama'         => $this->input->post('agama'),
            'no_telp'       => $this->input->post('no_telp')
        ];
        if ($this->User->update_data($data, $nik)) {
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Update Data');
            
            redirect(base_url('admin/data_pegawai'));
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Gagal Update Data. NIK Tidak Ada');
            redirect(base_url('admin/data_pegawai'));
        }
    }

    function input_data()
    {
        $nik = $this->input->post('nik');
        $data = [
            'id_pegawai'    => '',
            'nik'           => $nik,
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'password'      => $this->input->post('password'),
            'alamat'        => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan'    => $this->input->post('pendidikan'),
            'status'        => $this->input->post('status'),
            'agama'         => $this->input->post('agama'),
            'no_telp'       => $this->input->post('no_telp'),
            'id_jabatan'    => $this->input->post('jabatan'),
            'tanggal_masuk' => date('Ymd')
        ];
        if (!$nik == $this->User->cari_nik($nik)->result()) {
            $this->User->input_user($data);
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Menyimpan Data');
            redirect(base_url('admin/data_pegawai'));
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data. NIK Sudah Ada');
            redirect(base_url('admin/data_pegawai'));
        }
    }

    function cari_data($nama)
    {
        $nama = $this->uri->segment(3);
        $data['judul_halaman'] = "Admin - Data Dicari";
        $data['active'] = "";
        $data['dashboard'] = base_url('admin');
        $data['data_pribadi'] = base_url('admin/data_pribadi');
        $data['menu'] = [
            ['Data Pegawai', base_url('admin/data_pegawai'), 'active', 'fa-user'],
            ['Cuti', base_url('admin/data_cuti'), '', 'fa-calendar-alt'],
            ['Berita', base_url('admin/data_berita'), '', 'fa-newspaper']
        ];
        $id = $this->session->userdata('nik');
        $data['user'] = $this->User->cari_user($id)->row();
        $data['daftar_pegawai'] = $this->User->cari_nama($nama)->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('admin/data_pegawai');
        $this->load->view('templates/footer');
    }

    function cari_nama()
    {
        $nama = $this->input->post('nama');
        redirect('admin/cari_data/' . $nama);
    }
}
