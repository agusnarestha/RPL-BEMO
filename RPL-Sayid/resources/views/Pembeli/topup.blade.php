@extends('Pembeli.master')

@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Top Up</h2>
                    <form action="/insertsaldo" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="saldo">saldo</label>
                            <input type="text" class="form-control" name="saldo" id="saldo" placeholder="Masukkan saldo">
                            @error('saldo')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="hidden" value="{{$user['id']}}" name="id" id="id">
                        <button type="submit" class="site-btn register-btn">Top Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection