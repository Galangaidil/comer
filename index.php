<?php
require_once 'components/nav.php';
$nav = new Nav();
$products = include_once('data/recommendation.php');
$fashion = include_once('data/fashion.php');
$accecories = include_once('data/accessories.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janapedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?= $nav->index() ?>

    <!-- Carousel -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div id="carousel_products" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel_products" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel_products" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel_products" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1699&q=80" class="d-block w-100 rounded-3" alt="..." width="800" height="500" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100 rounded-3" alt="..." width="800" height="500" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1722&q=80" class="d-block w-100 rounded-3" alt="..." width="800" height="500" style="object-fit: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_products" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_products" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommendation -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <h4>Rekomendasi produk</h4>

            <?php foreach ($products as $product) : ?>
                <div class="col-lg-3">
                    <a href="./detail-produk.php" class="text-decoration-none text-black">
                        <div class="card">
                            <img src="<?= $product['image'] ?>" class="card-img-top" alt="..." height="400">
                            <div class="card-body">
                                <p class="card-text"><?= $product['name'] ?></p>
                                <strong class="d-block"><?= $product['price'] ?></strong>
                                <span><i class='bx bxs-star text-warning'></i> <?= $product['rating'] ?> | Terjual <?= $product['sold'] ?>+</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Fashion Woman -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <h4>Fashion wanita</h4>

            <?php foreach ($fashion['woman'] as $product) : ?>
                <div class="col-lg-3">
                    <a href="./detail-produk.php" class="text-decoration-none text-black">
                        <div class="card">
                            <img src="<?= $product['image'] ?>" class="card-img-top" alt="..." height="400">
                            <div class="card-body">
                                <p class="card-text"><?= $product['name'] ?></p>
                                <strong class="d-block"><?= $product['price'] ?></strong>
                                <span><i class='bx bxs-star text-warning'></i> <?= $product['rating'] ?> | Terjual <?= $product['sold'] ?>+</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Fashion Man -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <h4>Fashion pria</h4>

            <?php foreach ($fashion['man'] as $product) : ?>
                <div class="col-lg-3">
                    <a href="./detail-produk.php" class="text-decoration-none text-black">
                        <div class="card">
                            <img src="<?= $product['image'] ?>" class="card-img-top" alt="..." height="400">
                            <div class="card-body">
                                <p class="card-text"><?= $product['name'] ?></p>
                                <strong class="d-block"><?= $product['price'] ?></strong>
                                <span><i class='bx bxs-star text-warning'></i> <?= $product['rating'] ?> | Terjual <?= $product['sold'] ?>+</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Accecories Computer -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <h4>Aksesoris komputer</h4>

            <?php foreach ($accecories['computer'] as $product) : ?>
                <div class="col-lg-3">
                    <a href="./detail-produk.php" class="text-decoration-none text-black">
                        <div class="card">
                            <img src="<?= $product['image'] ?>" class="card-img-top" alt="..." height="400">
                            <div class="card-body">
                                <p class="card-text"><?= $product['name'] ?></p>
                                <strong class="d-block"><?= $product['price'] ?></strong>
                                <span><i class='bx bxs-star text-warning'></i> <?= $product['rating'] ?> | Terjual <?= $product['sold'] ?>+</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <?= $nav->footer() ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>