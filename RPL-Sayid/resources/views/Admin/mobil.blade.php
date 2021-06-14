@extends('Admin.master')

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
    @foreach ($mobil as $m)
    <tr>
        <th><img src="/img/{{$m->gambar}}" alt="" style="height: 50px; width: 50px;"></th>
        <th>{{$m->tipe_mobil}}</th>
        <th>{{$m->merek}}</th>
        <th>{{$m->model}}</th>
        <th>{{$m->tahun}}</th>
        <th>{{$m->bahan_bakar}}</th>
        <th>{{$m->harga}}</th>
        <th>
            <form action="">
                <button class="btn btn-secondary">Edit</button>
            </form>
            <form action="/deleteMobil" method="post">
                @csrf
                <input type="hidden" name="penjual_id" id="penjual_id" value="">
                <input type="hidden" name="mobil_id" id="mobil_id" value="">
                <button class="btn btn-danger">Delete</button>
            </form>
        </th>
    </tr>
    @endforeach
</table>
@endsection