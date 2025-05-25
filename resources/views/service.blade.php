@extends('master')
@section('container')
    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                <h1 class="display-3">Spa & Beauty Services</h1>
            </div>
            <div class="row g-4">
                @foreach ( $query as $q )
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>{{$q->name}}</h3>
                                    <p>{{$q->description}}</p>
                                    <a href="#"
                                        class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{asset('img/'.$q->image)}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12" style="display:flex; justify-content:center;">
                    {{$query->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
