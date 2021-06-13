@extends('Penjual.master')

@section('content')
<table style="width:100%">
    <tr>
        <th>gambar</th>
        <th>tipe_mobil</th>
        <th>merek</th>
        <th>model</th>
        <th>tahun</th>
        <th>bahan_bakar</th>
        <th>harga</th>
    </tr>
    @foreach ($history as $m)
    <tr>
        <th><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></th>
        <th>{{$m->tipe_mobil}}</th>
        <th>{{$m->merek}}</th>
        <th>{{$m->model}}</th>
        <th>{{$m->tahun}}</th>
        <th>{{$m->bahan_bakar}}</th>
        <th>{{$m->harga}}</th>
    </tr>
    @endforeach
</table>
@endsection