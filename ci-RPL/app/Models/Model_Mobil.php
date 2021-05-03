<?php namespace App\Models;

use CodeIgniter\Model;

class Model_Mobil extends Model
{

    protected $table = 'mobil';
    protected $allowedFields = ['id_mobil','tipe_mobil','merek','model','harga','stok','no_ktp','transmisi','bahan_bakar','tahun_perakitan'];

    
}
