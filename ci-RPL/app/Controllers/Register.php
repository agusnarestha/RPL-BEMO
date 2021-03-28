<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function register()
    {
        echo view('header');
        echo view('register');
        echo view('footer');
    }
}
