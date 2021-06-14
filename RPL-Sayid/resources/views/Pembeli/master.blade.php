<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEMO | Beli Mobil Online</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                    <a href="/" class="login-panel px-3 py-3"><i class="fa fa-user"></i>Logout</a>
                    <a href="#" class="login-panel px-3 py-3"><i class="fa fa-user"></i>{{$user['nama']}}</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="logo">
                            <a href="{{ url('/pembeli/'.$pembeli['id']) }}">
                                <img src="{{url('/images/Bemo.png')}}" alt="" style="width: 30%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right col-md-6">
                        <ul class="nav-right">
                            @if(session('insertSaldo'))
                            <div class="alert alert-success">
                                {{ session('insertSaldo')}}
                            </div>
                            @endif
                            <li class="heart-icon">
                                <a href="{{ url('/wish/'.$pembeli['id']) }}">
                                    <i class="icon_heart_alt"></i>
                                    <span>{{$wishlist->count()}}</span>
                                </a>
                            </li>
                            <li class="cart-price">@currency($user['saldo'])</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ url('/pembeli/'.$pembeli['id']) }}">Home</a></li>
                        <li><a href="{{ url('/mobil/'.$pembeli['id']) }}">Shop</a></li>
                        <li><a href="{{ url('/topup/'.$pembeli['id']) }}">Top Up</a></li>
                        <li><a href="{{ url('/historyPembeli/'.$pembeli['id']) }}">History</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.min.js')}}"></script>
    <script src="{{url('js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('js/jquery.zoom.min.js')}}"></script>
    <script src="{{url('js/jquery.dd.min.js')}}"></script>
    <script src="{{url('js/jquery.slicknav.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>

</html>
</section>
