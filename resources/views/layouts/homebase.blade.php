<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kumar Studio</title>
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
        <nav class="navbar navbar-expand-lg navbar-mobile  navbar-dark shadow-sm p-1" style="background-color:#ff1744;">
            <div class="container">
                <ul class="navbar-nav mobile-cart">
                    <li class="nav-item"><a href="" class="nav-link text-light"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
                <a href="" class="navbar-brand logo"><img src="{{ asset('kslogo.png') }}" style="height:45px;" alt="" class="img-fluid"></a>
                <form action="" class="d-flex">
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
        <nav class="navbar desktop-nav navbar-expand-lg sticky-top shadow-sm p-0 navbar-light bg-white shadow-sm" >
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
    </div>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
   <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>