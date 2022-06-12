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
    <nav class="navbar navbar-expand-lg bg-light">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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

    <div class="container">
        <nav class="my-4" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pakaian Pria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vivienne Westwood Red Label Denim</li>
            </ol>
        </nav>
        <div id="produk" class="d-flex">
            <div class="row">
                <div class="col-4">
                    <img class="img-fluid" src="https://static.mercdn.net/item/detail/orig/photos/m13451739216_1.jpg?1643179806" />
                </div>
                <div class="col-6">
                    <h3>Vivienne Westwood Red Label Denim - Size XL</h3>
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
                    <hr>
                    <div class="deskripsi">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat odio, voluptas, fuga omnis quo vel dignissimos enim totam dolore ullam a. Odio, aut sapiente voluptatem aliquam maxime iure incidunt libero. Corporis nostrum iste a odit maxime, fugiat architecto. Mollitia repudiandae tenetur, temporibus accusantium voluptas ab, omnis error, laborum amet nam quas pariatur modi nulla rerum. Possimus, sint deleniti temporibus quia saepe officia quasi debitis libero exercitationem, quae dignissimos facilis, recusandae minus eum placeat odio? Quae nisi dolor, soluta cumque corporis harum laborum nihil dolores nobis illum delectus quo itaque quam veritatis deleniti voluptates, quas distinctio consectetur vitae quisquam beatae excepturi!
                    
                    <hr>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>