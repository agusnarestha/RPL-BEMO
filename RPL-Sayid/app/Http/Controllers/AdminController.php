<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use App\Models\Penjual;
use App\Models\Pembeli;
use App\Models\HistoryTransaksi;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function CookiesAdmin()
    {
        $user = User::get();
        $countuser = $user->count();
        $countmobil = Mobil::get()->count();
        $counttransaksi = HistoryTransaksi::get()->count();
        return view('Admin.index', compact('user','countmobil','countuser','counttransaksi'));
    }

    public function getMobil()
    {
        $mobil = Mobil::get();
        return view('Admin.mobil', compact('mobil'));
    }

    public function getHistory()
    {
        $history = HistoryTransaksi::get();
        return view('Admin.history', compact('history'));
    }

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('Admin.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'password' => 'required',
                'email' => 'required',
                'no_hp' => 'required',
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
            ],
            [
                'password.required' => 'Password Tidak Boleh Kosong !',
                'email.required' => 'Email Tidak Boleh Kosong !',
                'no_hp.required' => 'No Hp Bakar Tidak Boleh Kosong !',
                'nama.required' => 'Nama Tidak Boleh Kosong !',
                'jenis_kelamin.required' => 'Jenis Kelamin Tidak Boleh Kosong !',
                'alamat.required' => 'Alamat Tidak Boleh Kosong !',
                'username.unique' => 'Username Telah Digunakan !',
            ]
        );
        $user = User::where('id', $request->id) -> first();
        $penjual = Penjual::where('user_id', $user->id)->first();
        $pembeli = Pembeli::where('user_id', $user->id)->first();
        $user->update([
            'password' => $request->password,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);
        if ($user['isPembeli'] == FALSE ){
            $penjual->update(
                ['nama' => $request->nama]);
        }else{
            $pembeli->update(
                ['nama' => $request->nama]);
        }

        return redirect()->action(
            [AdminController::class, 'CookiesAdmin']
        )->with('updateUser', 'User Berhasil Diupdate');
    }

    public function deleteUser(Request $request)
    {
        User::destroy($request->id);
        return redirect()->action(
            [AdminController::class, 'CookiesAdmin']
        )->with('deleteUser', 'User Berhasil Dihapus');
    }

}
