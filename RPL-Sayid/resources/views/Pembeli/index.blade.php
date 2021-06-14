@extends('Pembeli.master')

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{url('/img/mobil2.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>SUV</span>
                        <h1>Mercedes GLE</h1>
                        <p>From the infamous S-Class to the powerful GLS, this brand has plenty of vehicles that gives luxury vehicle shoppers here in Peoria an excellent driving experience</p>
                        <a href="{{ url('/mobil/'.$pembeli['id']) }}" class="primary-btn">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{url('/img/mobil3.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Sedan</span>
                        <h1>Hyundai Azera</h1>
                        <p>“New Thinking, New Possibilities” is the current Hyundai Motor Company slogan, chosen to align with the name and the overall company mission</p>
                        <a href="{{ url('/mobil/'.$pembeli['id']) }}" class="primary-btn">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="{{url('img/women-large1.jpg')}}">
                    <h2 style="background-color: rgba(0, 0, 0, 0.3);">SUV</h2>
                    <a href="/mobil/{{$pembeli['id']}}/SUV">Telusuri</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="product-slider owl-carousel">
                    @foreach ($suv as $s)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="/img/{{$s->gambar}}" alt="" style="height: 360px; width: 20px;">
                            <div class="icon">
                                <a href="{{ url('/wishlist/'.$pembeli['id'].'/'.$s->id) }}" style="color:black;"><i class="icon_heart_alt"></i></a>
                            </div>
                            <ul>
                                <li class="quick-view"><a href="{{ url('/infomobil/'.$pembeli['id'].'/'.$s->id) }}">Telusuri</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$s->tipe_mobil}}</div>
                            <a href="{{ url('/infomobil/'.$pembeli['id'].'/'.$s->id) }}">
                                <h5>{{$s->model}}</h5>
                            </a>
                            <div class="product-price">
                                @currency($s['harga'])
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{url('img/banner-3.jpg')}}" alt="">
                    <div class="inner-text">
                        <a href="/mobil/{{$pembeli['id']}}/SUV">
                            <h4>SUV</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{url('img/banner-2.jpg')}}" alt="">
                    <div class="inner-text">
                        <a href="/mobil/{{$pembeli['id']}}/Sedan">
                            <h4>Sedan</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{url('img/banner-1.jpg')}}" alt="">
                    <div class="inner-text">
                        <a href="/mobil/{{$pembeli['id']}}/LCGC">
                            <h4>LCGC</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-slider owl-carousel">
                    @foreach ($sedan as $s)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="/img/{{$s->gambar}}" alt="" style="height: 360px; width: 20px;">
                            <div class="icon">
                                <a href="{{ url('/wishlist/'.$pembeli['id'].'/'.$s->id) }}" style="color:black;"><i class="icon_heart_alt"></i></a>
                            </div>
                            <ul>
                                <li class="quick-view"><a href="{{ url('/infomobil/'.$pembeli['id'].'/'.$s->id) }}">Telusuri</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$s->tipe_mobil}}</div>
                            <a href="{{ url('/infomobil/'.$pembeli['id'].'/'.$s->id) }}">
                                <h5>{{$s->model}}</h5>
                            </a>
                            <div class="product-price">
                                @currency($s['harga'])
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="{{url('img/women-large2.jpg')}}">
                    <h2 style="background-color: rgba(0, 0, 0, 0.3);">Sedan</h2>
                    <a href="/mobil/{{$pembeli['id']}}/Sedan">Telusuri</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->
@endsection