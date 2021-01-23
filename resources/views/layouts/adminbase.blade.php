<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
    <script src="{{ asset('js/font.js') }}"></script>
    <title>Admin | Pannel</title>
</head>
<body>
    <div id="wrapper">

        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <h2><img src="{{ asset('kslogo.png') }}" alt="kumar studio" style="width:80%;"></h2>
          </div>
          <ul class="sidebar-nav">
            <li class="active">
              <a href="#"><i class="fa fa-home"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-plug"></i>Plugins</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-user"></i>Users</a>
            </li>
          </ul>
        </aside>
      
        <div id="navbar-wrapper">
          <nav class="navbar navbar-inverse bg-dark">
            <div class="container-fluid">
              <div class="navbar-header">
                <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
              </div>
            </div>
          </nav>
        </div>
      
        <section id="content-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </section>
      
      </div>

      <script>
            const $button  = document.querySelector('#sidebar-toggle');
                const $wrapper = document.querySelector('#wrapper');

                $button.addEventListener('click', (e) => {
                e.preventDefault();
                $wrapper.classList.toggle('toggled');
            });
      </script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>