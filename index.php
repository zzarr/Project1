<?php
session_start();
include('koneksi/koneksi.php');

/*if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}*/

//$page = @$_GET['page'];
//$aksi = @$_GET['aksi'];


?>
<!-- <pre>
<?php var_dump($_SESSION['login']);  ?>
</pre> -->
<!DOCTYPE html>
<html>

<head>
  <title>Landing Page</title>

  <link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="asset/css/style.css">
  <!--<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>-->
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="hero-section">
      <img src="asset/img/carousel/WhatsApp Image 2023-03-22 at 08.02.42.jpeg" alt="">
    </div>
  </div>


  <div class="container-fluid">
    <div class="container px-4 py-5" id="custom-cards">


      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png'); background-color: white;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Sablon Cutom suka-suka
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="Tran/index.php?halaman=keranjang-belanja&id_data=1&aksi=tambah_produk&jumlah=1" class="btn btn-outline-primary">Masukan keranjang</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png')">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Kaos Custom Desain Sesukamu (Sablon DTF)
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="" class="btn btn-outline-primary">Pesan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png')">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Kaos Custom Desain Sesukamu (Sablon DTF)
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="" class="btn btn-outline-primary">Pesan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png')">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Kaos Custom Desain Sesukamu (Sablon DTF)
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="" class="btn btn-outline-primary">Pesan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png')">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Kaos Custom Desain Sesukamu (Sablon DTF)
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="" class="btn btn-outline-primary">Pesan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('asset/img/produk/kaoscust-1@2x.png')">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: white;">
                Kaos Custom Desain Sesukamu (Sablon DTF)
              </h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <a href="">Rp75.000 - Rp100.000</a>
                </li>
                <li class="d-flex align-items-center me">

                </li>
                <li class="d-flex align-items-center">
                  <a href="" class="btn btn-outline-primary">Pesan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>