@extends('layouts.app')

@section('title', 'Línea Cerdo - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
@endpush

@section('content')

    {{-- HERO CERDO --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Cerdo</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/cerdo.svg') }}" alt="Cerdo">
            </div>

            <h1 class="rp-line-hero-title">Cerdo</h1>

            <p class="rp-line-hero-text mb-0">
                El cerdo Rico es fruto de la experiencia en toda la cadena productiva,
                desde la genética y la alimentación hasta el procesado de la carne.
                Así se obtienen cortes sabrosos y tiernos para platos cotidianos y
                preparaciones especiales.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Línea de cerdo Rico</span>
            </div>
        </div>

        {{-- Sugerencia de imagen: foto de sandwich de cerdo / pork burger --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/chicharron_gran.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS CERDO --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Chuletas --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/chuleta-1.jpg') }}"
                            alt="Chuletas de cerdo"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Chuletas</p>
                        </div>
                    </article>
                </div>

                {{-- Cortes especiales --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/cortes_especiales-1.jpg') }}"
                            alt="Cortes especiales de cerdo"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Cortes especiales</p>
                        </div>
                    </article>
                </div>

                {{-- Lechón --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/lechon-2.jpg') }}"
                            alt="Lechón"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Lechón</p>
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
                        Regístrate y recibe promociones, recetas con cerdo,
                        novedades y noticias de Rico Alimentos.
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
