<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->where('password', $request->password)->first()->getOriginal();
        if ($user == NULL) {
            return view('login');
        } else {
            if ($user['isPembeli'] == TRUE) {
                $x = Pembeli::where('user_id', $user['id'])->first();
                if ($x == NULL) {
                    Pembeli::create([
                        'no_ktp' => $user['no_ktp'],
                        'user_id' => $user['id']
                    ]);
                    $pembeli = Pembeli::where('user_id', $user['id'])->first()->getOriginal();
                    return redirect()->action(
                        [PembeliController::class, 'CookiesPembeli'],
                        ['id' => $pembeli['id']]
                    );
                } else {
                    $pembeli = Pembeli::where('user_id', $user['id'])->first()->getOriginal();
                    return redirect()->action(
                        [PembeliController::class, 'CookiesPembeli'],
                        ['id' => $pembeli['id']]
                    );
                }
            } else {
                $x = Penjual::where('user_id', $user['id'])->first();
                if ($x == NULL) {
                    Penjual::create([
                        'no_ktp' => $user['no_ktp'],
                        'user_id' => $user['id']
                    ]);
                    $penjual = Penjual::where('user_id', $user['id'])->first()->getOriginal();
                    return redirect()->action(
                        [PenjualController::class, 'CookiesPenjual'],
                        ['id' => $penjual['id']]
                    );
                } else {
                    $penjual = Penjual::where('user_id', $user['id'])->first()->getOriginal();
                    return redirect()->action(
                        [PenjualController::class, 'CookiesPenjual'],
                        ['id' => $penjual['id']]
                    );
                }
            }
        }
    }
}