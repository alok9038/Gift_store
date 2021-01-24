    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#">Home</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#">Contact</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#">service</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#">About</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a class="js-scroll-trigger" href="#"></a>
                    </li>
                </ul>
            </nav>   
        </div>
        <ul class="navbar-nav mobile-cart">
            <li class="nav-item"><a href="" class="nav-link text-light"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-white text-dark rounded-circle">0</span></sup></a></li>
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
                    <li class="nav-item h-link"><a href="" class="nav-link">Login</a></li>
                    <li class="nav-item h-link"><a href="" class="nav-link">Register</a></li>
                    <li class="nav-item h-link"><a href="" class="nav-link"><i class="fas fa-shopping-cart"></i><sup><span class="badge bg-info rounded-circle">0</span></sup></a></li>
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
                    <li class="nav-item cat"><a href="" class="nav-link ps-1">Mobile Cover</a></li>
                    <li class="nav-item cat"><a href="" class="nav-link">T-Shirts</a></li>
                    <li class="nav-item cat"><a href="" class="nav-link">Key Rings</a></li>
                    <li class="nav-item cat"><a href="" class="nav-link">Photo Frame</a></li>
                    <li class="nav-item cat"><a href="" class="nav-link">Mug/Cup</a></li>
                    <li class="nav-item cat"><a href="" class="nav-link">Pillow</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')


        <nav class="navbar navbar-expand-lg d-lg-none mobile-foot-menu navbar-light bg-white fixed-bottom">
            <div class="container ">
                <div class="row w-100">
                    <div class="col-3 text-center">
                        <i class="fas fa-home"></i>
                        <p class="h6">Home</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-gift"></i>
                        <p class="h6">Orders</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-heart"></i>
                        <p class="h6">wishlist</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="fas fa-user"></i>
                        <p class="h6">Account</p>
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