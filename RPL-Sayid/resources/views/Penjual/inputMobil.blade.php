@extends('Penjual.master')

@section('content')

<div class="container">
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tipe_mobil">tipe_mobil</label>
            <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" placeholder="Masukkan tipe_mobil">
            @error('tipe_mobil')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="model">model</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Masukkan model">
            @error('model')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <textarea type="text" class="form-control" name="harga" id="harga"></textarea>
            @error('harga')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
