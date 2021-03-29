<?php

namespace App\Controllers;

class Input_mobil extends BaseController
{
    public function input_mobil()
    {
        echo view('layout/header');
        echo view('input_mobil_baru');
        echo view('layout/footer');
    }
}
