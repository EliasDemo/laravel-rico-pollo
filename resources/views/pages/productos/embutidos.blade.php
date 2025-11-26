@extends('layouts.app')

@section('title', 'Línea Embutidos - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
@endpush

@section('content')

    {{-- HERO EMBUTIDOS --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Embutidos</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/embutidos.svg') }}" alt="Embutidos">
            </div>

            <h1 class="rp-line-hero-title">Embutidos</h1>

            <p class="rp-line-hero-text mb-0">
                Rico Alimentos cuenta con un portafolio de embutidos pensado para
                cada ocasión: desde productos prácticos para el consumo cotidiano,
                hasta opciones más sofisticadas para ocasiones especiales y líneas
                específicas para negocios y food service.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Marcas Rico y Casa Europa</span>
            </div>
        </div>

        {{-- Fondo: tabla con embutidos / tabla fría --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/embutidos_gramd.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS EMBUTIDOS --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Jamones --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/jamones-1.jpg') }}"
                            alt="Jamones"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Jamones</p>
                        </div>
                    </article>
                </div>

                {{-- Salchichas --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/salchichas-1.jpg') }}"
                            alt="Salchichas"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Salchichas</p>
                        </div>
                    </article>
                </div>

                {{-- Chorizos --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/chorizos-1.jpg') }}"
                            alt="Chorizos"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Chorizos</p>
                        </div>
                    </article>
                </div>

                {{-- Fiambres --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/fiambres.jpg') }}"
                            alt="Fiambres"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Fiambres</p>
                        </div>
                    </article>
                </div>

                {{-- Tocinos --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/tocinos-1.jpg') }}"
                            alt="Tocinos"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Tocinos</p>
                        </div>
                    </article>
                </div>

                {{-- Especiales --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/especiales-1.jpg') }}"
                            alt="Especiales"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Especiales</p>
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
                        Recibe novedades sobre nuevas líneas de embutidos, ideas para
                        tablas frías y recetas para compartir en familia y con amigos.
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
