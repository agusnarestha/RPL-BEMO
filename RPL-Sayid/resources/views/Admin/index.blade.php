@extends('Admin.master')

@section('content')

<div class="row mt-3">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Jumlah User</span>
          <span class="info-box-number">
            {{$countuser}}
            <small></small>
          </span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-car"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Mobil</span>
            <span class="info-box-number">
              {{$countmobil}}
              <small></small>
            </span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comment-dollar"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Jumlah Transaksi</span>
            <span class="info-box-number">
                {{$counttransaksi}}
              <small></small>
            </span>
          </div>
        </div>
      </div>
</div>

@if(session('updateUser'))
<div class="alert alert-success">
    {{ session('updateUser')}}
</div>
@endif
@if(session('deleteUser'))
<div class="alert alert-success">
    {{ session('deleteUser')}}
</div>
@endif
<table class="mt-3"style="width:100%">
    <tr>
        <th>No KTP</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Saldo</th>
        <th>Sebagai</th>
    </tr>
    @foreach ($user as $u)
    <tr>
        <td>{{$u->no_ktp}}</td>
        <td>{{$u->username}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->no_hp}}</td>
        <td>{{$u->nama}}</td>
        <td>{{$u->jenis_kelamin}}</td>
        <td>{{$u->alamat}}</td>
        <td>@currency($u['saldo'])</td>
        <td>
            @if ($u->isPembeli === 0)
            Penjual
            @else
            Pembeli
            @endif
        </td>
        <td>
            <form action="/editUser/{{$u->id}}">
                <button class="btn btn-secondary">Edit</button>
            </form>
        </td>
        <td>
            <form action="/deleteUser/" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$u['id']}}">
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </td>
    @endforeach
</table>
@endsection
