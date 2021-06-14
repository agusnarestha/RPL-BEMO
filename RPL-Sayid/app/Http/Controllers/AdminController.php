<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use App\Models\HistoryTransaksi;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function CookiesAdmin()
    {
        $user = User::get();
        return view('Admin.index', compact('user'));
    }

    public function getMobil()
    {
        $mobil = Mobil::get();
        return view('Admin.mobil', compact('mobil'));
    }

    public function getHistory()
    {
        $data = Mobil::join('wishlist', 'mobil.id', '=', 'wishlist.mobil_id')->get();
        $data = Mobil::join('wishlist', 'mobil.id', '=', 'wishlist.mobil_id')->get();
        return view('Admin.history', compact('history'));
    }
}
