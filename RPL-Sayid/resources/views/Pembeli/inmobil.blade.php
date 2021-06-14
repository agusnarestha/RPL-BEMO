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
                    <span>{{$mobil['merek']}}</span>
                    <h3>{{$mobil['model']}}</h3>
                </div>
                <div class="pd-desc">
                    <p><strong>Penjual :</strong> {{$penjual['nama']}}</p>
                    <h4>@currency($mobil['harga'])</h4>
                </div>
                <ul class="pd-tags">
                    <li><strong>Tipe :</strong> {{$mobil['tipe_mobil']}}</li>
                    <li><strong>Bahan Bakar :</strong> {{$mobil['bahan_bakar']}}</li>
                </ul>
                <div class="filter-widget">
                    <a href="{{ url('/checkout/'.$pembeli['id'].'/'.$mobil['id']) }}" class="filter-btn">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab">
        <div class="tab-item">
            <ul class="nav" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESKRIPSI</a>
                </li>
            </ul>
        </div>
        <div class="tab-item-content">
            <div class="tab-content">
                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                    <div class="product-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5>Deskripsi</h5>
                                <p>{{$mobil['desc']}}</p>
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