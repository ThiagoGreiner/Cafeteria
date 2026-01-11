<ul class="nav flex-column">
    <li class="nav-item"> 
        <a class="nav-link text-white" href="{{ route('home') }}">
            Início
        </a> 
    </li>    

    <li class="nav-item"> 
        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">
            Painel Administrativo
        </a> 
    </li>

    <li class="nav-item">
        <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#usuariosMenu" role="button" aria-expanded="false" aria-controls="usuariosMenu">
            Cafés
            <span class="ms-2">▾</span>
        </a>

        <!-- SubMenu -->
        <div class="collapse" id="usuariosMenu">
            <ul class="nav flex-column ms-3">
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('admin.coffees.index') }}">Listar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white-50" href="{{ route('admin.coffees.create') }}">Criar</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white" href="#">Pedidos</a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white" href="#">Caixa</a>
    </li>

    @auth
        <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-link text-white" type="submit">
                Sair
            </button>
        </form>
        </li>
    @endauth
</ul>