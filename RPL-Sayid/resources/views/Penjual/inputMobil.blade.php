@extends('Penjual.master')

@section('content')

<div class="container">
    <form action="/insertMobil" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tipe_mobil">Tipe Mobil</label>
            <select id="tipe_mobil" class="form-control" name="tipe_mobil">
                <option>SUV</option>
                <option>Sedan</option>
                <option>LCGC</option>
            </select>
            @error('tipe_mobil')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="merek">Merek</label>
            <input type="text" class="form-control" name="merek" id="merek" placeholder="Masukkan Merek">
            @error('merek')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Masukkan Model">
            @error('model')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
            @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bahan_bakar">Bahan Bakar</label>
            <select id="bahan_bakar" class="form-control" name="bahan_bakar">
                <option>Bensin</option>
                <option>Diesel</option>
            </select>
            @error('bahan_bakar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea class="form-control" name="desc" id="desc" placeholder="Masukkan Deskripsi" rows="3"></textarea>
            @error('desc')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Masukkan Gambar">
            @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
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