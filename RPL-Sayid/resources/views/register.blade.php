@extends('master')

@section('content')

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="/store" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no_ktp">no_ktp</label>
                                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Masukkan no_ktp">
                                @error('no_ktp')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                                @error('username')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan password">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="judul">email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email">
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no_hp</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan no_hp">
                                @error('no_hp')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                                @error('nama')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis_kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan jenis_kelamin">
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                                @error('alamat')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="isPembeli">isPembeli</label>
                                <input type="text" class="form-control" name="isPembeli" id="isPembeli" placeholder="Masukkan isPembeli">
                                @error('isPembeli')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->


@endsection
