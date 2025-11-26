@extends('layouts.app')

@section('title', 'Línea Aceites - Rico Pollo')

@push('styles')
    @include('pages.productos._linea-styles')
@endpush

@section('content')

    {{-- HERO ACEITES --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a> /
                <a href="{{ route('productos.index') }}">Productos</a> /
                <span>Aceites</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/aceites.svg') }}" alt="Aceites">
            </div>

            <h1 class="rp-line-hero-title">Aceites</h1>

            <p class="rp-line-hero-text mb-0">
                Gracias a un proceso de único prensado se obtiene un aceite de soya
                más natural y saludable, que conserva mejor sus propiedades
                nutricionales. El aceite Sursol contiene 0% colesterol y aporta
                vitamina E, Omega 3 y 6.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Marca Sursol</span>
            </div>
        </div>

        {{-- Fondo: botella de aceite, cocina --}}
        <div class="rp-line-hero-right"
             style="background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/aceite_grand.jpg') }}');">
        </div>
    </section>

    {{-- SUBPRODUCTOS ACEITES --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <p class="rp-subproducts-title">Conoce todos nuestros productos:</p>

            <div class="row g-4">
                {{-- Aceite de soya --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/aceite-2.jpg') }}"
                            alt="Aceite de soya Sursol"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <p class="rp-subproduct-name">Aceite de soya</p>
                            <p class="rp-subproduct-text">
                                Aceite comestible de soya, ideal para frituras ligeras,
                                salteados y preparaciones del día a día en el hogar y la
                                cocina profesional.
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
                        Recibe consejos de cocina saludable, recetas y novedades sobre
                        la línea de aceites Sursol.
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
