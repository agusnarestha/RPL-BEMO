<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'penjual';
    protected $fillable = ['no_ktp','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
