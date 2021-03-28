<?php

namespace App\Controllers;

class Daftar_mobil extends BaseController
{
    public function daftar_mobil()
    {
        echo view('header');
        echo view('daftar_mobil');
        echo view('footer');
    }
}
