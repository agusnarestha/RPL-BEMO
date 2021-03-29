<?php

namespace App\Controllers;

class Detail_mobil extends BaseController
{
	public function detail_mobil()
	{
		echo view('layout/header');
		echo view('detail_mobil');
		echo view('layout/footer');
	}
}
#