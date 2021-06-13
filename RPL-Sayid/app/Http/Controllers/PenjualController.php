<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Penjual;
use App\Models\HistoryTransaksi;
use Auth;

class PenjualController extends Controller
{

    public function CookiesPenjual($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        $mobil = Mobil::where('penjual_id', $id)->get();
        return view('Penjual.index', compact('user', 'penjual', 'mobil'));
    }

    public function inputMobil($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        return view('Penjual.inputMobil', compact('penjual'));
    }

    public function insertMobil(Request $request)
    {
        $gambar = $request->gambar;
        $name_img = time() . ' - ' . $gambar->getClientOriginalName();
        Mobil::create([
            'tipe_mobil' => $request->tipe_mobil,
            'merek' => $request->merek,
            'model' => $request->model,
            'harga' => $request->harga,
            'bahan_bakar' => $request->bahan_bakar,
            'desc' => $request->desc,
            'tahun' => $request->tahun,
            'gambar' => $name_img,
            'penjual_id' => $request->penjual_id
        ]);
        $gambar->move('img', $name_img);
        return redirect()->action(
            [PenjualController::class, 'CookiesPenjual'],
            ['id' => $request->penjual_id]
        );
    }

    public function deleteMobil(Request $request)
    {
        Mobil::destroy($request->mobil_id);
        return redirect()->action(
            [PenjualController::class, 'CookiesPenjual'],
            ['id' => $request->penjual_id]
        );
    }

    public function editMobil($id, $moid)
    {
        $mobil = Mobil::where('id', $moid)->first()->getOriginal();
        $penjual = Penjual::find($id)->first()->getOriginal();
        return view('Penjual.editMobil', compact('penjual', 'mobil'));
    }

    public function updateMobil(Request $request)
    {
        $gambar = $request->foto;
        $mobil = Mobil::where('id', $request->mobil_id);
        if ($gambar != NULL) {
            $name_img = time() . ' - ' . $gambar->getClientOriginalName();
            $mobil->update([
                'tipe_mobil' => $request->tipe_mobil,
                'merek' => $request->merek,
                'model' => $request->model,
                'harga' => $request->harga,
                'bahan_bakar' => $request->bahan_bakar,
                'desc' => $request->desc,
                'tahun' => $request->tahun,
                'gambar' => $name_img
            ]);
            $gambar->move('img', $name_img);
        } else {
            $mobil->update([
                'tipe_mobil' => $request->tipe_mobil,
                'merek' => $request->merek,
                'model' => $request->model,
                'harga' => $request->harga,
                'bahan_bakar' => $request->bahan_bakar,
                'desc' => $request->desc,
                'tahun' => $request->tahun
            ]);
        }
        return redirect()->action(
            [PenjualController::class, 'CookiesPenjual'],
            ['id' => $request->penjual_id]
        );
    }

    public function getHistory($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        $history = HistoryTransaksi::where('penjual_id', $id)->get();
        return view('Penjual.history', compact('user', 'penjual', 'history'));
    }
}
