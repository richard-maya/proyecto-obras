<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/Logos_GrupoBalbek.png') }}" alt="grupo-balbek-logo" class="d-inline-block align-text-center me-4">
            Obras y Proyectos
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-regular fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Empresas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Constructora</a></li>
                        <li><a class="dropdown-item" href="#">Inatek</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión</a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>