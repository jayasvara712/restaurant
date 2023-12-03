@extends('layouts.template')
@section('main')

<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <div class="section-body">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="/stisla/assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/stisla/assets/img/unsplash/andre-benz-1214056-unsplash.jpg"
                            alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <section id="popular-dish">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Popular Dish</h3>
                    </div>
                </div>
            </section>

            <section id="menu">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Menu Kami</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <ul class="nav nav-pills d-flex justify-content-center" id="menu" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="menu-makanan" data-toggle="tab" href="#makanan"
                                            role="tab" aria-controls="home" aria-selected="true">Makanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="menu-minuman" data-toggle="tab" href="#minuman" role="tab"
                                            aria-controls="profile" aria-selected="false">Minuman</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="menu-content">
                                    <div class="tab-pane fade show active" id="makanan" role="tabpanel"
                                        aria-labelledby="menu-makanan">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="media">
                                                    <img class="mr-3" src="/stisla/assets/img/products/product-1.jpg"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="menu-minuman">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="media">
                                                    <img class="mr-3" src="/stisla/assets/img/products/product-2.jpg"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <h4>Nasi Goreng</h4>
                                                            <h5>Rp.10.000</h5>
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
                    <div class="card-body">s</div>
                </div>
            </section>

            <section id="about">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Tentang Kami</h3>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

@endsection
