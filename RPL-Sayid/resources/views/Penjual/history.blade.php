@extends('Penjual.master')

@section('content')
<table style="width:100%">
    <tr>
        <th>Gambar</th>
        <th>Tipe</th>
        <th>Merek</th>
        <th>Model</th>
        <th>Tahun</th>
        <th>Bahan Bakar</th>
        <th>Pembeli</th>
        <th>Harga</th>
    </tr>
    @foreach ($history as $m)
    <tr>
        <td><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></td>
        <td>{{$m->tipe_mobil}}</td>
        <td>{{$m->merek}}</td>
        <td>{{$m->model}}</td>
        <td>{{$m->tahun}}</td>
        <td>{{$m->bahan_bakar}}</td>
        <td>{{$m->nama}}</td>
        <td>@currency($m['harga'])</td>
    </tr>
    @endforeach
</table>
@endsection