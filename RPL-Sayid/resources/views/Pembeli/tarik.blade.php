@extends('Pembeli.master')

@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="register-form">
                    <h2>Tarik Saldo</h2>
                    <h3>Saldo saat ini @currency($user['saldo'])</h3>
                    <br>
                    <form action="/tariksaldo" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="saldo" id="saldo">
                            @error('saldo')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="hidden" value="{{$user['id']}}" name="id" id="id">
                        <button type="submit" class="site-btn register-btn">Tarik Saldo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection