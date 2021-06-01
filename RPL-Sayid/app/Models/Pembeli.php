<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pembeli';
    protected $fillable = ['no_ktp','user_id'];
}
