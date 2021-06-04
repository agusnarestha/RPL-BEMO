<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Penjual;
use Auth;

class PenjualController extends Controller
{

    public function CookiesPenjual($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        $user = User::where('id', $penjual['user_id'])->first()->getOriginal();
        return view('Penjual.index', compact('user', 'penjual'));
    }

    public function inputMobil($id)
    {
        $penjual = Penjual::where('id', $id)->first()->getOriginal();
        return view('Penjual.inputMobil', compact('penjual'));
    }

    public function insertMobil(Request $request)
    {
        Mobil::create([
            'tipe_mobil' => $request->tipe_mobil,
            'merek' => $request->merek,
            'model' => $request->model,
            'harga' => $request->harga,
            'penjual_id' => $request->penjual_id
        ]);
        return redirect()->action(
            [PenjualController::class, 'CookiesPenjual'],
            ['id' => $request->penjual_id]
        );
    }
}
