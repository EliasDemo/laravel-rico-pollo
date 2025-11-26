@extends('layouts.app')

@section('title', 'Línea Huevo - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
@endpush

@section('content')

    {{-- HERO HUEVO --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Huevo</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/huevo.svg') }}" alt="Huevo">
            </div>

            <h1 class="rp-line-hero-title">Huevo</h1>

            <p class="rp-line-hero-text mb-0">
                El huevo es uno de los alimentos más completos y nutritivos por
                naturaleza, y en la línea Rico se trabaja para que llegue fresco y
                seguro a los hogares y negocios que confían en nosotros.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Huevo fresco Rico</span>
            </div>
        </div>

        {{-- Fondo: canasta de huevos / huevos en bandeja --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/huevo_grand.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS HUEVO --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Huevo fresco --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/huevos_compr.jpg') }}"
                            alt="Huevo fresco"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Huevo fresco</p>
                            <p class="rp-subproduct-text">
                                Huevo de mesa seleccionado, ideal para el consumo diario,
                                la panificación y la pastelería.
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
                        Descubre recetas con huevo, tips de conservación y noticias
                        sobre la línea de huevos Rico.
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
