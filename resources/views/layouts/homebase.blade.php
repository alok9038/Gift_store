    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kumar Studio</title>
        <!-- CSS only -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/font.js') }}" crossorigin="anonymous"></script>
    </head>
    <style>
        .menu-toggle {
            position: fixed;
            left: 15px;
            top:3px;
            padding-top: 5px;
            width: 50px;
            height: 50px;
            text-align: center;
            color:white;
            transition: all linear .2s;
            line-height: 50px;
            z-index: 9999;
        }
        .side-toggle{
            position: fixed;
            right: 15px!important;
            top:6px;
            padding-top: 5px;
            width: 50px;
            height: 50px;
            text-align: center;
            color:white;
            transition: all linear .2s;
            line-height: 50px;
            z-index: 9999;
        }
        .mobile-cart{
            position: fixed;
            right: 15px!important;
            top:0;
            width: 50px;
            text-align: center;
            color:white;
            transition: all linear .2s;
            line-height: 40px;
            z-index: 9999;
        }
        .menu-toggle:focus,
        .menu-toggle:hover {
            color:white;
        }
        
        .menu-toggle:hover {
            background: #ff616f;
        }

        .cat .nav-link:hover{
            color: #ff1744!important;
        }
        .cat .nav-link{
            color: black!important;
            font-weight: 500;
        }
        /* ************************ */
        #sidebar-wrapper {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            transition: all 0.5s ease 0s;
            transform: translateX(-250px);
            background: #1a1a2e;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        .sidebar-nav li.sidebar-nav-item a {
            display: block;
            text-decoration: none;
            color: #fff;
            padding: 15px;
        }
        .sidebar-nav li a:hover {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }
        
        .sidebar-nav > .sidebar-brand {
            font-size: 1.2rem;
            background: rgba(52, 58, 64, 0.1);
            height: 80px;
            text-decoration: none;
            line-height: 50px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }
        .sidebar-nav > .sidebar-brand a {
            color: #fff;
        }
        
        .sidebar-nav > .sidebar-brand a:hover {
            color: #fff;
            background: none;
        }
        
        #sidebar-wrapper.active {
            left: 250px;
            width: 250px;
            transition: all 0.4s ease 0s;
        }
        .menu-toggle{
            display:none;
        }

        .h-link{
            transition: .2s linear all;
        }
        .h-link .nav-link{
            color: white!important;
        }
        .h-link .nav-link:hover{
            color: lightgrey!important;
        }
        .content{
            margin-top: 170px;
        }
        .mobile-cart{
            display: none;
        }
        .navbar-mobile{
        display: none;
        }
        .desktop-navbar{
        position:-webkit-sticky;position:sticky;top:0;z-index:9999;
        }

        @media (max-width: 992px) {
                .desktop-nav, .desktop-search{
                    display: none;
                }
                .content{
                    margin-top: 120px;
                }
                .menu-toggle{
                    display: block;
                }
                .desktop-navbar{
                position: relative;
                z-index:0;
                }
                .navbar-brand, .logo{
                    margin-left: auto;
                    margin-right: auto;
                    width: calc(100% - 50%);
                }
                .home-img{
                    background-size: cover!important;
                    background-position:top 0px center!important;
                    margin-top: 0px;;
                    height: 290px;
                    padding-bottom: 50px!important;
                }
                .navbar-mobile{
                    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
                    position: fixed!important;
                    display:block;
                    width: 100%;
                }
                .mobile-cart{
                    display: block;
                    z-index:9999;
                }
                .post-item .card-img-top{
                    height: 330px!important;
                    object-fit: cover!important;
                }
                
                .post-item{
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                }
                .footer{
                margin-bottom:67px;
                }
        }

        @media (max-width:1300){
            .sidebar-wrapper{
                display: none;
            }
            .home-img{
                background-size: cover;
                background-position:bottom 0px center!important;
            
            }
            
        }
        @media (max-width:1100){
            
            .home-img{
                background-size: cover;
                height: auto;
            
            }
            
        }

        .home-img{
            
            /* background-attachment:fixed;  */
            background-size:100%; 
            /* background-position:top 63px center; */
            background-repeat:no-repeat;
            height: 100%;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }
        
        .sticky + .content {
            padding-top: 60px;
        }
        .post-item{
            transition: .3s all linear;
            box-shadow: 0 .1rem 0.5rem rgba(0,0,0,.45)!important;
        }
        .post-item:hover, .post-item:active{
            box-shadow: 0 .8rem 1rem rgba(0,0,0,.55)!important;
        }
        .overlay{
            position: absolute;
            bottom: 0;
            color: white;
            padding: 20px;
            width: 99.4%;
            background-color: rgba(0, 0, 0, 0.61);
        }
        



        /* .category-slider */

        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider
        {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                    user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
                touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list
        {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }
        .slick-list.dragging
        {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
        }

        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;
            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }

        .slick-slide
        {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide img
        {
            display: block;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }
        .paginator {
        margin-bottom: 30px;
        }
        .prev, .next{
        color:grey;
        }
        .prev:hover, .next:hover{
        color:#ff1744;
        cursor: pointer;
        }
        .slider-wrapper {
        width: auto;
        }

        .slider-for__item img {
        width: 100%;
        }

        .slider-nav__item {
        height: 90px;
        cursor: pointer;
        }

        /* custom theme color */

        .bg-theme{
            background-color:#ff1744;
        }
        .text-theme{
            color: #ff1744;
        }
        .bg-green{
            background-color: #00c853;
        }
        .mobile-foot-menu{
            -webkit-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.75);
            -moz-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.75);
            box-shadow: 0px -0.1rem 0.5rem rgba(50, 50, 50, 0.781);
        }
        /* social icon */

        .social-icon ul{
            padding:0;
        }
        .social-icon ul li{
            display: inline;
        }
        .fa-facebook, .fa-instagram, .fa-twitter, .fa-youtube{
            color: white;
            padding: 0 14px;
            height: 40px;
            padding-top: 12px;
            font-size: 1.1rem;
            border-radius: 12px;
            background-color: #102027;
            transition: all .3s linear;
        }
        .fa-facebook:hover{
            
            background-color: #3b5998;
        }
        .fa-instagram:hover{
            background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
        }
        .fa-twitter:hover{
            background-color:#00acee ;
        }
        .fa-youtube:hover{
            background-color: #FF0000;
        }
        .ks-text{
        color: rgb(226, 226, 226);
        font-size: 1.05rem;
        }
    </style>
    <body>
        <div class="header">
            <a class="menu-toggle rounded d-lg-none d-block" href="#">
                <i class="fas fa-bars fa-2x"></i>
            </a>
            <nav id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a class="js-scroll-trigger text-decoration-none" href="#page-top">Brand</a>
                        <a class="side-toggle rounded d-lg-none d-block" id="side-toggle" href="#">
                            <i class="fas fa-bars fa-2x"></i>
                        </a>
                    </li>
                    @foreach ($category as $cat)
                    <li class="sidebar-nav-item" style="border-left:3px solid {{ $cat->color }};">
                        <a class="js-scroll-trigger" href="{{ route('filter',['name'=>$cat->slug]) }}">{{ $cat->cat_title }}</a>
                    </li>
                    @endforeach
                    
                </ul>
            </nav>   
        </div>
        <ul class="navbar-nav mobile-cart">
            @guest
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-light"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-white text-dark rounded-circle">0</span></sup></a></li>
            @endguest
            @auth
            <li class="nav-item h-link"><a href="{{ route('cart') }}" class="nav-link"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-white text-dark rounded-circle">{{ count($items) }}</span></sup></a></li>
            @endauth
        </ul>
        <nav class="navbar desktop-navbar navbar-expand-lg bg-theme navbar-dark p-1" >
            <div class="container">
                
                <a href="{{ route('homepage') }}" class="navbar-brand logo"><img src="{{ asset('kslogo.png') }}" style="height:45px;" alt="" class="img-fluid"></a>
                <form action="" class="desktop-search">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn bg-white shadow-none rounded-0"><i class="fas fa-search"></i></button>
                        </div>
                        <input type="search" name="search" size="60" class="form-control border-0 rounded-0 shadow-none">
                    </div>
                </form>
                <ul class="navbar-nav desktop-nav d-lg-flex d-none">
                    @guest
                        <li class="nav-item h-link"><a href="" class="nav-link">Login</a></li>
                        <li class="nav-item h-link"><a href="" class="nav-link">Register</a></li>
                        <li class="nav-item h-link"><a href="{{ route('login') }}" class="nav-link"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-white text-dark rounded-circle">0</span></sup></a></li>
                    @endguest
                    @auth
                    <li class="nav-item h-link"><a href="{{ route('cart') }}" class="nav-link"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-white text-dark rounded-circle">{{ count($items) }}</span></sup></a></li>
                    @endauth
                </ul>
                
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-theme navbar-dark py-2 d-lg-none sticky-top search-nav">
            <form action="" class="mx-auto" style="width: calc(100% - 150px);">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn bg-white shadow-none rounded-0"><i class="fas fa-search"></i></button>
                    </div>
                    <input type="search" name="search" class="form-control border-0 rounded-0 shadow-none">
                </div>
            </form>
        </nav>
        <nav class="navbar desktop-nav menu navbar-expand-lg shadow-sm p-0 navbar-light bg-white shadow-sm" style="z-index:1000;">
            <div class="container">
                <ul class="navbar-nav">
                    @foreach ($category as $item)
                    <li class="nav-item cat"><a href="{{ route('filter',['name'=>$item->slug]) }}" class="nav-link ps-1">{{ $item->cat_title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
        @yield('content')
        <footer  style="background-image: url({{ asset('footerbg-.jpg') }}); background-size:cover; background-attachment:fixed;" class=" footer">
            <div class="container-fluid p-0" style="background-color: #1c313a77;">
                <div class="container py-5">
                    <div class="row row-cols-lg-2 row-cols-md-2 rows-cols-sm-2 row-cols-1">
                        <div class="col mb-4">
                            <div class="ad-pro">
                                <div class="img"><img src="{{ asset('kslogo.png') }}" class="img-fluid" alt=""></div>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="" class="text-decoration-none"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="" class="text-decoration-none"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="" class="text-decoration-none"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="" class="text-decoration-none"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <p class="fw-light ks-text">
                                    Kumar Studio Gifts having pioneered the concept of personalized gifts in our city (purnea), today has become a driver of marketplace innovation and a contributor in local economies. The journey of KSF, much like the gifts which are at the very heart of its business, has been an organic one. Started in 2020 in Purnea, by the enterprising Mr. Kumar Mayank.
                                </p>
                            </div>
                            
                        </div>
                        <div class="col ">
                        <h5 class="text-white">Popular Products</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="container border-top d-flex border-secondary py-3 justify-content-middle">
                    <h6 class="text-light fw-light">© 2021 Copyright Reserved</h6>
                    
                    <h6 class="text-light fw-light ms-auto">Developed By <a href="" target="_blank" class="text-light text-decoration-none">CWS</h6>
                    
                </div>
            </div>
        </footer>


        {{-- mobile fixed bottom navigation --}}
        <nav class="navbar navbar-expand-lg d-lg-none mobile-foot-menu navbar-light bg-white fixed-bottom">
            <div class="container ">
                <div class="row d-flex w-100">
                    <div class="col-3 text-center text-dark">
                        <a href="{{ route('homepage') }}" class=" text-decoration-none text-dark">
                            <i class="fas fa-home"></i>
                            <p class="h6 fw-light small">Home</p>
                        </a>
                    </div>
                    <div class="col-3 text-center text-dark">
                        <a href="pokemon" class=" text-decoration-none text-dark">
                        <i class="fas fa-gift"></i>
                        <p class="h6 fw-light small">Orders</p>
                        </a>
                    </div>
                        <div class="col-3 text-center text-dark">
                            <a href="pokemon" class=" text-decoration-none text-dark">
                            <i class="fas fa-heart"></i>
                            <p class="h6 fw-light small">wishlist</p>
                            </a>
                        </div>
                    <div class="col-3 text-center text-dark">
                        <a href="pokemon" class=" text-decoration-none text-dark">
                        <i class="fas fa-user"></i>
                        <p class="h6 fw-light small">Account</p>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 7,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 1500,
                arrows: true,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                dots: false,
                pauseOnHover: true,
                responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
            });
        </script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
        <script src="{{ asset('js/main.js') }}"></script>

        {{-- try --}}
        <script>
            (function ($) {
                ("use strict");

                // closes the sidebar menu
                $(".menu-toggle, .side-toggle").click(function (e) {
                e.preventDefault();
                $("#sidebar-wrapper").toggleClass("active");
                $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times, .side-toggle > .fa-bars, .side-toggle > .fa-bars").toggleClass(
                "fa-bars fa-times"
                );
                $(this).toggleClass("active");
                });

                //smooth scrolling using jquery and easing
                $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
                if (
                location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
                ) {
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                $("html, body").animate(
                    {
                    scrollTop: target.offset().top,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
                }
                }
                });
                $("#sidebar-wrapper .js-scroll-trigger").click(function () {
                $("#sidebar-wrapper").removeClass("active");
                $(".menu-toggle, .side-toggle").removeClass("active");
                $(".menu-toggle > fa.bars, .menu-toggle > .fa-times, .side-toggle > fa-times, .side-toggle > .fa-times").toggleClass(
                "fa-bars fa-times"
                );
                });

                $(document).scroll(function () {
                var scrollDistance = $(this).scrollTop();
                if (scrollDistance > 100) {
                $(".scroll-to-top").fadeIn();
                } else {
                $(".scroll-to-top").fadeOut();
                }
                });
                })(jQuery);

        </script>
        {{-- try end --}}

        <script>
            var lastScrollTop = 0, px = 0, scrollDownBool = false;
            $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
                px += Math.abs(st - lastScrollTop);
                if (px >= 70) {px = 70;}
                document.querySelector(".menu").style.top = st-px+"px";
            } else {
                px -= Math.abs(st - lastScrollTop);
                if (px <= 0) {px = 0;}
                document.querySelector(".menu").style.top = st-px+"px"; 
            }
            lastScrollTop = st;
            });
        </script>
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
    </html>