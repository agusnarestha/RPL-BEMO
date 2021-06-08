@extends('Pembeli.mobil')

@section('mobil')
<!-- Product Shop Section Begin -->
<div class="col-lg-9 order-1 order-lg-2">
    <div class="row">
        <div class="col-lg-6">
            <div class="product-pic-zoom">
                <img class="product-big-img" src="/img/{{$mobil['gambar']}}" alt="">
                <div class="zoom-icon">
                    <i class="fa fa-search-plus"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="product-details">
                <div class="pd-title">
                    <span>{{$mobil['tipe_mobil']}}</span>
                    <h3>{{$mobil['merek']}}</h3>
                </div>
                <div class="pd-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                        sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                    <h4>{{$mobil['harga']}}</h4>
                </div>
                <ul class="pd-tags">
                    <li><span>CATEGORIES</span>: More Accessories, Wallets & Cases</li>
                    <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                </ul>
                <div class="filter-widget">
                    <a href="{{ url('/checkout/'.$pembeli['id'].'/'.$mobil['id']) }}" class="filter-btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab">
        <div class="tab-item">
            <ul class="nav" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                </li>
            </ul>
        </div>
        <div class="tab-item-content">
            <div class="tab-content">
                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                    <div class="product-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5>Introduction</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                <h5>Features</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                            </div>
                            <div class="col-lg-5">
                                <img src="img/product-single/tab-desc.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Shop Section End -->
@endsection