<?php
$page = @$_GET['page'];
$aksi = @$_GET['aksi'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <link rel="stylesheet" href="../asset/vendor/bootstrap/css/bootstrap.css">

</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Hotel Intan</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../logout.php">Log out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page= &&?aksi= ">
                                <span data-feather="home"></span><i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=data">
                                <span data-feather="file"></span><i class="fa fa-file" aria-hidden="true"></i>
                                Data kamar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=Fkamar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2" viewBox="0 0 16 16">
                                    <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z" />
                                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                                </svg>
                                <span data-feather="file"></span>
                                fasilitas kamar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=Fumum">
                                <span data-feather="file"></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
                                    <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z" />
                                </svg>
                                fasilitas umum
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <?php
                    ?>


                </div>
                <?php
                if ($page == "data") {
                    if ($aksi == "") {
                        include "kamar/data_kamar.php";
                    } elseif ($aksi == "hapus") {
                        include "kamar/hapus_data_kamar.php";
                    } elseif ($aksi == "edit") {
                        include "kamar/edit_data_kamar.php";
                    } elseif ($aksi == "tambah") {
                        include "kamar/tambah_data_kamar.php";
                    }
                } elseif ($page == "Fkamar") {
                    if ($aksi == "") {
                        include "fasilitas kamar/data_fasilitas_kamar.php";
                    } elseif ($aksi == "edit") {
                        include "fasilitas kamar/edit_fasilitas_kamar.php";
                    } elseif ($aksi == "hapus") {
                        include "fasilitas kamar/hapus_fasilitas_kamar.php";
                    } elseif ($aksi == "tambah") {
                        include "fasilitas kamar/tambah_fasilitas_kamar.php";
                    }
                } elseif ($page == "Fumum") {
                    if ($aksi == "") {
                        include "fasilitas umum/data_fasilitas_umum.php";
                    } elseif ($aksi == "edit") {
                        include "fasilitas umum/edit_fasilitas_umum.php";
                    } elseif ($aksi == "hapus") {
                        include "fasilitas umum/hapus_fasilitas_umum.php";
                    } elseif ($aksi == "tambah") {
                        include "fasilitas umum/tambah_fasilitas_umum.php";
                    }
                } else { ?>
                    <h1 class="h1">Dashboard</h1>

                    <h1>Selamat datang</h1>

                <?php } ?>




            </main>
        </div>
    </div>

    <script src="../asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>