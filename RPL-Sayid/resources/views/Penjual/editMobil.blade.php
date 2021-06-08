@extends('Penjual.master')

@section('content')

<div class="container">
    <form action="/updateMobil" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tipe_mobil">tipe_mobil</label>
            <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" value="{{$mobil['tipe_mobil']}}">
            @error('tipe_mobil')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="merek">merek</label>
            <input type="text" class="form-control" name="merek" id="merek" value="{{$mobil['merek']}}">
            @error('merek')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="model">model</label>
            <input type="text" class="form-control" name="model" id="model" value="{{$mobil['model']}}">
            @error('model')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bahan_bakar">bahan_bakar</label>
            <input type="text" class="form-control" name="bahan_bakar" id="bahan_bakar" value="{{$mobil['bahan_bakar']}}">
            @error('bahan_bakar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            @error('gambar')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
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