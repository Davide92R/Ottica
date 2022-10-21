<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servizi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/visiteOptometriche">Visite Optometriche</a></li>
                  <li><a class="dropdown-item" href="/Ecografie">Ecografie</a></li>
                  <li><a class="dropdown-item" href="/OCT">OCT</a></li>
                  <li><a class="dropdown-item" href="/chirurgiaEstetica">Chirurgia Estetica</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/contatti">Contatti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Navbar End --}}


    {{$slot}}

</body>
</html>