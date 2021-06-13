@extends('Penjual.master')

@section('content')

<div class="container">
    <form action="/insertMobil" method="POST" enctype="multipart/form-data">
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
            <label for="merek">merek</label>
            <input type="text" class="form-control" name="merek" id="merek" placeholder="Masukkan merek">
            @error('merek')
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
            <label for="tahun">tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan tahun">
            @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bahan_bakar">bahan_bakar</label>
            <input type="text" class="form-control" name="bahan_bakar" id="bahan_bakar" placeholder="Masukkan bahan_bakar">
            @error('bahan_bakar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">desc</label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Masukkan desc">
            @error('desc')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Masukkan gambar">
            @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan harga">
            @error('harga')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="penjual_id" id="penjual_id" value="{{$penjual['id']}}">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection