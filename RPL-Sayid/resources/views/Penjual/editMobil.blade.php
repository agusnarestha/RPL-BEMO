@extends('Penjual.master')

@section('content')
<div class="container">
    <form action="/updateMobil" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tipe_mobil">Tipe Mobil</label>
            <select id="tipe_mobil" class="form-control" name="tipe_mobil" value="{{$mobil['tipe_mobil']}}">
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
            <input type="text" class="form-control" name="merek" id="merek" value="{{$mobil['merek']}}">
            @error('merek')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" value="{{$mobil['model']}}">
            @error('model')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun" value="{{$mobil['tahun']}}">
            @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bahan_bakar">Bahan Bakar</label>
            <select id="bahan_bakar" class="form-control" name="bahan_bakar" value="{{$mobil['bahan_bakar']}}">
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
            <input type="text" class="form-control" name="desc" id="desc" value="{{$mobil['desc']}}"></input>
            @error('desc')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$mobil['harga']}}">
            @error('harga')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="mobil_id" id="mobil_id" value="{{$mobil['id']}}">
        <input type="hidden" name="penjual_id" id="penjual_id" value="{{$penjual['id']}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection