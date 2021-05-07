<?php

namespace App\Controllers;

use App\Models\Model_Pembeli;

class tampilUser extends BaseController
{
    //Menginialisasi objek dari model
    function __construct()
    {
        $this->pembeli = new Model_Pembeli();
    }
    
    //Fungsi untuk menampilkan data tabel pembeli
    public function index()
    {
        //Menginialisasi data pembeli yang diambil dari model getPembeli()
        $data['pembeli'] = $this->pembeli->getPembeli();
        //Menampilkan view tabel dan menampilkan data yang diinisialisasi tadi
        echo view('tabel', $data);
    }

    //Fungsi untuk menghapus data pembeli berdasarkan no ktp
    public function deleteUser($no_ktp)
    {
        //Untuk mendelete data pembeli di database
        $this->db->table('pembeli')->deleteUser($no_ktp);
        //menampilkan pesan berhasil didelete
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        //pindah page ke tampilUser jika sudah dilakukan
        return redirect()->to(base_url('tampilUser'));
    }
}
