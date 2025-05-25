@extends('master')
@section('container')
    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Spa Specialist</p>
                <h1 class="display-4 mb-4">Spa & Beauty Specialist</h1>
            </div>
            <div class="row g-4">
                @foreach ($query as $q)
                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="team-item">
                            <div class="team-img rounded-top">
                                <img src="{{ asset('img/' . $q->image) }}" class="img-fluid w-100 rounded-top bg-light"
                                    alt="">
                            </div>
                            <div class="team-text rounded-bottom text-center p-4">
                                <h3 class="text-white">{{ $q->user->name }}</h3>
                                @foreach ($q->services as $b)
                                    <p class="mb-0 text-white">{{ $b->name }} Expert</p>
                                @endforeach
                            </div>
                            <div class="team-social">
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2"
                                    href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2"
                                    href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2"
                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    <div>
        {{ $query->links() }}
    </div>
    <!-- Team End -->
@endsection
