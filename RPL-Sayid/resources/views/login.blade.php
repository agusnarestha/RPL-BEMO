@extends('master')

@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="/logins" method="POST">
                        @csrf
                        <div class="form-group">
                            @if(session('faillogin'))
                            <div class="alert alert-danger">
                                {{ session('faillogin')}}
                            </div>
                            @endif
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                            @error('username')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="site-btn login-btn">Login</button>
                    </form>
                    <div class="switch-login">
                        <a href="/register" class="or-login">Buat Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection