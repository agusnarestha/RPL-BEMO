<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <title>BEMO | Beli Mobil Online</title>
    <style>
        html,
        body {
            height: 100%;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
        }

        .gradient {
            background: #f7ff00;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #db36a4, #f7ff00);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #db36a4, #f7ff00);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        a {
            text-decoration: none;
            color: black;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<header class="page-header gradient">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="navbar-brand" href=""><img src="" alt="" style="width: 25%;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="collapse navbar-collapse fixed-top position-relative justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Login</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Register</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Tentang Kami</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    @yield('content')

    <footer>
        <div class="container-fluid text-center" style="padding: 10px 0;">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-md-3">
                        <h5 class="text-start"><img src="" alt="" style="width: 20%;"></h5>
                        <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porta nibh venenatis cras sed felis eget.</p>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-start">Tautan Cepat</h5>
                        <div class="row">
                            <p class="text-start"><a href="">Beranda</a></p>
                            <p class="text-start"><a href="">Informasi</a></p>
                            <p class="text-start"><a href="">FAQs</a></p>
                            <p class="text-start"><a href="">Artikel</a></p>
                            <p class="text-start"><a href="">Tentang Kami</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-start">Pranala Luar</h5>
                        <div class="row">
                            <p class="text-start"><a href="https://covid19.go.id/">Lorem ipsum dolor sit amet</a></p>
                            <p class="text-start"><a href="https://kawalcovid19.id/">Consectetur adipiscing elit</a></p>
                            <p class="text-start"><a href="https://www.halodoc.com/kesehatan/coronavirus">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-start">Hubungi Kami</h5>
                        <div class="row">
                            <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Kota Bandung, Jawa Barat 40257</p>
                            <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                </svg> bemo@gmail.com</p>
                            <p class="text-start"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> 021-5210 411</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px 0;">
                <span><img src="" alt="" style="width: 5%;"></span>
            </div>
            <div class="row" style="padding: 10px 0;">
                <p>© 2021 Copyright Reserved</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#display').DataTable({
                fixedHeader: {
                    header: true,
                    footer: true
                }
            });
        });
    </script>
</body>
<html>