<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;

class RegisterController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_ktp' => 'required|unique:user',
            'username' => 'required|unique:user',
            'password' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'isPembeli' => 'required'
        ]);

        if ($request->isPembeli == 'Pembeli') {
            $isPembeli = TRUE;
        } else {
            $isPembeli = FALSE;
        }

        User::create([
            'nama' => $request->nama,
            'no_ktp' => $request->no_ktp,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'isPembeli' => $isPembeli
        ]);

        return redirect('/');
    }
}
