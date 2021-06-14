@extends('Penjual.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Saldo saat ini @currency($user['saldo'])</h3>
            <br>
            <form action="/tariksaldoPenjual" method="post">
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
                <button type="submit" class="btn btn-dark">Tarik Saldo</button>
            </form>
        </div>
    </div>
</div>
@endsection