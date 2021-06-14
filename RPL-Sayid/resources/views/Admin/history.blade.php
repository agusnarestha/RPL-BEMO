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
    @foreach ($history as $d)
    <tr>
        <th><img src="/img/{{$d['gambar']}}" alt="" style="height: 50px; width: 50px;"></th>
        <th>{{$d['tipe_mobil']}}</th>
        <th>{{$d['merek']}}</th>
        <th>{{$d['model']}}</th>
        <th>{{$d['tahun']}}</th>
        <th>{{$d['bahan_bakar']}}</th>
        <th>{{$d['harga']}}</th>
        <th>
            <form action="">
                <button class="btn btn-secondary">Edit</button>
            </form>
            <form action="" method="post">
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