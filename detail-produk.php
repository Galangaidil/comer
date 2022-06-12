<?php

require_once 'components/nav.php';
$products = include_once('data/recommendation.php');
$nav = new Nav();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?= $nav->index() ?>
    <div class="container">
        <nav class="my-4" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pakaian Pria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vivienne Westwood Red Label Denim</li>
            </ol>
        </nav>
        <div id="produk" class="d-flex">
            <div class="row flex-column flex-md-row">
                <div class="col-3">
                    <img class="img-fluid rounded" src="<?= $products[0]['image'] ?>" />
                </div>
                <div class="col-6">
                    <h3><?= $products[0]['name'] ?></h3>
                    <div class="rating">
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star-half text-warning'></i><span class="mx-2">4.5 (65 ulasan)</span>
                    </div>
                    <div class="harga">
                        <span class="badge rounded-pill text-bg-danger">Diskon 20%</span>
                        <span><del>Rp. 540.000</del></span>
                        <div>
                            <h4 class="text-warning">Rp. 430.000</h4>
                        </div>
                    </div>
                    <div class="deskripsi my-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat odio, voluptas, fuga omnis quo vel dignissimos enim totam dolore ullam a. Odio, aut sapiente voluptatem aliquam maxime iure incidunt libero. Corporis nostrum iste a odit maxime, fugiat architecto. Mollitia repudiandae tenetur, temporibus accusantium voluptas ab, omnis error, laborum amet nam quas pariatur modi nulla rerum. Possimus, sint deleniti temporibus quia saepe officia quasi debitis libero exercitationem, quae dignissimos facilis, recusandae minus eum placeat odio? Quae nisi dolor, soluta cumque corporis harum laborum nihil dolores nobis illum delectus quo itaque quam veritatis deleniti voluptates, quas distinctio consectetur vitae quisquam beatae excepturi!
                    </div>
                </div>
                <div class="col-3">
                    <div class="card position-sticky" style="width: 15rem; top: 4px">
                        <div class="card-body">
                            <h5 class="card-title">Beli</h5>
                            <p class="card-text"></p>

                            <input type="number" class="form-control" placeholder="Masukkan jumlah" aria-label="Jumlah" aria-describedby="button-addon2" value="1">
                            <button class="btn btn-primary my-2 form-control" type="submit"><i class='bx bx-cart-add me-2 font-lg'></i>Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ulasan mt-4">
            <div class="row d-flex">
                <div class="headings d-flex justify-content-between align-items-center">
                    <h4>Ulasan Produk</h4>
                </div>
                <div class="col-md-9">
                    <div class="card p-3 my-2">
                        <div class="d-flex flex-row">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://api.lorem.space/image/face?hash=33791" width="30" height="30" class="user-img rounded-circle mr-2">
                            </div>
                            <span class="mx-2"><small class="font-weight-bold text-primary">james_olesenn</small></span>
                            <span class="ms-auto"><small>2 hari yang lalu</small></span>
                        </div>
                        <div class="d-flex py-2">
                            Produk sangat bagus. Kualitas mantap dan original.
                        </div>
                        <div class="bintang">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                    </div>
                    <div class="card p-3 my-2">
                        <div class="d-flex flex-row">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://api.lorem.space/image/face?hash=33791" width="30" height="30" class="user-img rounded-circle mr-2">
                            </div>
                            <span class="mx-2"><small class="font-weight-bold text-primary">james_olesenn</small></span>
                            <span class="ms-auto"><small>2 hari yang lalu</small></span>
                        </div>
                        <div class="d-flex py-2">
                            Produk sangat bagus. Kualitas mantap dan original.
                        </div>
                        <div class="bintang">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                    </div>

                    <div class="card p-3 my-2">
                        <div class="d-flex flex-row">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://api.lorem.space/image/face?hash=33791" width="30" height="30" class="user-img rounded-circle mr-2">
                            </div>
                            <span class="mx-2"><small class="font-weight-bold text-primary">james_olesenn</small></span>
                            <span class="ms-auto"><small>2 hari yang lalu</small></span>
                        </div>
                        <div class="d-flex py-2">
                            Produk sangat bagus. Kualitas mantap dan original.
                        </div>
                        <div class="bintang">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                    </div>

                    <div class="card p-3 my-2">
                        <div class="d-flex flex-row">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://api.lorem.space/image/face?hash=33791" width="30" height="30" class="user-img rounded-circle mr-2">
                            </div>
                            <span class="mx-2"><small class="font-weight-bold text-primary">james_olesenn</small></span>
                            <span class="ms-auto"><small>2 hari yang lalu</small></span>
                        </div>
                        <div class="d-flex py-2">
                            Produk sangat bagus. Kualitas mantap dan original.
                        </div>
                        <div class="bintang">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card my-2 position-sticky" style="width: 15rem; top: 4px">
                        <div class="card-body">
                            <h5 class="card-title">Rating</h5>
                            <p class="card-text"></p>
                            <div class="">
                                <i class='bx bxs-star text-warning'></i>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                            </div>
                            <div class="">
                                <i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                </div>
                            </div>
                            <div class="">
                                <i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                </div>
                            </div>
                            <div class="">
                                <i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                </div>
                            </div>
                            <div class="">
                                <i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i><i class='bx bxs-star text-warning'></i>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="rekomendasi my-2 mt-4 mb-4">

            <div class="row">
                <h4>Rekomendasi produk</h4>

                <?php foreach ($products as $product) : ?>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="<?= $product['image'] ?>" class="card-img-top" alt="..." height="400">
                            <div class="card-body">
                                <p class="card-text"><?= $product['name'] ?></p>
                                <strong class="d-block"><?= $product['price'] ?></strong>
                                <span><i class='bx bxs-star text-warning'></i> <?= $product['rating'] ?> | Terjual <?= $product['sold'] ?>+</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>

    <?= $nav->footer() ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>