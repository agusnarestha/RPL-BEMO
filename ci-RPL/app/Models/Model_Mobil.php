<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Mobil extends Model
{

    public function getPembeli()
    {
        return $this->db->table('mobil')
            ->get()->getResultArray();
    }
}
