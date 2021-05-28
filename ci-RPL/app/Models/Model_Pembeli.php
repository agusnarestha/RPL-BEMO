<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pembeli extends Model
{

    public function getPembeli() #untuk meng get data dari tabel user dalam bentuk array
    {
        return $this->db->table('user')
            ->join('pembeli', 'pembeli.no_ktp=user.no_ktp')
            ->get()->getResultArray();
    }

    public function getRowPembeli($no_ktp) #untuk meng get suatu row dimana no_ktp = $no_ktp
    {
        $query = $this->db->query("SELECT * FROM user WHERE no_ktp='$no_ktp'");
        return $query->getRow();
    }

    public function addPembeli($data) #untuk menginsert $data ke tabel user dan juga pembeli dengan id_pembeli auto increment
    {
        $this->db->table('user')->insert($data);
        $no_ktp = $data['no_ktp'];
        $this->db->query("INSERT INTO pembeli (id_pembeli, no_ktp) VALUES (NULL, '$no_ktp')");
    }
}
