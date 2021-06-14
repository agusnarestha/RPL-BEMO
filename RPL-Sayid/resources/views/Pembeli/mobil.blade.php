@extends('Pembeli.master')

@section('content')
<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 order-1 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Tipe</h4>
                    <ul class="filter-catagories">
                        <li><a href="/mobil/{{$pembeli['id']}}/SUV">SUV</a></li>
                        <li><a href="/mobil/{{$pembeli['id']}}/Sedan">Sedan</a></li>
                        <li><a href="/mobil/{{$pembeli['id']}}/LCGC">LCGC</a></li>
                    </ul>
                </div>
            </div>
            @yield('mobil')
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
@endsection