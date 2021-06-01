<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mobil;
use Auth;

class PenjualController extends Controller
{
    public function inputMobil(Request $request){
        Mobil::create([
            'tipe_mobil' => $request->tipe_mobil,
            'merek' => $request->merek,
            'model' => $request->model,
            'harga' => $request->harga,
            'penjual_id' => $request->penjual_id
        ]);
        // $user = User::where('username', $request->username)->first();
        // $user = $user->getOriginal();
    }
}
