@extends('Penjual.master')

@section('content')
<table style="width:100%">
    <tr>
        <th>tipe_mobil</th>
        <th>merek</th>
        <th>model</th>
        <th>bahan_bakar</th>
        <th>harga</th>
    </tr>
    @foreach ($history as $m)
    <tr>
        <th>{{$m->tipe_mobil}}</th>
        <th>{{$m->merek}}</th>
        <th>{{$m->model}}</th>
        <th>{{$m->bahan_bakar}}</th>
        <th>{{$m->harga}}</th>
    </tr>
    @endforeach
</table>
@endsection