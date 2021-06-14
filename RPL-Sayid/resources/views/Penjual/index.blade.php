@extends('Penjual.master')

@section('content')
<h1>Selamat Datang {{$user['nama']}}!</h1>
@if(session('addMobil'))
<div class="alert alert-success">
    {{ session('addMobil')}}
</div>
@endif
@if(session('deleteMobil'))
<div class="alert alert-success">
    {{ session('deleteMobil')}}
</div>
@endif
@if(session('updateMobil'))
<div class="alert alert-success">
    {{ session('updateMobil')}}
</div>
@endif
@if(session('tarikSaldo'))
<div class="alert alert-success">
    {{ session('tarikSaldo')}}
</div>
@elseif(session('gagalSaldo'))
<div class="alert alert-danger">
    {{ session('gagalSaldo')}}
</div>
@endif
<table class="mt-3" style="width:100%">
    <tr>
        <th>Gambar</th>
        <th>Tipe Mobil</th>
        <th>Merek</th>
        <th>Model</th>
        <th>Tahun</th>
        <th>Bahan Bakar</th>
        <th>Harga</th>
    </tr>
    @foreach ($mobil as $m)
    <tr>
        <td><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></td>
        <td>{{$m->tipe_mobil}}</td>
        <td>{{$m->merek}}</td>
        <td>{{$m->model}}</td>
        <td>{{$m->tahun}}</td>
        <td>{{$m->bahan_bakar}}</td>
        <td>@currency($m->harga)</td>
        <td>
            <form action="{{ url('/editMobil/'.$penjual['id'].'/'.$m->id) }}">
                <button class="btn btn-secondary">Edit</button>
            </form>
            <form action="/deleteMobil" method="post">
                @csrf
                <input type="hidden" name="penjual_id" id="penjual_id" value="{{$penjual['id']}}">
                <input type="hidden" name="mobil_id" id="mobil_id" value="{{$m->id}}">
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection