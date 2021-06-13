@extends('Pembeli.mobil')

@section('mobil')
<div class="col-lg-9 order-1 order-lg-2">
    <div class="product-list">
        <div class="row">
            @foreach ($mobil as $m)
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="/img/{{$m->gambar}}" alt="" style="height: 250px; width: 50px;">
                        <div class="icon">
                            <a href="{{ url('/wishlist/'.$pembeli['id'].'/'.$m->id) }}" style="color:black;"><i class="icon_heart_alt"></i></a>
                        </div>
                        <ul>
                            <li class="quick-view"><a href="{{ url('/infomobil/'.$pembeli['id'].'/'.$m->id) }}">More</a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">{{$m->tipe_mobil}}</div>
                        <a href="#">
                            <h5>{{$m->model}}</h5>
                        </a>
                        <div class="product-price">
                            @currency($m['harga'])
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
