<?php

namespace App\Controllers;

use App\Models\Model_Pembeli;

class Test_register extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('test_register');
        echo view('layout/footer');
    }
    public function register()
    {
        $model = new Model_Pembeli();
        $test = $_POST['no_ktp'];
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

        $row = $model->getRowPembeli($test);
        if (isset($row)) {
            return redirect()->to('index');
        } else {
            $model->addPembeli($data);
        }
    }
}
