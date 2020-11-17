<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Poppins:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">


      <link rel="stylesheet" type="text/css" href="css/style.css">
        
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bgc-primary px-2">
                <a class="navbar-brand" href="{{route('home')}}">Clinica Dental El Mellado <i class="fas fa-tooth"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarColor02">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item px-2">
                      <a class="nav-link" href="{{route('team')}}">Equipo</a>
                    </li>
                    <li class="nav-item px-2">
                      <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Especialidades
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Protesis Dental</a>
                          <a class="dropdown-item" href="#">Endodoncia</a>
                          <a class="dropdown-item" href="#">Ortodoncia</a>
                          <a class="dropdown-item" href="#">Implantes dental</a>
                        </div>
                      </li>
                  </ul>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="busque su servicio" aria-label="busque su servicio">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                  </form>
                </div>
              </nav>
        </header>
        <main class="">
            @yield('content')
        </main>

        <footer class="bgc-primary py-5">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright © Clinica dental Mellado 2020</p>
          </div>

            
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>