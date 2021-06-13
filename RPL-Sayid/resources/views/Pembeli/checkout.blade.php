@extends('Pembeli.master')

@section('content')
<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="/belimobil" class="checkout-form" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                <li class="fw-normal">{{$mobil['model']}}<span>@currency($mobil['harga'])</span></li>
                            </ul>
                            <div class="order-btn">
                                <input type="hidden" value="{{$mobil['id']}}" name="mobil_id" id="mobil_id">
                                <input type="hidden" value="{{$pembeli['id']}}" name="pembeli_id" id="pembeli_id">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
