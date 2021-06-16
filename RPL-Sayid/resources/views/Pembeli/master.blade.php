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
                    <a href="/" class="login-panel px-3 py-3"><i class="fa fa-user"></i>Keluar</a>
                    <a href="/editProfilPem/{{$pembeli['id']}}" class="login-panel px-3 py-3"><i class="fa fa-user"></i>{{$user['nama']}}</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="logo">
                            <a href="{{ url('/pembeli/'.$pembeli['id']) }}">
                                <img src="{{url('/img/Bemo.png')}}" alt="" style="width: 30%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right col-md-6">
                        <ul class="nav-right">
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
            @if(session('insertSaldo'))
            <div class="alert alert-success">
                {{ session('insertSaldo')}}
            </div>
            @endif
            @if(session('tarikSaldo'))
            <div class="alert alert-success">
                {{ session('tarikSaldo')}}
            </div>
            @elseif(session('gagalSaldo'))
            <div class="alert alert-danger">
                {{ session('gagalSaldo')}}
            </div>
            @endif
            @if(session('beliMobil'))
            <div class="alert alert-success">
                {{ session('beliMobil')}}
            </div>
            @endif
            @if(session('updateProfile'))
                <div class="alert alert-success">
                    {{ session('updateProfile')}}
                </div>
            @endif
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ url('/pembeli/'.$pembeli['id']) }}">Beranda</a></li>
                        <li><a href="{{ url('/mobil/'.$pembeli['id']) }}">Mobil</a></li>
                        <li><a href="{{ url('/topup/'.$pembeli['id']) }}">Isi Saldo</a></li>
                        <li><a href="{{ url('/tarik/'.$pembeli['id']) }}">Tarik Saldo</a></li>
                        <li><a href="{{ url('/historyPembeli/'.$pembeli['id']) }}">Riwayat Transaksi</a></li>
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
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="{{ url('/pembeli/'.$pembeli['id']) }}"><img src="{{url('/img/Bemo.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <div class="copyright-text">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
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
