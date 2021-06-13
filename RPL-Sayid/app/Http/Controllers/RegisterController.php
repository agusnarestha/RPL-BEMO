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
            'no_ktp' => 'required|unique:user|min:16|max:16',
            'username' => 'required|unique:user',
            'password' => 'required',
            'email' => 'required',
            'no_hp' => 'required|min:10|max:13',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'isPembeli' => 'required'
        ],
        [
            'nama.required' => 'Nama Tidak Boleh Kosong !',
            'no_ktp.required' => 'No KTP Tidak Boleh Kosong !',
            'username.required' => 'Username Tidak Boleh Kosong !',
            'password.required' => 'Password Tidak Boleh Kosong !',
            'email.required' => 'Email Tidak Boleh Kosong !',
            'no_hp.required' => 'No HP Tidak Boleh Kosong !',
            'jenis_kelamin.required' => 'Jenis Kelamin Tidak Boleh Kosong !',
            'alamat.required' => 'Alamat Tidak Boleh Kosong !',
            'isPembeli.required' => 'Register Sebagai Tidak Boleh Kosong !',
            'no_ktp.unique' =>'No KTP Telah Digunakan',
            'no_ktp.min' => 'No KTP Tidak Valid',
            'no_ktp.max' => 'No KTP Tidak Valid',
            'no_hp.min' => 'No Hp Tidak Valid',
            'no_hp.max' => 'No Hp Tidak Valid',
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
            'saldo' => 0,
            'isPembeli' => $isPembeli
        ]);

        return redirect('/');
    }
}
