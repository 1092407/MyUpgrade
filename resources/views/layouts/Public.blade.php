<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo | @yield('title', 'HomePage')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




  </head>


  <body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- NAVBAR -->

 <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mysite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menù</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>

                @guest
                <!-- qui per registrazione e login se non sono loggato -->
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Registrati</a>
                @endguest


                @auth
                <!-- qui per logout ma solo se sono loggato -->
                <a class="nav-link active" aria-current="page" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                 </form>

                 <a class="nav-link active" aria-current="page" href="{{ route('ShowChangePassForm') }}">Change Pass</a>

                 @endauth

                <!-- qui per pagine statiche come chi siamo dove siamo ecc o se ne voglio altre  -->
              <!--  <a class="nav-link active" aria-current="page" href="#">Continuare</a>  -->
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Scopri altro
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Chi siamo</a></li>
                  <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="#">Dove siamo</a></li>
                  <hr class="dropdown-divider">
                  <li><a class="dropdown-item" href="#">La nostra missione</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </nav>
    <!--  fine NAVBAR -->




<!--  qui le varie pagine vanno a riempire il contenuto -->
       <div class="container text-center my-5" >
            @yield('content')
        </div>

<!-- Footer preso da bootstrap -->
<div class="fixed-bottom"> <!-- questo div messo io per fissare in basso  -->

<footer class="bg-dark text-center text-white"  >

  <!-- Grid container -->
  <div class="container p-4"  >

          <div class="col-auto">
            <p class="pt-2">
              <strong>Per ulteriori informazioni cosa aspetti?</strong>
            </p>
          </div>

          <div class="col-auto">
            <a  href="mailto:info@mysite.it" class="btn btn-outline-light mb-4">Contattaci subito</a>
          </div>
 </div>


  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Powered by :
    <a class="text-white" href="#">Giorgio Olivieri</a>
   </div>

</footer>  <!-- fine Footer -->

</div> <!-- fine div messo io per sistemare -->

  </body>
</html>
