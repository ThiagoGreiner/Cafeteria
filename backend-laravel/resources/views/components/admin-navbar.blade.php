<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logotipo Cafeteria"></a>
    
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="offcanvas offcanvas-end text-bg-dark d-lg-none" id="offcanvasDarkNavbar">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
          </li>

          @auth
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="nav-link btn btn-link" type="submit">
                    Sair
                </button>
            </form>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </div>
</nav>