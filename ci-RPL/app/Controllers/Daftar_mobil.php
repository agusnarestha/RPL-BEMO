<?php

namespace App\Controllers;

class Daftar_mobil extends BaseController
{
    public function daftar_mobil()
    {
        echo view('layout/header');
        echo view('daftar_mobil');
        echo view('layout/footer');
    }
}
