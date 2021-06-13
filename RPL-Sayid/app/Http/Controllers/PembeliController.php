<?php

namespace App\Http\Controllers;

use App\Models\HistoryTransaksi;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function CookiesPembeli($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $wishlist = Wishlist::where('pembeli_id', $pembeli['id'])->get();
        return view('Pembeli.index', compact('user', 'pembeli', 'wishlist'));
    }

    public function getMobil($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $mobil = Mobil::all();
        $wishlist = Wishlist::where('pembeli_id', $pembeli['id'])->get();
        return view('Pembeli.list', compact('user', 'pembeli', 'mobil', 'wishlist'));
    }

    public function infoMobil($id, $moid)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $mobil = Mobil::where('id', $moid)->first()->getOriginal();
        $penjual1 = Penjual::where('id', $mobil['penjual_id'])->first()->getOriginal();
        $penjual = User::where('id', $penjual1['user_id'])->first()->getOriginal();
        $wishlist = Wishlist::where('pembeli_id', $pembeli['id'])->get();
        return view('Pembeli.inmobil', compact('user', 'pembeli', 'mobil', 'penjual', 'wishlist'));
    }

    public function topup($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $wishlist = Wishlist::where('pembeli_id', $pembeli['id'])->get();
        return view('Pembeli.topup', compact('user', 'pembeli', 'wishlist'));
    }

    public function insertSaldo(Request $request)
    {
        $flight = User::find($request->id);
        $flight->saldo = $flight->saldo + $request->saldo;
        $flight->save();
        $pembeli = Pembeli::where('user_id', $request->id)->first()->getOriginal();
        return redirect()->action(
            [PembeliController::class, 'CookiesPembeli'],
            ['id' => $pembeli['id']]
        )->with('insertSaldo','Saldo Berhasil Ditambahkan');
    }

    public function checkout($id, $moid)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $mobil = Mobil::where('id', $moid)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $wishlist = Wishlist::where('pembeli_id', $pembeli['id'])->get();
        return view('Pembeli.checkout', compact('mobil', 'pembeli', 'user', 'wishlist'));
    }

    public function belimobil(Request $request)
    {
        $mobil = Mobil::find($request->mobil_id)->first()->getOriginal();
        $pembeli = Pembeli::find($request->pembeli_id)->first()->getOriginal();
        $penjual = Penjual::find($mobil['penjual_id'])->first()->getOriginal();

        $flight = User::find($pembeli['user_id']);
        if ($flight->saldo < $mobil['harga']) {
            return redirect()->action(
                [PembeliController::class, 'topup'],
                ['id' => $pembeli['id']]
            )->with('kurangSaldo','Saldo Anda Tidak Cukup !!!');
        } else {
            $flight->saldo = $flight->saldo - $mobil['harga'];
            $flight->save();

            $flight2 = User::find($penjual['user_id']);
            $flight2->saldo = $flight2->saldo + $mobil['harga'];
            $flight2->save();
        }

        HistoryTransaksi::create([
            'tipe_mobil' => $mobil['tipe_mobil'],
            'merek' => $mobil['merek'],
            'model' => $mobil['model'],
            'bahan_bakar' => $mobil['bahan_bakar'],
            'harga' => $mobil['harga'],
            'tahun' => $mobil['tahun'],
            'gambar' => $mobil['gambar'],
            'penjual_id' => $mobil['penjual_id'],
            'pembeli_id' => $request->pembeli_id
        ]);

        Mobil::destroy($request->mobil_id);

        return redirect()->action(
            [PembeliController::class, 'CookiesPembeli'],
            ['id' => $request->pembeli_id]
        )->with('beliMobil','Mobil Berhasil Dibeli');
    }

    public function getHistory($id)
    {
        $pembeli = Pembeli::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $pembeli['user_id'])->first()->getOriginal();
        $history = HistoryTransaksi::where('pembeli_id', $id)->get();
        return view('Pembeli.history', compact('user', 'pembeli', 'history'));
    }

    public function addWishlist($id, $moid)
    {
        $x = Wishlist::where('pembeli_id', $id)->where('mobil_id', $moid)->first();
        if ($x == NULL) {
            Wishlist::create([
                'pembeli_id' => $id,
                'mobil_id' => $moid
            ]);
        } else {
            $x->delete();
        }
        return redirect()->action(
            [PembeliController::class, 'getMobil'],
            ['id' => $id]
        );
    }
}
