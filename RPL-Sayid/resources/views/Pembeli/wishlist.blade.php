@extends('Pembeli.master')

@section('content')
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Tipe</th>
                                <th class="p-name">Model</th>
                                <th>Price</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td class="cart-pic first-row"><a href="/infomobil/{{$pembeli['id']}}/{{$d->mobil_id}}" style="color: black;"><img src="/img/{{$d->gambar}}" alt="" style="width: 40%;"></a></td>
                                <td class="cart-title first-row">
                                    <h5><a href="/infomobil/{{$pembeli['id']}}/{{$d->mobil_id}}" style="color: black;">{{$d->tipe_mobil}}</a></h5>
                                </td>
                                <td class="cart-title first-row">
                                    <h5><a href="/infomobil/{{$pembeli['id']}}/{{$d->mobil_id}}" style="color: black;">{{$d->model}}</a></h5>
                                </td>
                                <td class="total-price first-row"><a href="/infomobil/{{$pembeli['id']}}/{{$d->mobil_id}}" style="color: black;">Rp.{{$d->harga}}</a></td>
                                <td class="close-td first-row"><a href="/delwish/{{$pembeli['id']}}/{{$d->mobil_id}}" style="color: black;"><i class="ti-close"></i></a></td>
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