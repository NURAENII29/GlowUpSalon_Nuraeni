 <!-- Navbar start -->
 <div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar d-none d-lg-block">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col-lg-8">
                 

                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-square border rounded-circle nav-fill"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-4">GlowUp Salon</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{url('dashboard')}}" class="nav-item nav-link {{Request::is('dashboard')? 'active':' '}}">Home</a>
                        <a href="{{url('service')}}" class="nav-item nav-link {{Request::is('service')? 'active':' '}}">Services</a>
                        <a href="price.html" class="nav-item nav-link">Price</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{Request::is('pages/*')? 'active':' '}}" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="{{url('team')}}" class="dropdown-item Team">Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="gallery.html" class="dropdown-item">Gallery</a>
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="404.html" class="dropdown-item">404 page</a>
                            </div>
                        </div>
                        <a href="{{url('contact')}}" class="nav-item nav-link {{Request::is('contact')? 'active':' '}}">Contact Us</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="index.html" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4" style="font-size: 15px;"> <i class='bx bx-user-plus' style="font-size: 20px;"></i> Tambah Data Diri</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->