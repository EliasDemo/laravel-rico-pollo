@extends('layouts.app')

@section('title', 'Línea Licores - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
    <style>
        /* Age gate solo para Licores */
        .age-gate-backdrop {
            position: fixed;
            inset: 0;
            background-color: rgba(0,0,0,0.75);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
        }

        .age-gate-card {
            background-color: #ffffff;
            border-radius: 1rem;
            padding: 2rem 2.2rem;
            max-width: 420px;
            width: 90%;
            text-align: center;
            box-shadow: 0 14px 40px rgba(0,0,0,0.35);
        }

        .age-gate-card h2 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #101528;
        }

        .age-gate-card p {
            font-size: 0.9rem;
            color: #444;
            margin-bottom: 1.2rem;
        }

        .age-gate-btn {
            min-width: 120px;
        }
    </style>
@endpush

@section('content')

    {{-- OVERLAY MAYORES DE EDAD --}}
    <div id="ageGateLicores" class="age-gate-backdrop d-none">
        <div class="age-gate-card">
            <h2>Contenido solo para mayores de edad</h2>
            <p>
                Los licores Rico están destinados a personas mayores de edad.
                Confirma que tienes 18 años o más para continuar.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <button id="btnAgeYes" class="btn btn-rp age-gate-btn">
                    Sí, soy mayor de edad
                </button>
                <button id="btnAgeNo" class="btn btn-outline-secondary age-gate-btn">
                    No
                </button>
            </div>
        </div>
    </div>

    {{-- HERO LICORES --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Licores</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/licores.svg') }}" alt="Licores">
            </div>

            <h1 class="rp-line-hero-title">Licores</h1>

            <p class="rp-line-hero-text mb-0">
                Rico Alimentos cuenta con la bodega Tres Ríos, donde se elaboran
                piscos y vinos bajo la marca Costumbres y 3 Ríos, reconocidos en
                concursos nacionales e internacionales por su calidad.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Costumbres &amp; Tres Ríos</span>
            </div>
        </div>

        {{-- Fondo con copa / botella de vino/pisco --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('img/productos/hero-licores.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS LICORES --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Pisco --}}
                <div class="col-md-6">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('img/productos/licores-pisco.jpg') }}"
                            alt="Pisco Costumbres"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Pisco</p>
                            <p class="rp-subproduct-text">
                                Bajo la marca Costumbres se producen piscos puros y mosto
                                verde a partir de uvas seleccionadas del valle de Santa
                                Rita de Siguas, con numerosas medallas en concursos de
                                pisco del Perú.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- Vino --}}
                <div class="col-md-6">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('img/productos/licores-vino.jpg') }}"
                            alt="Vinos Tres Ríos"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Vino</p>
                            <p class="rp-subproduct-text">
                                Tres Ríos ofrece vinos jóvenes y variedades rosé pensadas
                                para maridar con la gastronomía peruana y acompañar
                                celebraciones especiales.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="rp-newsletter">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <h3 class="rp-newsletter-title">Regístrate a nuestro newsletter</h3>
                    <p class="rp-newsletter-text mb-0">
                        Recibe noticias de nuevos lanzamientos, premios obtenidos por
                        nuestros piscos y vinos, y recomendaciones de maridaje.
                    </p>
                </div>
                <div class="col-md-6">
                    <form class="rp-newsletter-form d-flex gap-2 mt-3 mt-md-0">
                        <input
                            type="email"
                            class="form-control rp-newsletter-input"
                            placeholder="Escribe tu correo"
                            disabled
                        >
                        <button type="button" class="rp-newsletter-btn" disabled>
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Age gate solo para la página de Licores
    document.addEventListener('DOMContentLoaded', function () {
        const gate   = document.getElementById('ageGateLicores');
        const btnYes = document.getElementById('btnAgeYes');
        const btnNo  = document.getElementById('btnAgeNo');

        if (!gate || !btnYes || !btnNo) return;

        const alreadyOk = localStorage.getItem('rp_licores_age_ok') === 'true';

        if (!alreadyOk) {
            gate.classList.remove('d-none');
        }

        btnYes.addEventListener('click', function () {
            localStorage.setItem('rp_licores_age_ok', 'true');
            gate.classList.add('d-none');
        });

        btnNo.addEventListener('click', function () {
            // Si el usuario indica que no es mayor de edad, lo llevamos al inicio
            window.location.href = "{{ route('inicio') }}";
        });
    });
</script>
@endpush
