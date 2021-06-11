@extends('Pembeli.master')

@section('content')
@foreach ($history as $m)
<tr>
    <th><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></th>
    <th>{{$m->tipe_mobil}}</th>
    <th>{{$m->merek}}</th>
    <th>{{$m->model}}</th>
    <th>{{$m->bahan_bakar}}</th>
    <th>{{$m->harga}}</th>
    <th>
        <form action="{{ url('/editMobil/'.$penjual['id'].'/'.$m->id) }}">
            <button class="btn btn-secondary">Edit</button>
        </form>
        <form action="/deleteMobil" method="post">
            @csrf
            <input type="hidden" name="penjual_id" id="penjual_id" value="{{$penjual['id']}}">
            <input type="hidden" name="mobil_id" id="mobil_id" value="{{$m->id}}">
            <button class="btn btn-danger">Delete</button>
        </form>
    </th>
</tr>
@endforeach
@endsection