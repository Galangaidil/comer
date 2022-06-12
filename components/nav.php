<?php

class Nav
{

    public function index(): string
    {
        return '
            <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Janapedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari produk" aria-label="Recipients username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="bx bx-search"></i></span>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button class="btn">
                        <i class="bx bx-cart"></i>
                    </button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bxs-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header">Pengaturan</h6>
                            </li>
                            <li><button class="dropdown-item" type="button">John Doe</button></li>
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><button class="dropdown-item" type="button">Log out</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
            ';
    }
}
