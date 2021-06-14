@extends('Admin.master')

@section('content')
<table style="width:100%">
    <tr>
        <th>no_ktp</th>
        <th>username</th>
        <th>password</th>
        <th>email</th>
        <th>no_hp</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>alamat</th>
        <th>saldo</th>
        <th>sebagai</th>
    </tr>
    @foreach ($user as $u)
    <tr>
        <th>{{$u->no_ktp}}</th>
        <th>{{$u->username}}</th>
        <th>{{$u->password}}</th>
        <th>{{$u->email}}</th>
        <th>{{$u->no_hp}}</th>
        <th>{{$u->nama}}</th>
        <th>{{$u->jenis_kelamin}}</th>
        <th>{{$u->alamat}}</th>
        <th>{{$u->saldo}}</th>
        <th>
            @if ($u->isPembeli === 0)
            Penjual
            @else
            Pembeli
            @endif
        </th>
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