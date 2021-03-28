<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('login');
		echo view('homepage');
		echo view('footer');
	}
	
}