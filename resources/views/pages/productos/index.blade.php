@extends('layouts.app')

@section('title', 'Productos - Rico Pollo')

@push('styles')
    {{-- Font Awesome para los íconos --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        /* ===========================
           HERO "PASIÓN QUE ALIMENTA VIDAS"
           =========================== */
        .rp-hero-split {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.3fr);
            min-height: 280px;
        }

        .rp-hero-left {
            background-color: #101528; /* azul oscuro */
        }

        .rp-hero-right {
            background-color: #f5f5f5;
            padding: 3.5rem 2.5rem;
            position: relative;
        }

        .rp-hero-badge {
            position: absolute;
            top: 1.5rem;
            left: -1.8rem;
            width: 80px;
            height: 80px;
            border-radius: 999px;
            border: 8px solid #ffd200;
            border-right-color: transparent;
            border-bottom-color: transparent;
            transform: rotate(25deg);
        }

        .rp-hero-title {
            font-size: 2.1rem;
            font-weight: 700;
            color: #101528;
        }

        .rp-hero-text {
            font-size: 0.95rem;
            color: #444;
            max-width: 420px;
        }

        @media (max-width: 768px) {
            .rp-hero-split {
                grid-template-columns: minmax(0, 1fr);
            }

            .rp-hero-right {
                padding: 2.5rem 1.5rem;
            }
        }

        /* ===========================
           NUESTRAS LÍNEAS EN CÍRCULO - MEJORADO
           =========================== */
        .rp-lines-section {
            padding: 3.5rem 0;
            background-color: #ffffff;
            overflow: hidden;
        }

        .rp-lines-title {
            font-size: 1.9rem;
            font-weight: 700;
            color: #101528;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .rp-lines-circle-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2.5rem;
            padding: 1rem;
        }

        .rp-lines-circle {
            position: relative;
            width: 340px;
            height: 340px;
            max-width: 90vw;
            max-height: 90vw;
            margin: 0 auto;
        }

        .rp-lines-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;
            background: white;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .rp-lines-center:hover {
            transform: translate(-50%, -50%) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .rp-lines-center h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #101528;
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }

        .rp-lines-center p {
            font-size: 0.75rem;
            color: #666;
            margin-bottom: 0;
            line-height: 1.3;
            padding: 0 10px;
        }

        .rp-line-node {
            position: absolute;
            width: 92px;
            height: 92px;
            border-radius: 50%;
            background-color: #ffffff;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 2;
            transform-origin: center;
        }

        .rp-line-node:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            z-index: 3;
        }

        .rp-line-node:active {
            transform: translateY(-2px) scale(1.05);
            transition: all 0.1s ease;
        }

        .rp-line-icon {
            margin-bottom: 0.2rem;
            transition: transform 0.3s ease;
        }

        .rp-line-node:hover .rp-line-icon {
            transform: scale(1.2);
        }

        .rp-line-icon img {
            width: 36px;
            height: 36px;
            display: block;
            transition: filter 0.3s ease;
        }

        .rp-line-node:hover .rp-line-icon img {
            filter: brightness(1.1);
        }

        .rp-line-node span {
            font-size: 0.8rem;
            color: #101528;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .rp-line-node:hover span {
            color: #e60000;
        }

        /* Posiciones alrededor del círculo usando transform rotate y translate */
        .rp-line-node--pollo {
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .rp-line-node--preparados {
            top: 25%;
            right: 6.7%;
            transform: translate(50%, -50%);
        }

        .rp-line-node--licores {
            top: 75%;
            right: 6.7%;
            transform: translate(50%, -50%);
        }

        .rp-line-node--aceites {
            bottom: 0%;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        .rp-line-node--huevo {
            top: 75%;
            left: 6.7%;
            transform: translate(-50%, -50%);
        }

        .rp-line-node--embutidos {
            top: 25%;
            left: 6.7%;
            transform: translate(-50%, -50%);
        }

        .rp-line-node--cerdo {
            top: 50%;
            left: 0%;
            transform: translate(-50%, -50%);
        }

        /* Efecto de pulso para el círculo central */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 210, 0, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 210, 0, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 210, 0, 0);
            }
        }

        .rp-lines-center::after {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            z-index: -1;
            animation: pulse 2s infinite;
        }

        /* Líneas conectores (opcional) */
        .rp-connector {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1px;
            height: 50%;
            background: linear-gradient(to top, rgba(0,0,0,0.1), transparent);
            transform-origin: 0 0;
            z-index: 0;
        }

        /* Responsive mejorado */
        @media (max-width: 768px) {
            .rp-lines-circle {
                width: 280px;
                height: 280px;
            }

            .rp-line-node {
                width: 75px;
                height: 75px;
            }

            .rp-lines-center {
                width: 100px;
                height: 100px;
            }

            .rp-lines-center h3 {
                font-size: 1rem;
            }

            .rp-lines-center p {
                font-size: 0.7rem;
            }

            .rp-line-icon img {
                width: 30px;
                height: 30px;
            }

            .rp-line-node span {
                font-size: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .rp-lines-circle {
                width: 240px;
                height: 240px;
            }

            .rp-line-node {
                width: 65px;
                height: 65px;
            }

            .rp-lines-center {
                width: 85px;
                height: 85px;
            }

            .rp-lines-center h3 {
                font-size: 0.9rem;
            }

            .rp-lines-center p {
                font-size: 0.65rem;
            }

            .rp-line-icon img {
                width: 25px;
                height: 25px;
            }

            .rp-line-node span {
                font-size: 0.7rem;
            }
        }

        /* ===========================
           MÉTRICAS / DATOS CORPORATIVOS
           =========================== */
        .rp-metric-card {
            background-color: #fff;
            border-radius: 1rem;
            padding: 1.4rem 1.2rem;
            text-align: center;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .rp-metric-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .rp-metric-icon {
            font-size: 2rem;
            color: #101528;
            margin-bottom: 0.35rem;
            transition: transform 0.3s ease;
        }

        .rp-metric-card:hover .rp-metric-icon {
            transform: scale(1.1);
        }

        .rp-metric-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #101528;
            margin-bottom: 0.15rem;
        }

        .rp-metric-label {
            font-size: 0.85rem;
            color: #555;
        }

        .rp-metric-caption {
            font-size: 0.8rem;
            color: #777;
        }

        /* ===========================
           CTA TIENDA VIRTUAL
           =========================== */
        .rp-shop-cta {
            background-color: #ffd200;
            padding: 3rem 0;
        }

        .rp-shop-cta h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #101528;
        }

        .rp-shop-cta p {
            margin-bottom: 0;
        }
    </style>
