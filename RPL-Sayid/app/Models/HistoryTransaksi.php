<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTransaksi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'historytransaksi';
    protected $fillable = ['tipe_mobil', 'merek', 'model', 'harga', 'penjual_id', 'pembeli_id', 'bahan_bakar'];
}
