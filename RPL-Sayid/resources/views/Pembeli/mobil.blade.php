@extends('Pembeli.master')

@section('content')
<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Tipe</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">SUV</a></li>
                        <li><a href="#">Sedan</a></li>
                        <li><a href="#">LCGC</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Fuel</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Bensin
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @yield('mobil')
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
@endsection