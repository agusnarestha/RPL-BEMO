<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Model_Penjual;
 
class Controller_Penjual extends BaseController
{
    #Menampilkan tabel penjual
    public function tabel()
    {
        $model = new Model_Pembeli();
        $data['pembeli'] = $model->getPembeli();
        echo view('tabel',$data);
    }

    public function cari()
    {
        #Mencari username penjual
        $users = new Model_Penjual();
        $cari = $this->request->getGet();
        $data = $users->where('username', $cari)->findAll();
        return view('hasil_pencarian', compact('data'));
    }

    public function loginPenjual()
    {
        #Proses login dimana mengambil username dari tabel penjual, 
        #jika ada maka dibawa ke dasboard penjual, jika tidak maka login ulang
    }

    public function registerPenjual()
    {
        #Proses register penjual
    }
}