@extends('layouts.homebase')
@section('content')
    <div class="container-fluid p-0" style="background-image:url({{ asset('hero.jpg') }}); height:400px; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col mt-5">
                    <div class="card border-0 text-white shadow-sm rounded-0" style="backdrop-filter: blur(10px); background-color:rgba(2, 2, 2, 0.336);">
                        <div class="card-body">
                            <h1 class="fw-light">Personalized Gifts</h1>
                            <p class="lead">Make the one you love the most by treating them with something super special Gifts.</p>
                            <h2 class="">Flat 10% Discount</h2>
                            <a href="" class="btn btn-danger float-end rounded-0 shadow-none">Show Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="head text-center"><h4 class="fw-light text-center">Categories <br> <img src="{{ asset('star.jpg') }}" alt="" class="img-fluid" style="width: 360px;"></h4></div>
        <div class="row">
            <div class="" style="width: 10%;">
                <div class="card border-0" style="border-radius:25px;">
                    <img src="tshirts.png" style="border-radius:50px;" class="img-fluid" alt="">
                    <div class="card-body">
                        <h6 class="text-center small">T-shirts</h6>
                    </div>
                </div>
            </div>
            <div class="" style="width: 10%;">
                <div class="card border-0" style="border-radius:25px;">
                    <img src="mobileupload.png" style="border-radius:50px;" class="img-fluid" alt="">
                    <div class="card-body">
                        <h6 class="text-center small">Mobile Cover</h6>
                    </div>
                </div>
            </div>
            <div class="" style="width: 10%;">
                <div class="card border-0" style="border-radius:25px;">
                    <img src="tshirts.png" style="border-radius:50px;" class="img-fluid" alt="">
                    <div class="card-body">
                        <h6 class="text-center small">Pillow</h6>
                    </div>
                </div>
            </div>
            <div class="" style="width: 10%;">
                <div class="card border-0" style="border-radius:25px;">
                    <img src="mobileupload.png" style="border-radius:50px; object-fit:cover;" class="img-fluid" alt="">
                    <div class="card-body">
                        <h6 class="text-center small">Mobile Cover</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="head text-center"><h4 class="fw-light text-center">Featured Post <br> <img src="{{ asset('star.jpg') }}" alt="" class="img-fluid" style="width: 360px;"></h4></div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3">
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('pink-teddy.png') }}" style="height: 266px; object-fit:cover; object-position:center;" alt="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h6 class="text-truncate">Personalized Teddy With Personalized love meter pink</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection