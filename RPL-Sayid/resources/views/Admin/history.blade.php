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
    @foreach ($history as $d)
    <tr>
        <td><img src="/img/{{$d['gambar']}}" alt="" style="height: 50px; widtd: 50px;"></td>
        <td>{{$d['tipe_mobil']}}</td>
        <td>{{$d['merek']}}</td>
        <td>{{$d['model']}}</td>
        <td>{{$d['tahun']}}</td>
        <td>{{$d['bahan_bakar']}}</td>
        <td>@currency($d['harga'])</td>
    </tr>
    @endforeach
</table>
@endsection
