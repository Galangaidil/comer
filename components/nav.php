<?php

class Nav
{

    public function index(): string
    {
        return '
            <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Janapedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav w-100 mx-auto mb-2 mb-lg-0">
                    <form class="d-flex w-100" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari produk" aria-label="Cari produk" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="bx bx-search"></i></span>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <a href="/cart.php" class="ms-3 dropdown-item">
                        <i class="bx bx-cart"></i>
                    </a>

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bxs-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header">Informasi akun</h6>
                            </li>
                            <li><a href="/profile.php" class="dropdown-item">Samuel</a></li>
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="/login.php" class="dropdown-item">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
            ';
    }

    public function footer(): string
    {
        return '<footer class="text-center text-lg-start text-white" style="background-color: #1B2430">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h2 class="text-uppercase mb-4 font-weight-bold">
                            Janepedia
                        </h2>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Produk</h6>
                        <p>
                            <a class="text-white">Fashion Pria</a>
                        </p>
                        <p>
                            <a class="text-white">Fashion Wanita</a>
                        </p>
                        <p>
                            <a class="text-white">Accesories HP</a>
                        </p>
                        <p>
                            <a class="text-white">Accesories Computer</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                        <p><i class="fas fa-home mr-3"></i> Sleman, Yogyakarta</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Ikuti Kami</h6>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="bx bxl-facebook-circle" ></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="bx bxl-twitter" ></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="bx bxl-google" ></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="bx bxl-instagram" ></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="bx bxl-linkedin" ></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="bx bxl-github" ></i></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white" href="https://janepedia.com/">janepedia.com</a>
        </div>
    </footer>';
    }
}