@endpush

@section('content')

    {{-- HERO TIPO "PASIÓN QUE ALIMENTA VIDAS" --}}
    <section class="rp-hero-split">
        <div class="rp-hero-left"></div>
        <div class="rp-hero-right d-flex flex-column justify-content-center">
            <div class="rp-hero-badge"></div>

            <h1 class="rp-hero-title mb-3">
                Pasión que<br>alimenta vidas
            </h1>
            <p class="rp-hero-text mb-0">
                Llevamos a la mesa de los hogares productos pensados para el consumo
                diario, protegiendo la calidad y el buen sabor. Esta página resume
                nuestras principales líneas de productos dentro de la corporación.
            </p>
        </div>
    </section>

    {{-- NUESTAS LÍNEAS EN CÍRCULO - MEJORADO --}}
    <section class="rp-lines-section">
        <div class="container text-center">
            <p class="section-title mb-1">Nuestras</p>
            <h2 class="rp-lines-title">Líneas</h2>

            <div class="rp-lines-circle-wrapper">
                <div class="rp-lines-circle">

                    {{-- Centro --}}
                    <div class="rp-lines-center">
                        <h3>Nuestras<br>líneas</h3>
                        <p>Haz clic en una categoría<br>para ver más detalle.</p>
                    </div>

                    {{-- Cerdo --}}
                    <a href="{{ route('productos.cerdo') }}"
                       class="rp-line-node rp-line-node--cerdo">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/cerdo.svg') }}" alt="Cerdo">
                        </div>
                        <span>Cerdo</span>
                    </a>

                    {{-- Pollo --}}
                    <a href="{{ route('productos.pollo') }}"
                       class="rp-line-node rp-line-node--pollo">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/pollo.svg') }}" alt="Pollo">
                        </div>
                        <span>Pollo</span>
                    </a>

                    {{-- Preparados --}}
                    <a href="{{ route('productos.preparados') }}"
                       class="rp-line-node rp-line-node--preparados">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/preparados.svg') }}" alt="Preparados">
                        </div>
                        <span>Preparados</span>
                    </a>

                    {{-- Embutidos --}}
                    <a href="{{ route('productos.embutidos') }}"
                       class="rp-line-node rp-line-node--embutidos">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/embutidos.svg') }}" alt="Embutidos">
                        </div>
                        <span>Embutidos</span>
                    </a>

                    {{-- Huevo --}}
                    <a href="{{ route('productos.huevo') }}"
                       class="rp-line-node rp-line-node--huevo">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/huevo.svg') }}" alt="Huevo">
                        </div>
                        <span>Huevo</span>
                    </a>

                    {{-- Aceites --}}
                    <a href="{{ route('productos.aceites') }}"
                       class="rp-line-node rp-line-node--aceites">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/aceites.svg') }}" alt="Aceites">
                        </div>
                        <span>Aceites</span>
                    </a>

                    {{-- Licores --}}
                    <a href="{{ route('productos.licores') }}"
                       class="rp-line-node rp-line-node--licores">
                        <div class="rp-line-icon">
                            <img src="{{ asset('img/iconos/productos/licores.svg') }}" alt="Licores">
                        </div>
                        <span>Licores</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

    {{-- MÉTRICAS / DATOS CORPORATIVOS --}}
    <section class="py-5" style="background-color:#f3f4f7;">
        <div class="container">
            <p class="section-title mb-1">Una familia, una corporación,</p>
            <h2 class="h4 mb-4" style="color:#101528;">somos Rico Alimentos</h2>

            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="rp-metric-card">
                        <div class="rp-metric-icon">
                            <i class="fa-solid fa-tractor"></i>
                        </div>
                        <div class="rp-metric-number"
                             data-counter
                             data-target="17">
                            1
                        </div>
                        <div class="rp-metric-label">granjas</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="rp-metric-card">
                        <div class="rp-metric-icon">
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <div class="rp-metric-number"
                             data-counter
                             data-target="74"
                             data-prefix="+ ">
                            1
                        </div>
                        <div class="rp-metric-label">tiendas Rico</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="rp-metric-card">
                        <div class="rp-metric-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="rp-metric-number"
                             data-counter
                             data-target="4300"
                             data-prefix="+ ">
                            1
                        </div>
                        <div class="rp-metric-label">colaboradores</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="rp-metric-card">
                        <div class="rp-metric-icon">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="rp-metric-number"
                             data-counter
                             data-target="58">
                            1
                        </div>
                        <div class="rp-metric-label">años de experiencia</div>
                    </div>
                </div>
            </div>

            <p class="rp-metric-caption text-center mt-3 mb-0">
                Cifras de ejemplo basadas en la información pública de la corporación.
                Pueden actualizarse según los datos oficiales vigentes.
            </p>
        </div>
    </section>

    {{-- BANNER "TIENDA VIRTUAL" --}}
    <section class="rp-shop-cta">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <p class="small mb-1">Recibe tus productos en la comodidad de tu casa</p>
                    <h3 class="mb-1">Visita pronto nuestra tienda virtual</h3>
                    <p class="small text-muted">
                        Este espacio puede enlazar en el futuro a una plataforma de
                        comercio electrónico o a un formulario de pedidos.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="btn btn-outline-dark btn-sm" disabled>
                        Próximamente disponible
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Contador tipo "casino" para las métricas
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('[data-counter]');
            const duration = 1500; // duración total de la animación en ms

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                const prefix = counter.getAttribute('data-prefix') || '';
                const suffix = counter.getAttribute('data-suffix') || '';
                let startTimestamp = null;

                function step(timestamp) {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    let current = Math.floor(progress * target);

                    // Para que arranque en 1 (si el objetivo es al menos 1)
                    if (target >= 1) {
                        current = Math.max(1, current);
                    }

                    counter.textContent = prefix + current.toLocaleString('es-PE') + suffix;

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                }

                window.requestAnimationFrame(step);
            });

            // Efecto adicional para los nodos del círculo
            const nodes = document.querySelectorAll('.rp-line-node');
            nodes.forEach(node => {
                node.addEventListener('mouseenter', function() {
                    // Agregar una clase para destacar el nodo activo
                    this.style.zIndex = '10';
                });

                node.addEventListener('mouseleave', function() {
                    // Restaurar el z-index original
                    this.style.zIndex = '2';
                });
            });
        });
    </script>
@endpush
