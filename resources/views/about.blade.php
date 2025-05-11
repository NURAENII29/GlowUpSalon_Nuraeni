@extends("master")
@section("container")

 <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About Us</li>
                </ol>    
            </div>
        </div>
 <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="img/about-1.jpg" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <img src="img/about-2.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">About Us</p>
                            <h1 class="display-4 mb-4">Rasakan Sentuhan Kecantikan yang Sempurna</h1>
                            <p class="mb-4">Kami adalah salon kecantikan yang mengutamakan kenyamanan, kualitas, dan kepuasan pelanggan. Dengan tenaga profesional dan produk terbaik, kami hadir untuk memancarkan kecantikan alami Anda.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Facial & Perawatan Wajah</h5>
                                            <p class="mb-0">Rawat kulit wajah Anda dengan perawatan profesional yang menyegarkan dan menyehatkan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Body Spa & Massage</h5>
                                            <p class="mb-0">Relaksasi menyeluruh untuk tubuh dan pikiran Anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="my-4">“Yuk, reservasi sekarang & rasakan transformasinya!”</p>
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
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection