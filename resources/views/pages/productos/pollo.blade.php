@extends('layouts.app')

@section('title', 'Línea Pollo - Rico Pollo')

@push('styles')
<style>
    /* ===========================
       HERO DIVIDIDO MEJORADO
       =========================== */
    .rp-line-hero-wrap {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.4fr);
        min-height: 380px;
        position: relative;
        overflow: hidden;
    }

    .rp-line-hero-left {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 3.5rem 3rem 3rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .rp-line-hero-left::before {
        content: '';
        position: absolute;
        top: 0;
        right: -20px;
        width: 40px;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,210,0,0.1));
        transform: skewX(-5deg);
    }

    .rp-line-hero-right {
        background-image: url('{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/pollo_gran-1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }

    .rp-line-hero-right::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(16,21,40,0.3) 0%, rgba(255,210,0,0.1) 100%);
    }

    .rp-line-breadcrumb {
        font-size: 0.8rem;
        color: #777;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .rp-line-breadcrumb a {
        color: #101528;
        text-decoration: none;
        transition: color 0.3s ease;
        font-weight: 500;
    }

    .rp-line-breadcrumb a:hover {
        color: #ffd200;
    }

    .rp-line-breadcrumb span {
        color: #ffd200;
        font-weight: 600;
    }

    .rp-line-hero-icon {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        background: linear-gradient(135deg, #ffd200 0%, #ffaa00 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(255, 210, 0, 0.3);
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }

    .rp-line-hero-icon:hover {
        transform: rotate(10deg) scale(1.05);
    }

    .rp-line-hero-icon img {
        width: 40px;
        height: 40px;
        display: block;
        filter: brightness(0) invert(1);
    }

    .rp-line-hero-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #101528;
        margin-bottom: 1rem;
        line-height: 1.2;
        position: relative;
    }

    .rp-line-hero-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #ffd200, #ffaa00);
        border-radius: 2px;
    }

    .rp-line-hero-text {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        max-width: 480px;
        margin-bottom: 1.5rem;
    }

    .rp-line-brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        margin-top: 2rem;
        padding: 0.6rem 1.2rem;
        border-radius: 50px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        border: 2px solid rgba(255,210,0,0.2);
        transition: all 0.3s ease;
    }

    .rp-line-brand-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        border-color: rgba(255,210,0,0.4);
    }

    .rp-line-brand-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: linear-gradient(135deg, #ffd200, #ff6b00);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }

    @media (max-width: 992px) {
        .rp-line-hero-wrap {
            grid-template-columns: minmax(0, 1fr);
            min-height: auto;
        }
        .rp-line-hero-left {
            padding: 2.5rem 1.5rem;
        }
        .rp-line-hero-right {
            min-height: 300px;
            background-attachment: scroll;
        }
        .rp-line-hero-title {
            font-size: 2rem;
        }
    }

    /* ===========================
       CARDS DE SUBPRODUCTOS MEJORADAS
       =========================== */
    .rp-subproducts-section {
        padding: 4rem 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        position: relative;
    }

    .rp-subproducts-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, #ffd200, transparent);
    }

    .rp-subproducts-title {
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 2rem;
        color: #101528;
        text-align: center;
        position: relative;
        display: inline-block;
        left: 50%;
        transform: translateX(-50%);
        padding: 0 2rem;
    }

    .rp-subproducts-title::before,
    .rp-subproducts-title::after {
        content: '•';
        color: #ffd200;
        margin: 0 1rem;
    }

    .rp-subproduct-card {
        border-radius: 20px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
        height: 100%;
        position: relative;
        border: 1px solid rgba(255,210,0,0.1);
    }

    .rp-subproduct-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #ffd200, #ffaa00);
        transform: scaleX(0);
        transition: transform 0.4s ease;
        z-index: 2;
    }

    .rp-subproduct-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .rp-subproduct-card:hover::before {
        transform: scaleX(1);
    }

    .rp-subproduct-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .rp-subproduct-card:hover .rp-subproduct-image {
        transform: scale(1.1);
    }

    .rp-subproduct-body {
        padding: 1.5rem 1.5rem 1.8rem 1.5rem;
        position: relative;
        background: #ffffff;
    }

    .rp-subproduct-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #101528;
        margin-bottom: 0.5rem;
        position: relative;
        display: inline-block;
    }

    .rp-subproduct-name::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 0;
        height: 2px;
        background: #ffd200;
        transition: width 0.3s ease;
    }

    .rp-subproduct-card:hover .rp-subproduct-name::after {
        width: 100%;
    }

    .rp-subproduct-description {
        font-size: 0.85rem;
        color: #666;
        line-height: 1.5;
        margin-bottom: 0;
    }

    /* ===========================
       NEWSLETTER MEJORADO
       =========================== */
    .rp-newsletter {
        background: linear-gradient(135deg, #101528 0%, #1a2240 100%);
        color: #ffffff;
        padding: 4rem 0 3rem 0;
        margin-top: 2rem;
        position: relative;
        overflow: hidden;
    }

    .rp-newsletter::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(255,210,0,0.1) 0%, transparent 70%);
        border-radius: 50%;
    }

    .rp-newsletter-title {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        position: relative;
    }

    .rp-newsletter-text {
        font-size: 0.95rem;
        line-height: 1.6;
        max-width: 420px;
        opacity: 0.9;
    }

    .rp-newsletter-form {
        max-width: 400px;
        position: relative;
    }

    .rp-newsletter-input {
        background-color: rgba(255,255,255,0.05);
        border: 2px solid rgba(255,255,255,0.1);
        color: #ffffff;
        font-size: 0.95rem;
        padding: 0.75rem 1rem;
        border-radius: 50px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .rp-newsletter-input:focus {
        background-color: rgba(255,255,255,0.08);
        border-color: #ffd200;
        box-shadow: 0 0 0 3px rgba(255,210,0,0.1);
        color: #ffffff;
    }

    .rp-newsletter-input::placeholder {
        color: #8f96b5;
    }

    .rp-newsletter-btn {
        background: linear-gradient(135deg, #ffd200 0%, #ffaa00 100%);
        border: none;
        font-size: 0.9rem;
        font-weight: 700;
        color: #101528;
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        position: absolute;
        right: 5px;
        top: 5px;
        bottom: 5px;
    }

    .rp-newsletter-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255,210,0,0.4);
    }

    .rp-newsletter-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    @media (max-width: 768px) {
        .rp-newsletter {
            text-align: center;
            padding: 3rem 1.5rem;
        }
        .rp-newsletter-text,
        .rp-newsletter-form {
            margin-left: auto;
            margin-right: auto;
        }
        .rp-newsletter-btn {
            position: relative;
            margin-top: 1rem;
            width: 100%;
            right: 0;
            top: 0;
        }
    }

    /* ===========================
       ESTADÍSTICAS ADICIONALES
       =========================== */
    .rp-stats-section {
        padding: 3rem 0;
        background: #ffffff;
    }

    .rp-stat-card {
        text-align: center;
        padding: 2rem 1rem;
    }

    .rp-stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd200;
        margin-bottom: 0.5rem;
        display: block;
    }

    .rp-stat-label {
        font-size: 0.9rem;
        color: #101528;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
</style>
@endpush

@section('content')

    {{-- HERO DIVIDIDO POLLO MEJORADO --}}
    <section class="rp-line-hero-wrap">
        <div class="rp-line-hero-left">
            <div class="rp-line-breadcrumb">
                <a href="{{ route('inicio') }}">Inicio</a>
                <span>></span>
                <a href="{{ route('productos.index') }}">Productos</a>
                <span>></span>
                <span>Pollo</span>
            </div>

            <div class="rp-line-hero-icon">
                <img src="{{ asset('img/iconos/productos/pollo.svg') }}" alt="Pollo">
            </div>

            <h1 class="rp-line-hero-title">Línea de Pollo</h1>

            <p class="rp-line-hero-text">
                Con un solo bocado notarás lo tierno y sabroso que es un pollo Rico.
                Nuestro control en todo el proceso productivo, desde la crianza hasta
                el balanceado de elaboración y el procesamiento, nos permite ofrecer
                a las familias un pollo siempre fresco y sabroso.
            </p>

            <div class="rp-line-brand-badge">
                <span class="rp-line-brand-dot"></span>
                <span>Parte de la familia Rico Alimentos</span>
            </div>
        </div>

        <div class="rp-line-hero-right"></div>
    </section>

    {{-- ESTADÍSTICAS RÁPIDAS --}}
    <section class="rp-stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="rp-stat-card">
                        <span class="rp-stat-number" data-counter data-target="48">0</span>
                        <span class="rp-stat-label">Horas Frescura</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="rp-stat-card">
                        <span class="rp-stat-number" data-counter data-target="100">0</span>
                        <span class="rp-stat-label">% Natural</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="rp-stat-card">
                        <span class="rp-stat-number" data-counter data-target="17">0</span>
                        <span class="rp-stat-label">Granjas</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="rp-stat-card">
                        <span class="rp-stat-number" data-counter data-target="58">0</span>
                        <span class="rp-stat-label">Años Experiencia</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SUBPRODUCTOS MEJORADOS --}}
    <section class="rp-subproducts-section">
        <div class="container">
            <h3 class="rp-subproducts-title">Nuestros Productos de Pollo</h3>

            <div class="row g-4">
                {{-- Entero --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/pollo_entero-2.jpg') }}"
                            alt="Pollo entero"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <h4 class="rp-subproduct-name">Pollo Entero</h4>
                            <p class="rp-subproduct-description">
                                Pollo completo fresco, ideal para asados y preparaciones familiares.
                                Máxima calidad y sabor garantizado.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- Trozado --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/trozado.jpg') }}"
                            alt="Pollo trozado"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <h4 class="rp-subproduct-name">Pollo Trozado</h4>
                            <p class="rp-subproduct-description">
                                Cortes prácticos listos para cocinar. Piezas seleccionadas
                                para tus recetas favoritas.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- Menudencia --}}
                <div class="col-md-4">
                    <article class="rp-subproduct-card">
                        <img
                            src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/emenudencia.jpg') }}"
                            alt="Menudencias de pollo"
                            class="rp-subproduct-image"
                        >
                        <div class="rp-subproduct-body">
                            <h4 class="rp-subproduct-name">Menudencias</h4>
                            <p class="rp-subproduct-description">
                                Corazones, hígados y mollejas. Perfectos para
                                sopas, guisos y platos tradicionales.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- NEWSLETTER MEJORADO --}}
    <section class="rp-newsletter">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <h3 class="rp-newsletter-title">Mantente Informado</h3>
                    <p class="rp-newsletter-text">
                        Regístrate y recibe promociones exclusivas, recetas inspiradoras,
                        noticias de la empresa y más contenido especial.
                        <strong>¡Prometemos no enviarte spam!</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <form class="rp-newsletter-form">
                        <input
                            type="email"
                            class="form-control rp-newsletter-input"
                            placeholder="Ingresa tu correo electrónico"
                            disabled
                        >
                        <button type="button" class="rp-newsletter-btn" disabled>
                            Suscribirse
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Contador para estadísticas
    document.addEventListener('DOMContentLoaded', function () {
        // Contadores de estadísticas
        const counters = document.querySelectorAll('[data-counter]');
        const duration = 2000;

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
            let startTimestamp = null;

            function step(timestamp) {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                let current = Math.floor(progress * target);

                counter.textContent = current;

                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            }

            // Activar contadores cuando son visibles
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        window.requestAnimationFrame(step);
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(counter);
        });

        // Efectos hover mejorados para cards
        const cards = document.querySelectorAll('.rp-subproduct-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });

            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });
    });
</script>
@endpush
