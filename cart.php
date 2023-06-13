<?php
session_start();
include('koneksi/koneksi.php');


if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

//$page = @$_GET['page'];
//$aksi = @$_GET['aksi'];

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];



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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " style="/* From https://css.glass */
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.3);">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/img/logo/IMG-20230301-WA0010-removebg-preview.png" alt="" srcset="" style="height: 70px; width:70px;background-color:white;border-radius:50%">
            </a>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 rounded-pill " style="background-color: white;padding:10px;min-width:500px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="cart.php">keranjang (<?= count($cart) ?>)</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-bg-success rounded" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg> 08123456789</a>
                    </li>

                    <li>
                        <a href="" class="nav-link ms-2 text-bg-dark rounded">
                            <i class="fas fa-envelope"></i> pandawa5@gmail.com
                        </a>
                    </li>


                </ul>

                <ul class="navbar-nav  mb-2 mb-lg-0 rounded-pill  " style="background-color: white;padding:10px;">

                    <?php
                    if (!isset($_SESSION['login'])) {

                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="signup.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="login.php"> Login</a>
                        </li>
                    <?php

                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="logout.php"><i class="fas fa-door-open"></i>Logout</a>
                        </li>
                    <?php
                    }

                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-body-tertiary" style="padding-top: 100px; ">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" style="height:100%;">

                    <thead>
                        <tr>
                            <td>
                                no
                            </td>
                            <td>
                                jenis sablon
                            </td>
                            <td>
                                qty
                            </td>
                            <td>
                                aksi
                            </td>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cart as $keranjang) :
                            $id = $keranjang['id'];
                            $data = $conn->query("SELECT * FROM data_sablon where id_data =$id ");
                            $pecah = $data->fetch_assoc();


                        ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $pecah['jenis_sablon']; ?></td>
                                <td><?= $keranjang['qty']; ?></td>
                                <td>
                                    <a href="checkout.php?id=<?= $pecah['id_data'] ?>&jumlah=<?= $keranjang['qty'] ?>" class="btn btn-outline-info btn-sm">checkout</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;

                        ?>
                    </tbody>

                </table>

            </div>


        </div>

    </div>


    <script src=" asset/vendor/bootstrap/js/bootstrap.bundle.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>