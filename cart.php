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
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?= $nav->index() ?>
    <div class="container">

        <div class="card my-4">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Keranjang</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Detail</th>
                                    <th scope="col"> </th>
                                    <th scope="col">Kuantitas</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="row">
                                        <div class="col-4 col-md-2">
                                            <img class="img-fluid rounded" src="<?= $products[0]['image'] ?>" />
                                        </div>
                                        <div class="col-6 d-flex flex-column justify-content-center">
                                            <div><small><strong><?= $products[0]['name'] ?></strong></small></div>
                                            <div>Parfume</div>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="align-middle text-nowrap">
                                        <input type="number" class="form-control w-50" placeholder="Masukkan jumlah" aria-label="Jumlah" aria-describedby="button-addon2" value="1">
                                    </td>
                                    <td class="align-middle text-nowrap">Rp. <?= $products[0]['price'] ?></td>
                                    <td class="align-middle text-nowrap">Rp. 500.000</td>
                                </tr>
                                <tr>
                                    <td class="row">
                                        <div class="col-4 col-md-2">
                                            <img class="img-fluid rounded" src="<?= $products[1]['image'] ?>" />
                                        </div>
                                        <div class="col-6 d-flex flex-column justify-content-center">
                                            <div><small><strong><?= $products[1]['name'] ?></strong></small></div>
                                            <div>Parfume</div>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="align-middle text-nowrap">
                                        <input type="number" class="form-control w-50" placeholder="Masukkan jumlah" aria-label="Jumlah" aria-describedby="button-addon2" value="1">
                                    </td>
                                    <td class="align-middle text-nowrap">Rp. <?= $products[1]['price'] ?></td>
                                    <td class="align-middle text-nowrap">Rp. 500.000</td>
                                </tr>
                                <tr>
                                    <td class="row">
                                        <div class="col-4 col-md-2">
                                            <img class="img-fluid rounded" src="<?= $products[2]['image'] ?>" />
                                        </div>
                                        <div class="col-6 d-flex flex-column justify-content-center">
                                            <div><small><strong><?= $products[2]['name'] ?></strong></small></div>
                                            <div>Parfume</div>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="align-middle text-nowrap">
                                        <input type="number" class="form-control w-50" placeholder="Masukkan jumlah" aria-label="Jumlah" aria-describedby="button-addon2" value="1">
                                    </td>
                                    <td class="align-middle text-nowrap">Rp. <?= $products[2]['price'] ?></td>
                                    <td class="align-middle text-nowrap">Rp. 500.000</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3" style="background: #f5f5f5">
                    <div class="card-body">
                        <h5>Detail Pesanan</h5>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>3 item</span>
                            <span>Rp. 1.000.000</span>
                        </div>
                        <div class="fw-semibold mt-4 mb-2">Pengiriman</div>
                        <select class="form-select mb-4" aria-label="pengiriman">
                            <option value="1">JNE</option>
                            <option value="2">Sicepat</option>
                            <option value="3">J&T</option>
                        </select>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Total bayar</span>
                            <span>Rp. 1.500.000</span>
                        </div>
                        <button type="button" class="btn btn-primary w-100 mt-3">Checkout</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>