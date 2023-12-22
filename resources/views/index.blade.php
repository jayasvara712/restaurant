@extends('layouts.template')
@section('main')
    <!-- Main Content -->
    <section class="section" id="home">

        <div class="section-body">

            <div class="card">

                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/asset/etc/banner1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/asset/etc/banner2.jpg" alt="Second slide">
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

                {{-- <section id="popular-dish">
                    <div class="card-body">
                        <h3 class="text-center">Makanan Favorit</h3>

                    </div>
                </section> --}}

                <section id="menu">
                    <div class="card-body">
                        <h3 class="text-center">Menu Kami</h3>
                        <center>
                            <div class="card-body">
                                <a href="https://gofood.co.id/id/bali/restaurant/mie-ayam-medan-alang-dan-nasi-goreng-ayam-merah-tuban-48e66546-e6a1-4294-b204-1fb143d21f67"
                                    target="_blank" class="btn btn-icon icon-left btn-outline-success"><i
                                        class="fas fa-store"></i> Go Food</a>
                                <a href="#" class="btn btn-icon icon-left btn-outline-danger"><i
                                        class="fas fa-store"></i> Shopee</a>
                                <a href="https://food.grab.com/id/en/restaurant/bakmie-medan-alang-tuban-delivery/AWf_b0_qnMVKL6mzfsMX"
                                    target="_blank" class="btn btn-icon icon-left btn-outline-success"><i
                                        class="fas fa-store"></i> Grab</a>
                            </div>
                        </center>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <ul class="nav nav-pills d-flex justify-content-center" id="menu" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="menu-makanan" data-toggle="tab" href="#makanan"
                                            role="tab" aria-controls="home" aria-selected="true"><i
                                                class="fas fa-utensils"></i> Makanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="menu-minuman" data-toggle="tab" href="#minuman"
                                            role="tab" aria-controls="profile" aria-selected="false"><i
                                                class="fas fa-wine-glass"></i> Minuman</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="menu-content">
                                    @csrf

                                    <div class="tab-pane fade show active" id="makanan" role="tabpanel"
                                        aria-labelledby="menu-makanan">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <img class="mr-2 mb-4 media-img" src="/asset/makanan/banner_makanan.jpg"
                                                    alt="Generic placeholder image">
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                @foreach ($makanan as $items)
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <button class="btn" data-toggle="modal"
                                                                data-target="#viewModal" data-id="{{ $items->id_product }}">
                                                                <h5>{{ $items->name_product }}</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5>@currency($items->price)</h5>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="minuman" role="tabpanel"
                                        aria-labelledby="menu-minuman">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-4">
                                                <img class="mr-2 mb-4 media-img" src="/asset/minuman/banner_minuman.jpg"
                                                    alt="Generic placeholder image">
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-8">
                                                @foreach ($minuman as $items)
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <button class="btn" data-toggle="modal"
                                                                data-target="#viewModal"
                                                                data-id="{{ $items->id_product }}">
                                                                <h5>{{ $items->name_product }}</h5>
                                                            </button>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5>@currency($items->price)</h5>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section id="about-us">
                    <div class="card-body">
                        <h3 class="text-center">
                            Tentang Kami
                        </h3>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class="mr-2 mb-4 media-img" src="/asset/etc/warung.jpg"
                                    alt="Generic placeholder image">
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <p class="text-justify">
                                    Warung ini dibuat sejak tahun 2015, yang termotivasi dari keturunan yang ketiga dari
                                    ayah Bu Alang. Alang sendiri adalah seorang wanita keturunan kedua yang tinggal di
                                    Rantau Prapat yang melanjutkan warisan Mie di Rantau Prapat, Medan dan dilanjutkan
                                    oleh putra putrinya yang di rantau dan saya adalah salah satu yang meneruskan dibali
                                    dan meneruskan warisan orang tua saya. Warung kami menawarkan harga yang terjangkau,
                                    dan banyak dikunjungi oleh warga sekitar dan turis. Kami menjual berbagai jenis mie,
                                    seperti mie ayam, mie goreng, dan mie kuah. Warung kami buka setiap hari dari pukul
                                    10:00 sampai 21:00, dan juga tersedia di aplikasi pesan antar seperti Gojek, Grab
                                    dan Shopee.
                                </p>
                                <a href="https://wa.me/087873868409" class="btn btn-icon icon-left btn-success">
                                    <i class="fab fa-whatsapp"></i>
                                    Whatsapp
                                </a>
                                <a href="#" class="btn btn-icon icon-left btn-warning">
                                    <i class="fab fa-instagram"></i>
                                    Instaram
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- <section id="testimonial">
                <div class="card-body">
                    <center>
                        <h3>
                            Testimonial
                        </h3>
                        <span>
                            Review dari pengunjung kami
                        </span>
                    </center>
                </div>
            </section> --}}

                <section id="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.46927469669205!2d115.17465871127487!3d-8.738141616989486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246a89bc300ef%3A0xd91c6b84619c8541!2sBakmi%20Medan%20Alang!5e0!3m2!1sid!2sid!4v1701777818386!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>

            </div>

        </div>

    </section>

    <div class="modal fade" id="viewModal">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>
@endsection
