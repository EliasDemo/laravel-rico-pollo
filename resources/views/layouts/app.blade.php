<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Rico Pollo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap desde CDN --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        :root {
            --rp-rojo: #c8102e;
            --rp-amarillo: #ffd200;
            --rp-oscuro: #2b2b2b;
            --rp-azul-oscuro: #101528;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        /* ===========================
           NAVBAR RICO POLLO
           =========================== */
        .navbar-rp {
            background-color: var(--rp-azul-oscuro) !important;
            padding: 0.8rem 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-rp.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            padding: 0;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--rp-amarillo) !important;
            background-color: rgba(255, 210, 0, 0.1);
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link.active {
            color: var(--rp-amarillo) !important;
            background-color: rgba(255, 210, 0, 0.15);
            font-weight: 600;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background-color: var(--rp-amarillo);
            border-radius: 2px;
        }

        .navbar-toggler {
            border: 2px solid var(--rp-amarillo);
            padding: 0.4rem 0.6rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(255, 210, 0, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 210, 0, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Efecto de subrayado animado en hover */
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--rp-amarillo);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::before {
            width: 70%;
        }

        /* Responsive navbar */
        @media (max-width: 991px) {
            .navbar-nav .nav-link {
                margin: 0.1rem 0;
                text-align: center;
            }

            .navbar-nav .nav-link.active::after {
                display: none;
            }

            .navbar-collapse {
                background-color: var(--rp-azul-oscuro);
                padding: 1rem;
                border-radius: 0 0 10px 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                margin-top: 0.5rem;
            }
        }

        /* ===========================
           BOTONES / HERO / FOOTER
           =========================== */
        .btn-rp {
            background-color: var(--rp-rojo);
            color: #fff;
            border: none;
        }

        .btn-rp:hover {
            background-color: #a30d24;
            color: #fff;
        }

        .hero-rp {
            background: linear-gradient(135deg, var(--rp-rojo), var(--rp-amarillo));
            color: #fff;
            padding: 6rem 0 5rem 0;
        }

        .section-title {
            color: var(--rp-rojo);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            font-size: 0.9rem;
        }

        .rp-footer {
            background-color: var(--rp-oscuro);
            color: #ddd;
            padding: 1.5rem 0;
            font-size: 0.9rem;
        }

        main {
            padding-top: 4.5rem; /* espacio del navbar fijo */
        }
    </style>

    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Efecto de scroll para el navbar --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.querySelector('.navbar-rp');
            if (!navbar) return;

            function onScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', onScroll);
            onScroll(); // por si la página ya está scrolleada al cargar
        });
    </script>

    @stack('scripts')
</body>
</html>
