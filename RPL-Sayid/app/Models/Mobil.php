<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mobil';
    protected $fillable = ['tipe_mobil', 'merek', 'model', 'harga', 'penjual_id', 'gambar', 'bahan_bakar', 'desc', 'tahun'];
}
