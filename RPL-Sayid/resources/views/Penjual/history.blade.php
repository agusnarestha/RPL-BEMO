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
        <td><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></td>
        <td>{{$m->tipe_mobil}}</td>
        <td>{{$m->merek}}</td>
        <td>{{$m->model}}</td>
        <td>{{$m->tahun}}</td>
        <td>{{$m->bahan_bakar}}</td>
        <td>@currency($m['harga'])</td>
    </tr>
    @endforeach
</table>
@endsection