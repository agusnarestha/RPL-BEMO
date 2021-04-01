<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Model_Pembeli;
 
class Controller_Pembeli extends BaseController
{
    #Menampilkan tabel pembeli
    public function tabel()
    {
        $model = new Model_Pembeli();
        $data['pembeli'] = $model->getPembeli();
        echo view('tabel',$data);
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
        #Proses register pembeli
    }

    public function searchMobil()
    {
        #Mencari mobil berdasarkan model, merek, dan menampilkannya
    }

}