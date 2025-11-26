@extends('layouts.app')

@section('title', 'Línea Preparados - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
@endpush

@section('content')

    {{-- HERO PREPARADOS --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Preparados</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/preparados.svg') }}" alt="Preparados">
            </div>

            <h1 class="rp-line-hero-title">Preparados</h1>

            <p class="rp-line-hero-text mb-0">
                La línea de preparados reúne productos listos para disfrutar cada día:
                hamburguesas, nuggets, alitas y otras alternativas que ahorran tiempo
                en cocina manteniendo la calidad y el sabor característico de Rico.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Preparados de pollo y cerdo Rico</span>
            </div>
        </div>

        {{-- Fondo tipo pan de hamburguesa --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/preparados_gran-1.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS PREPARADOS --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Empanizados --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/empanizados-2.jpg') }}"
                            alt="Empanizados"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Empanizados</p>
                        </div>
                    </article>
                </div>

                {{-- Hamburguesas --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/hamburguesas-1.jpg') }}"
                            alt="Hamburguesas"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Hamburguesas</p>
                        </div>
                    </article>
                </div>

                {{-- Alitas --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/alitas-2.jpg') }}"
                            alt="Alitas"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Alitas</p>
                        </div>
                    </article>
                </div>

                {{-- Enrollados --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/enrollados.jpg') }}"
                            alt="Enrollados"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Enrollados</p>
                        </div>
                    </article>
                </div>

                {{-- Sazonados --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/sazonados-1.jpg') }}"
                            alt="Sazonados"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Sazonados</p>
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
                        Entérate de nuevos preparados, recetas rápidas y promociones
                        especiales pensadas para tu día a día.
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
