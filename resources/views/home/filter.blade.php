@extends('layouts.homebase')
@section('content')
    {{-- post items --}}
    @if(count($products) != 0)
        
    
    <div class="container my-5">
        <div class="head text-center"><h4 class="fw-light text-center">{{ "category title here " }} <br> <img src="{{ asset('star.jpg') }}" alt="" class="img-fluid" style="width: 360px;"></h4></div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card border-0 shadow-sm post-item" style="border-radius: 5px;">
                        <img src="{{ asset('product/'.$product->cover_image) }}" style="height: 266px; object-fit:cover; object-position:center;" alt="" class="img-fluid card-img-top">
                        <div class="card-body">
                            <a href="{{ route('home.product',['name'=>$product->slug]) }}" class="stretched-link text-decoration-none text-dark"><h6 class="text-truncate">{{ $product->title }}</h6></a>
                                <p class="h6 text-theme mt-2">₹. {{ $product->discount_price }}/- <del class="ms-2 text-muted small">₹. {{ $product->price }}/-</del></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="container pt-5 mb-5">
        <div class="row my-5">
            <div class="col-lg-5 mx-auto">
            <h5 class="text-center font-weight-light text-muted">No items Found!</h5>
            <p class="text-center small text-muted">Please check with another category :)</p>
            </div>
        </div>
    </div>
    @endif

    {{-- post items end --}}
@endsection