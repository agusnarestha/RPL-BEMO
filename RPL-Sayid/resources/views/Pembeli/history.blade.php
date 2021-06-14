@extends('Pembeli.master')

@section('content')
<!-- <div class="container mt-3 mb-3">
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
</div> -->

<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Type</th>
                                <th class="p-name">Brand</th>
                                <th class="p-name">Model</th>
                                <th class="p-name">Year</th>
                                <th class="p-name">Fuel</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $d)
                            <tr>
                                <td class="cart-pic first-row"><img src="/img/{{$d->gambar}}" alt="" style="width: 40%;"></td>
                                <td class="cart-title first-row">
                                    <h5>{{$d->tipe_mobil}}</h5>
                                </td>
                                <td class="cart-title first-row">
                                    <h5>{{$d->merek}}</h5>
                                </td>
                                <td class="cart-title first-row">
                                    <h5>{{$d->model}}</h5>
                                </td>
                                <td class="cart-title first-row">
                                    <h5>{{$d->tahun}}</h5>
                                </td>
                                <td class="cart-title first-row">
                                    <h5>{{$d->bahan_bakar}}</h5>
                                </td>
                                <td class="total-price first-row">Rp.{{$d->harga}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <a href="/pembeli/{{$pembeli['id']}}" class="proceed-btn">HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection