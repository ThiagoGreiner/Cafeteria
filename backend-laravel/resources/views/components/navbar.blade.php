 <!-- Navbar pública -->
 <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logotipo Cafeteria"></a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#about">Sobre Nós</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#menu">Cardápio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#local">Local</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                </li>
              @endguest

              @auth
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a>
                  </li>
              @endauth
            
          </div>

        </div>
    </nav>