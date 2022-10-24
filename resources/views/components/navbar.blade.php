    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">M D N</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servizi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('visiteOptometriche')}}">Visite Optometriche</a></li>
                  <li><a class="dropdown-item" href="{{route('Ecografie')}}">Ecografie</a></li>
                  <li><a class="dropdown-item" href="{{route('OCT')}}">OCT</a></li>
                  <li><a class="dropdown-item" href="{{route('chirurgiaEstetica')}}">Chirurgia Estetica</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('contatti')}}">Contatti</a>
              </li>
            </ul>
            <div class="dimension">

            </div>
          </div>
        </div>
      </nav>