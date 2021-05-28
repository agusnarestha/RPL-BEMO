<?php

namespace App\Controllers;

use App\Models\Model_Pembeli;

class Test_register extends BaseController
{
    public function index() #fungsi index memuat validasi disimpan dalam variabel $data
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('layout/header');
        echo view('test_register', $data);
        echo view('layout/footer');
    }
    public function register() #fungsi register pembeli, akan melakukan insert ke database ketika validasi sudah terpenuhi, jika tidak maka akan kembali ke fungsi index
    {
        $rules = [
            'nama'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'password'      => 'required|min_length[6]|max_length[200]',
            'no_ktp'        => 'required|min_length[16]|max_length[16]is_unique[user.no_ktp]',
            'username'      => 'required|min_length[3]|max_length[20]',
            'no_hp'         => 'required|min_length[10]|max_length[13]',
            'jenis_kelamin' => 'required',
            'status'        => 'required',
            'alamat'        => 'required|min_length[6]|max_length[200]'
        ];


        if (!$this->validate($rules)) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('Test_register/index'))->withInput()->with('validation', $validation);
        }

        $model = new Model_Pembeli();
        $data = [
            'no_ktp' => $_POST['no_ktp'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email'],
            'no_hp' => $_POST['no_hp'],
            'nama' => $_POST['nama'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'alamat' => $_POST['alamat']
        ];
        // else return redirect()->to('index');

        // $row = $model->getRowPembeli($test);
        // if (isset($row)) {
        //     return redirect()->to('index');
        // } else {
        //     $model->addPembeli($data);
        // }
    }
}
