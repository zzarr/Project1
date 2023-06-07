<?php
session_start();
include 'koneksi/koneksi.php';
$eror = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $eror .= "<li>masukan username dan password</li>";
    }
    if (empty($eror)) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $q1 = mysqli_query($conn, $sql);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['password'] != $password) {
            $eror .= "<li>akun tidak ditemukan</li>";
        }
    }

    if (empty($eror)) {
        $_SESSION['login'] = $username;
        header("location:index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/vendor/bootstrap/css/bootstrap.css">

    <title>Login</title>
</head>

<body class="text-center">
    <div class="container-fluid justify-content-center">
        <main class="form-signin">
            <form action="" method="post">
                <img class="mb-4" src="asset/img/logo/IMG-20230301-WA0010-removebg-preview.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <?php
                if ($eror) {
                    echo "<div class='alert alert-danger' role='alert'>"
                        . $eror .
                        "</div>";
                }
                ?>

                <div class="form-floating">
                    <input type="text" class="form-control" name="username">
                    <label for="username">username</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="password">
                    <label for="Password">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <input class=" w-100 btn btn-lg btn-deep-orange" type="submit" name="login" id="login" value="login">

            </form>
        </main>

    </div>


    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>