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
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        return view('Penjual.inputMobil', compact('user','penjual'));
    }

    public function insertMobil(Request $request)
    {
        $this->validate($request, [
            'tipe_mobil' => 'required',
            'merek' => 'required',
            'model' => 'required',
            'harga' => 'required',
            'bahan_bakar' => 'required',
            'desc' => 'required',
            'tahun' => 'required',
            'gambar' => 'required',
        ],
        [
            'tipe_mobil.required' => 'Tipe Mobil Tidak Boleh Kosong !',
            'merek.required' => 'Merek Tidak Boleh Kosong !',
            'model.required' => 'Model Tidak Boleh Kosong !',
            'harga.required' => 'Harga Tidak Boleh Kosong !',
            'bahan_bakar.required' => 'Bahan Bakar Tidak Boleh Kosong !',
            'no_hp.required' => 'No HP Tidak Boleh Kosong !',
            'desc.required' => 'Deskripsi Tidak Boleh Kosong !',
            'tahun.required' => 'Tahun Tidak Boleh Kosong !',
            'gambar.required' => 'Gambar Tidak Boleh Kosong !',
        ]);

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
        )->with('addMobil','Mobil Berhasil Ditambahkan');
    }

    public function deleteMobil(Request $request)
    {
        Mobil::destroy($request->mobil_id);
        return redirect()->action(
            [PenjualController::class, 'CookiesPenjual'],
            ['id' => $request->penjual_id]
        )->with('deleteMobil','Mobil Berhasil Dihapus');
    }

    public function editMobil($id, $moid)
    {
        $mobil = Mobil::where('id', $moid)->first()->getOriginal();
        $penjual = Penjual::find($id)->first()->getOriginal();
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        return view('Penjual.editMobil', compact('penjual', 'mobil','user'));
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
        )->with('updateMobil','Mobil Berhasil Diupdate');
    }

    public function getHistory($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        $history = HistoryTransaksi::where('penjual_id', $id)->get();
        return view('Penjual.history', compact('user', 'penjual', 'history'));
    }
}
