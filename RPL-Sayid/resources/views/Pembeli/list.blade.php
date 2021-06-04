@extends('Pembeli.mobil')

@section('mobil')
<div class="col-lg-9 order-1 order-lg-2">
    <div class="product-show-option">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="select-option">
                    <select class="sorting">
                        <option value="">Default Sorting</option>
                    </select>
                    <select class="p-show">
                        <option value="">Show:</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 text-right">
                <p>Show 01- 09 Of 36 Product</p>
            </div>
        </div>
    </div>
    <div class="product-list">
        <div class="row">
            @foreach ($mobil as $m)
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/products/product-1.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="{{ url('/infomobil/'.$m->id.'/'.$pembeli['id']) }}">+ Quick View</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">{{$m->tipe_mobil}}</div>
                        <a href="#">
                            <h5>{{$m->model}}</h5>
                        </a>
                        <div class="product-price">
                            {{$m->harga}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="loading-more">
        <i class="icon_loading"></i>
        <a href="#">
            Loading More
        </a>
    </div>
</div>
@endsection