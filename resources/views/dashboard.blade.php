@extends('master')
@section('container')
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->



    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3">Spa & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Massage Treatment</h1>
                            <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center
                            </h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Facial Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty Center
                            </h4>
                            <h1 class="display-1 text-capitalize text-dark">Cellulite Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                <h1 class="display-3">Spa & Beauty Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($query as $q)
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>{{ $q->name }}</h3>
                                        <p>{{ $q->description }}</p>
                                        <a href="#"
                                            class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make
                                            Order</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="{{ asset('img/' . $q->image) }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12">
                    <div class="services-btn text-center">
                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Service
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="video">
                        <img src="img/about-1.jpg" class="img-fluid rounded" alt="">
                        <div class="position-absolute rounded border-5 border-top border-start border-white"
                            style="bottom: 0; right: 0;;">
                            <img src="img/about-2.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="fs-4 text-uppercase text-primary">About Us</p>
                    <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-gift fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Our Gallery</p>
                <h1 class="display-4 mb-4">Let's See Our Gallery</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Skin Care</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Stream Bath</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Stone Therapy</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Face Massage</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-1.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-1.jpg" data-lightbox="Gallery-1" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-2.jpg" data-lightbox="Gallery-2" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-3.jpg" data-lightbox="Gallery-3" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-4.jpg" data-lightbox="Gallery-4" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-5.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-5.jpg" data-lightbox="Gallery-5" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-6.jpg" data-lightbox="Gallery-6" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-7.jpg" data-lightbox="Gallery-7" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-8.jpg" data-lightbox="Gallery-8" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-9.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-9.jpg" data-lightbox="Gallery-9" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-10.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-10.jpg" data-lightbox="Gallery-10"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-5.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-5.jpg" data-lightbox="Gallery-11" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-1.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Skin Care</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-1.jpg" data-lightbox="Gallery-12" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-11.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-11.jpg" data-lightbox="Gallery-13"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-12.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-12.jpg" data-lightbox="Gallery-14"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-2.jpg" data-lightbox="Gallery-15" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stream Bath</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-6.jpg" data-lightbox="Gallery-16" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-13.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-13.jpg" data-lightbox="Gallery-17"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-2.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-2.jpg" data-lightbox="Gallery-18" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-3.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-3.jpg" data-lightbox="Gallery-19" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-7.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Stone Therapy</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-7.jpg" data-lightbox="Gallery-20" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-4.jpg" data-lightbox="Gallery-21" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-6.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-6.jpg" data-lightbox="Gallery-22" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-8.jpg" data-lightbox="Gallery-23" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-14.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-14.jpg" data-lightbox="Gallery-24"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-4.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-4.jpg" data-lightbox="Gallery-25" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="img/gallery-8.jpg" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Face Massage</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/gallery-8.jpg" data-lightbox="Gallery-26" class="my-auto"><i
                                                        class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
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
    </div>
    <!-- gallery End -->


    <!-- Pricing Start -->
    <div class="container-fluid pricing py-5">
        <div class="container py-5">
            <div class="owl-carousel pricing-carousel">
                @foreach ($query as $q)
                    <div class="pricing-item">
                        <div class="rounded pricing-content">
                            <div
                                class="d-flex align-items-center justify-content-between bg-light rounded-top border-3 border-bottom border-primary p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted"
                                        style="font-size: 22px; line-height: 45px;">Rp</small><strong style="font-size: 30px;">{{$q->price}}</strong><small
                                        class="text-muted" style="font-size: 10px; line-height: 40px;">/Mo</small>
                                </h1>
                            </div>
                            <div class="p-4">
                                <p><i class="fa fa-check text-primary me-2"></i>{{ $q->duration }} menit</p>
                                <p><i class="fa fa-check text-primary me-2"></i>{{ $q->name }}</p>
                                <a href=""
                                    class="btn btn-primary btn-primary-outline-0 rounded-pill my-2 px-4">Order
                                    Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Spa Specialist</p>
                <h1 class="display-4 mb-4">Spa & Beauty Specialist</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-1.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Oliva Mia</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-2.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Charlotte Ross</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-3.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Amelia Luna</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="img/team-4.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Isabella Evelyn</h3>
                            <p class="mb-0 text-white">Spa & Beauty Expert</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                <h1 class="display-4 mb-4 text-white">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                                    labore et dolore magna aliqua is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                                    labore et dolore magna aliqua is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut
                                    labore et dolore magna aliqua is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
