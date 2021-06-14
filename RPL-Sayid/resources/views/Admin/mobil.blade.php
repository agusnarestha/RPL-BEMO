@extends('Admin.master')

@section('content')
<table style="width:100%">
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
        <td><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; widtd: 50px;"></td>
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
