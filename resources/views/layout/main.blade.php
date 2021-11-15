<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sistema Notícias @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="David Augusto Keller Haddad">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style type="text/css">
      html, body{
        font-family: Montserrat;
      }
      #link_topo a{
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar navbar-dark bg-dark box-shadow fixed-top">
        <div class="container d-flex justify-content-between">
          <a href="{{ route('noticias.index') }}" class="navbar-brand d-flex align-items-center">
            <strong>LOGOTIPO</strong>
          </a>

          <div class="col-lg-5 col-8 text-right" id="link_topo">
            <a href="{{ route('noticias.cadastrar') }}" class="text-white mr-3">Cadastrar Notícias</a>
            <a href="{{ route('noticias.index') }}" class="text-white">Exibir Notícias</a>
          </div>

          <form class="input-group input-group-sm col-lg-4 col-12" method="get" action="{{ route('noticias.index') }}">
            <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="search" name="search" value="<?php echo empty($_GET['search']) ? '' : $_GET['search']; ?>">
            <div class="input-group-append">
              <button type="submit" class="input-group-text btn btn-outline-secondary border-left-0" id="search"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </header>
    
    <main>
      <div class="container py-5 my-5">
        @yield('content')
      </div>
    </main>

    <footer>
      <div class="fixed-bottom bg-dark box-shadow p-2">
        <div class="container text-white text-center">
            <small>Desenvolvido por David Augusto Keller Haddad</small>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script>

    @if (Session::get('icon'))
    <script>
      Swal.fire({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('message')}}",
        showConfirmButton: false,
        timer: 1500
      })
    </script>
    @endif

    @yield('script')
  </body>
</html>