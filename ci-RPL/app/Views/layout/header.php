<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>


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



      /* background-image: url(<?= base_url('image/mobil.png') ?>); */

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

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class="navbar-brand" href="<?php echo base_url('Main/index') ?>"><img src=<?= base_url('image/Bemo.png') ?> alt="" style="width: 25%;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-md-6">
          <div class="collapse navbar-collapse fixed-top position-relative justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?php echo base_url('#') ?>">Login</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('#') ?>">Register</a>
              </li>
              <!-- <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('#') ?>">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('#') ?>">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('#') ?>">Tentang Kami</a>
                            </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>