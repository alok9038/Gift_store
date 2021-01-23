@extends('layouts.homebase')
@section('content')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    {{-- <script src="https://wp.incredibbble.com/writsy-shop/wp-content/themes/writsy-shop/assets/vendor/jquery-zoom/jquery.zoom.min.js?ver=1.7.18"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> 
--}}

    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-lg-5 p-0">
                <div class="slider-wrapper ">
                    <div class="slider-for" style="height: auto">

                      <div class="slider-for__item" data-src="{{ asset('pink-teddy.png') }}">
                        <img src="{{ asset('pink-teddy.png') }}" class="img-fluid border" alt="" />
                      </div>
                      <div class="slider-for__item" data-src="{{ asset('tshirts.png') }}">
                        <img src="{{ asset('tshirts.png') }}" class="img-fluid border" alt="" />
                      </div>

                    </div>
                  
                    <div class="slider-nav">

                      <div class="slider-nav__item me-0">
                        <img src="{{ asset('pink-teddy.png') }}" class="border img-fluid h-100" alt="" />
                      </div>
                      <div class="slider-nav__item m-0">
                        <img src="{{ asset('tshirts.png') }}" class="border img-fluid h-100" alt="" />
                      </div>

                    </div>
                  </div>        
            </div>    
            <div class="col-lg-7 px-3">
                <h1 class="h4">Personalized Teddy With Personalized Love Meter</h1> 
                <p class="small">Soft toys</p> 
                <p class="h5 text-danger">₹. 799/- <del class="ms-2 text-muted small">₹. 1499/-</del></p>
                <span class="badge bg-success rounded-0">44% Discount</span>
                <div class=" mt-4">
                    <a href="" class="btn btn-success rounded-0 shadow-none">Add to cart</a>
                    <a href="" class="btn btn-secondary rounded-0 shadow-none">Know More</a>
                </div>
                <span class="badge bg-info rounded-0 py-2 mt-3">Bulk enquiry</span>
                <div class="alert alert-secondary rounded-0 small mt-4">
                    Free Delivery In Purnea (Urban) <br>
                    Cancellation Allow Before Order Processing
                </div>
            </div>    
        </div>    
    </div>    

    <div class="container mt-5 px-3">
        <div class="card rounded-0">
            <a class="text-decoration-none text-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="card-header rounded-0 ">Product Description</div>
            </a>    
            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veritatis hic non saepe velit incidunt quos tempora nulla eum repellendus, officiis debitis ipsa quia obcaecati fuga odio. Nulla, quia itaque.</p>
                </div>
            </div>
        </div>        
    </div>

    <div class="container px-3 my-5 ">
        <div class="head mb-3" style="border-bottom: 2px solid #ff1744;">
            <div class="d-inline-flex py-1 px-4 text-white bd-highlight bg-theme">Similar Products</div>
            <a href="" class="text-muted text-decoration-none float-end">view all</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-2 pb-5">
            <div class="col">
                <div class="card border-0 shadow-sm post-item" style="border-radius: 5px;">
                    <img src="{{ asset('pink-teddy.png') }}" style="height: 266px; object-fit:cover; object-position:center;" alt="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h6 class="text-truncate">Personalized Teddy With Personalized love meter pink</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm post-item" style="border-radius: 5px;">
                    <img src="{{ asset('pink-teddy.png') }}" style="height: 266px; object-fit:cover; object-position:center;" alt="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h6 class="text-truncate">Personalized Teddy With Personalized love meter pink</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm post-item" style="border-radius: 5px;">
                    <img src="{{ asset('pink-teddy.png') }}" style="height: 266px; object-fit:cover; object-position:center;" alt="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h6 class="text-truncate">Personalized Teddy With Personalized love meter pink</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
         // SLICK
            $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
            slidesToShow: 4,
            arrows:false,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true
            });

            
    </script>
@endsection
