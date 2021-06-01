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

        $user = User::where('username',$request->username)->where('password',$request->password)->first();
        if($user == NULL){
            return view('login');
        }else{
            if($user['isPembeli']==TRUE){
                $pembeli = Pembeli::where('user_id',$user['id'])->first()->getOriginal();
                if($pembeli == NULL){
                    Pembeli::create([
                        'no_ktp' => $user['no_ktp'],
                        'user_id' => $user['id']
                    ]);
                    return view('Pembeli.index',compact('user'));
                }else{
                    return view('Pembeli.index',compact('user'));
                }
            }
            else{
                $penjual = Penjual::where('user_id',$user['id'])->first()->getOriginal();
                if($penjual == NULL){
                    Penjual::create([
                        'no_ktp' => $user['no_ktp'],
                        'user_id' => $user['id']
                    ]);
                    return view('Penjual.index',compact('user'));
                }else{
                    return view('Penjual.index',compact('user'));
                }
            }
        }
    }

    public function Cookies($id){
        $user = User::where('username', $id)->first();
        $user = $user->getOriginal();
    }
}
