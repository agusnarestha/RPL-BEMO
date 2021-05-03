<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		helper(['form']);
		echo view('layout/header');
		echo view('login');
		echo view('homepage');
		echo view('layout/footer');
	}
}
