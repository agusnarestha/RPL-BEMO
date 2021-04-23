<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Pembeli;

class Controller_Pembeli extends BaseController
{
    #Menampilkan tabel pembeli
    public function tabel()
    {
        $model = new Model_Pembeli();
        $data['pembeli'] = $model->getPembeli();
        echo view('tabel', $data);
    }

    public function cariPembeli()
    {
        #Mencari username pembeli
        $users = new Model_Pembeli();
        $cari = $this->request->getGet();
        $data = $users->where('username', $cari)->findAll();
        return view('hasil_pencarian', compact('data'));
    }

    public function loginPembeli()
    {
        #Proses login dimana mengambil username dari tabel pembeli, 
        #jika ada maka dibawa ke dasboard pembeli, jika tidak maka login ulang
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/register');
        } else {
            $username = $this->input->post('username');
            $name = $this->input->post('name');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'username' => $username,
                'name' => $name,
                'password' => $pass
            ];
            $insert = $this->auth_model->register("users", $data);
            if ($insert) {
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="' . base_url('index.php/auth/login') . '";</script>';
            }
        }
    }

    public function searchMobil()
    {
        #Mencari mobil berdasarkan model, merek, dan menampilkannya
    }
}
