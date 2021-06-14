@extends('Admin.master')

@section('content')
<div class="container">
    <form action="/updateUser/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="no_ktp">No KTP</label>
            <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="{{$user['no_ktp']}}" readonly>
            @error('no_ktp')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="{{$user['username']}}" readonly>
            @error('username')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password" value="{{$user['password']}}">
            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$user['email']}}">
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$user['no_hp']}}">
            @error('no_hp')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{$user['nama']}}">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                <option>{{$user['jenis_kelamin']}}</option>
                <option>@if($user->jenis_kelamin === "Laki-Laki")Perempuan @else Laki-Laki @endif</option>
            </select>
            @error('jenis_kelamin')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$user['alamat']}}">
            @error('alamat')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="saldo">Saldo</label>
            <input type="text" class="form-control" name="saldo" id="saldo" placeholder="{{$user['saldo']}}" readonly>
            @error('saldo')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isPembeli">Sebagai</label>
            <input type="text" class="form-control" name="isPembeli" id="isPembeli"
            placeholder="@if($user->isPembeli === 0)Penjual @else Pembeli @endif" readonly>
            @error('isPembeli')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
