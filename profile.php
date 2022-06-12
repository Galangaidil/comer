<?php

require_once('components/nav.php');

$nav = new Nav();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #1B2430;
        }
    </style>
</head>

<body>
    <?= $nav->index() ?>

    <div class="container-fluid" style="background-color: f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row ">
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white" style="border-radius: .5rem; ">
                                <img src="https://i.ibb.co/586x1j7/ava1-bg.webp" alt="Avatar" class="img-fluid my-5" style="width: 200px;" />
                                <h4>Samuel</h4>
                                <p>Member</p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h5>Informasi Akun</h5>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">info@example.com</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Password</h6>
                                            <p class="text-muted">***</p>
                                        </div>
                                    </div>
                                    <h5>Alamat</h5>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Kota</h6>
                                            <p class="text-muted">Kabupaten Sleman</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Provinsi</h6>
                                            <p class="text-muted">Daerah Istimewa Yogyakarta</p>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-12 mb-3">
                                            <h6>Alamat lengkap</h6>
                                            <p class="text-muted">Jl. Siliwangi Jl. Ring Road Utara, Jombor Lor, Sendangadi, Kec. Mlati,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $nav->footer() ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>