<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user';
    protected $fillable = ['nama', 'no_ktp', 'username', 'password', 'email', 'no_hp', 'jenis_kelamin', 'alamat', 'saldo', 'isPembeli'];

    public function penjual()
    {
        return $this->hasOne('App\Penjual');
    }
}
