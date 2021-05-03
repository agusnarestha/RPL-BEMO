<?php namespace App\Models;

use CodeIgniter\Model;

class Model_Pembeli extends Model
{

    // public function getPembeli()
    // {
    //     #Menampilkan Tabel Pembeli
    //     return $this->db->table('pembeli')
    //     ->join('user','pembeli.id_pembeli=user.id_pembeli')
    //     ->get()->getResultArray();
    // }

    protected $table = 'user';
    protected $allowedFields = ['no_ktp','username','password','email','no_hp','nama','jenis_kelamin','alamat','status'];
    

    public function showUser()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }

    public function deleteUser($primarykey)
    {
        return $this->db->table($this->table)->delete(['no_ktp' => $primarykey]);
    }
}
