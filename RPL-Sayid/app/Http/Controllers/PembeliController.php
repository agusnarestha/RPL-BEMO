<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function CookiesPembeli($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        return view('Pembeli.index', compact('user', 'pembeli'));
    }

    public function getMobil($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $mobil = Mobil::all();
        return view('Pembeli.list', compact('user', 'pembeli', 'mobil'));
    }

    public function infoMobil($id, $moid)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $mobil = Mobil::where('id', $id)->first()->getOriginal();
        return view('Pembeli.inmobil', compact('user', 'pembeli', 'mobil'));
    }
}
