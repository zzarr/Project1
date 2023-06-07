<?php
require_once 'koneksi/koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/vendor/bootstrap/css/bootstrap.css">

    <title>Sign Up</title>
</head>

<body class="text-center">
    <div class="container-fluid justify-content-center">
        <main class="form-signin">
            <form action="koneksi/proses-singup.php" method="post">
                <img class="mb-4" src="asset/img/logo/IMG-20230301-WA0010-removebg-preview.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Please sign Up</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="" name="username">
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="konfirmasi Password" name="password2">
                    <label for="floatingPassword">konfirmasi Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-deep-orange" type="submit" name="signup" id="signup">Sign up</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </main>
    </div>


    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>