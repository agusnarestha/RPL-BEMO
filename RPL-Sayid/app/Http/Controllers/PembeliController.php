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

    public function topup($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        return view('Pembeli.topup', compact('user', 'pembeli'));
    }

    public function insertSaldo(Request $request)
    {
        $flight = User::find($request->id);
        $flight->saldo = $request->saldo;
        $flight->save();
        $pembeli = Pembeli::where('user_id', $request->id)->first()->getOriginal();
        return redirect()->action(
            [PembeliController::class, 'CookiesPembeli'],
            ['id' => $pembeli['id']]
        );
    }

    public function beliMobil(Request $request)
    {
        $pembeli = Pembeli::where('id', $request->pembeli)->first()->getOriginal();
        $mobil = Mobil::where('id', $request->mobil)->first()->getOriginal();
    }
}
