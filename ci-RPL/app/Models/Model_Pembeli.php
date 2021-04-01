<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pembeli extends Model
{

    public function getPembeli()
    {
        #Menampilkan Tabel Pembeli
        return $this->db->table('pembeli')
        ->join('user','pembeli.id_pembeli=user.id_pembeli')
        ->get()->getResultArray();
    }
}
