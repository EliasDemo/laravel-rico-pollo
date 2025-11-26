<nav class="navbar navbar-expand-lg navbar-rp fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <span style="color: #ffd200;">Rico</span>
            <span style="color: #ffffff;">Pollo</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarRicoPollo"
                aria-controls="navbarRicoPollo"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarRicoPollo">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}"
                       href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                       href="{{ route('nosotros') }}">
                        Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }}"
                       href="{{ route('productos.index') }}">
                        Productos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('descargas') ? 'active' : '' }}"
                       href="{{ route('descargas') }}">
                        Descargas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                       href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
