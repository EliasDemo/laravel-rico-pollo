@extends('layouts.app')

@section('title', 'Nosotros - Rico Alimentos')

@push('styles')
<style>
    :root {
        --rp-primary: #e60000;
        --rp-primary-dark: #b30000;
        --rp-dark: #101528;
        --rp-accent: #ffd200;
        --rp-muted: #6b7280;
        --rp-bg-soft: #f3f4f7;
        --rp-radius-lg: 18px;
        --rp-radius-md: 12px;
        --rp-shadow: 0 8px 24px rgba(15,23,42,0.08);
        --rp-shadow-hover: 0 14px 36px rgba(15,23,42,0.14);
    }

    body {
        font-family: 'Segoe UI', system-ui, sans-serif;
        color: var(--rp-dark);
        overflow-x: hidden;
    }

    /* ===========================
       HERO "MÁS DE 57 AÑOS HACIENDO HISTORIA"
       =========================== */
    .rp-about-hero {
        display: grid;
        grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr);
        min-height: 400px;
        position: relative;
    }

    .rp-about-hero-left {
        background: linear-gradient(135deg, rgba(16,21,40,0.85) 0%, rgba(21,27,58,0.8) 100%),
                    url('https://ricoalimentos.pe/wp-content/uploads/2024/10/Caldo-de-pollo.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        padding: 0 3rem;
        position: relative;
        overflow: hidden;
    }

    .rp-about-hero-left::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(230,0,0,0.05)"/></svg>');
        background-size: cover;
    }

    .rp-about-hero-left-content {
        color: white;
        max-width: 500px;
        position: relative;
        z-index: 1;
    }

    .rp-about-hero-left .rp-about-hero-subtitle {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: rgba(255,255,255,0.8);
        margin-bottom: 0.8rem;
    }

    .rp-about-hero-left .rp-about-hero-title {
        font-size: 2.3rem;
        font-weight: 800;
        margin-bottom: 1rem;
        line-height: 1.1;
    }

    .rp-about-hero-left .rp-about-hero-text {
        font-size: 1rem;
        color: rgba(255,255,255,0.9);
        line-height: 1.6;
    }

    .rp-about-hero-right {
        background-color: #ffffff;
        padding: 3.5rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .rp-about-hero-badge {
        position: absolute;
        top: 2rem;
        left: -2rem;
        width: 100px;
        height: 100px;
        border-radius: 999px;
        border: 10px solid var(--rp-accent);
        border-right-color: transparent;
        border-bottom-color: transparent;
        transform: rotate(25deg);
        z-index: 1;
    }

    .rp-about-hero-right .rp-about-hero-subtitle {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: var(--rp-muted);
        margin-bottom: 0.8rem;
        position: relative;
        z-index: 2;
    }

    .rp-about-hero-right .rp-about-hero-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--rp-dark);
        margin-bottom: 1rem;
        line-height: 1.1;
        position: relative;
        z-index: 2;
    }

    .rp-about-hero-right .rp-about-hero-text {
        font-size: 0.95rem;
        color: var(--rp-muted);
        line-height: 1.6;
        position: relative;
        z-index: 2;
    }

    .rp-about-hero-stats {
        display: flex;
        gap: 2rem;
        margin-top: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .rp-about-hero-stat {
        text-align: center;
    }

    .rp-about-hero-stat-number {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--rp-primary);
        display: block;
        line-height: 1;
    }

    .rp-about-hero-stat-label {
        font-size: 0.8rem;
        color: var(--rp-muted);
        margin-top: 0.3rem;
    }

    @media (max-width: 992px) {
        .rp-about-hero {
            grid-template-columns: 1fr;
            min-height: auto;
        }

        .rp-about-hero-left {
            padding: 3rem 1.5rem;
            min-height: 300px;
        }

        .rp-about-hero-right {
            padding: 2.5rem 1.5rem;
        }

        .rp-about-hero-badge {
            top: 1.5rem;
            left: -1.5rem;
            width: 80px;
            height: 80px;
        }

        .rp-about-hero-stats {
            justify-content: space-around;
            gap: 1rem;
        }
    }

    /* ===========================
       SECCIÓN TÍTULO + LÍNEA DE TIEMPO
       =========================== */
    .rp-about-timeline-section {
        padding: 5rem 0 4rem 0;
        background-color: #ffffff;
        position: relative;
    }

    .rp-about-timeline-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .rp-about-timeline-header p {
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: var(--rp-muted);
        margin-bottom: 0.5rem;
    }

    .rp-about-timeline-header h2 {
        font-size: 2.3rem;
        font-weight: 800;
        color: var(--rp-dark);
        margin-bottom: 0;
    }

    .rp-timeline-wrapper {
        position: relative;
        padding-top: 3rem;
    }

    .rp-timeline-line {
        position: absolute;
        top: 100px;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(to right, transparent, #c1c5d7 20%, #c1c5d7 80%, transparent);
        pointer-events: none;
        z-index: 0;
    }

    .rp-timeline-inner {
        position: relative;
        display: flex;
        gap: 2.5rem;
        overflow-x: auto;
        padding: 2rem 0 3rem 0;
        scrollbar-width: thin;
        scrollbar-color: var(--rp-primary) transparent;
        z-index: 1;
    }

    .rp-timeline-inner::-webkit-scrollbar {
        height: 8px;
    }

    .rp-timeline-inner::-webkit-scrollbar-track {
        background: transparent;
        border-radius: 10px;
    }

    .rp-timeline-inner::-webkit-scrollbar-thumb {
        background-color: var(--rp-primary);
        border-radius: 10px;
    }

    .rp-timeline-item {
        position: relative;
        min-width: 280px;
        max-width: 300px;
        text-align: center;
        flex-shrink: 0;
    }

    .rp-timeline-dot {
        position: absolute;
        top: 92px;
        left: 50%;
        transform: translateX(-50%);
        width: 16px;
        height: 16px;
        border-radius: 999px;
        background-color: var(--rp-accent);
        border: 4px solid #ffffff;
        box-shadow: 0 0 0 3px var(--rp-primary);
        z-index: 2;
        transition: all 0.3s ease;
    }

    .rp-timeline-item:hover .rp-timeline-dot {
        transform: translateX(-50%) scale(1.2);
        box-shadow: 0 0 0 3px var(--rp-primary), 0 0 15px rgba(255,210,0,0.5);
    }

    .rp-timeline-year {
        font-weight: 800;
        font-size: 1.3rem;
        color: var(--rp-primary);
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 2;
    }

    .rp-timeline-card {
        margin-top: 2.8rem;
        background-color: #ffffff;
        border-radius: var(--rp-radius-lg);
        padding: 1.5rem 1.2rem;
        box-shadow: var(--rp-shadow);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        height: calc(100% - 3rem);
        display: flex;
        flex-direction: column;
    }

    .rp-timeline-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--rp-shadow-hover);
    }

    .rp-timeline-img {
        width: 90px;
        height: 90px;
        border-radius: 999px;
        object-fit: cover;
        margin: 0 auto 1rem auto;
        filter: grayscale(30%);
        transition: all 0.3s ease;
        border: 3px solid var(--rp-bg-soft);
    }

    .rp-timeline-card:hover .rp-timeline-img {
        filter: grayscale(0%);
        border-color: var(--rp-accent);
    }

    .rp-timeline-card h3 {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--rp-dark);
        margin-bottom: 0.8rem;
        line-height: 1.3;
    }

    .rp-timeline-card p {
        font-size: 0.85rem;
        color: var(--rp-muted);
        margin-bottom: 0;
        line-height: 1.5;
        flex-grow: 1;
    }

    /* ===========================
       SECCIÓN CALIDAD
       =========================== */
    .rp-about-quality {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.3fr);
        min-height: 400px;
        position: relative;
    }

    .rp-about-quality-left {
        background: linear-gradient(135deg, var(--rp-accent) 0%, #ffde40 100%);
        color: var(--rp-dark);
        padding: 4rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .rp-about-quality-left::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.2)"/></svg>');
        background-size: cover;
    }

    .rp-about-quality-left .section-title {
        color: var(--rp-dark);
        margin-bottom: 0.5rem;
        font-weight: 600;
        position: relative;
        z-index: 1;
    }

    .rp-about-quality-left h2 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 1.2rem;
        position: relative;
        z-index: 1;
    }

    .rp-about-quality-left p {
        font-size: 1rem;
        max-width: 500px;
        line-height: 1.6;
        position: relative;
        z-index: 1;
    }

    .rp-about-quality-right {
        background: linear-gradient(135deg, rgba(16,21,40,0.85) 0%, rgba(21,27,58,0.8) 100%),
                    url('https://ricoalimentos.pe/wp-content/uploads/2024/10/Caldo-de-pollo.jpg');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rp-about-quality-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        max-width: 400px;
        margin-top: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .rp-about-quality-feature {
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
    }

    .rp-about-quality-feature i {
        color: var(--rp-primary);
        font-size: 1.2rem;
        margin-top: 0.2rem;
        flex-shrink: 0;
    }

    .rp-about-quality-feature span {
        font-size: 0.9rem;
        font-weight: 500;
    }

    @media (max-width: 992px) {
        .rp-about-quality {
            grid-template-columns: 1fr;
        }

        .rp-about-quality-left {
            padding: 3rem 1.5rem;
        }

        .rp-about-quality-features {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
    }

    /* ===========================
       LOGOS DE MARCAS
       =========================== */
    .rp-about-brands {
        padding: 4rem 0 3rem 0;
        background-color: var(--rp-bg-soft);
        text-align: center;
        position: relative;
    }

    .rp-about-brands h3 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 2rem;
        color: var(--rp-dark);
    }

    .rp-brand-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 2.5rem;
        max-width: 900px;
        margin: 0 auto;
    }

    .rp-brand-logo {
        height: 50px;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .rp-brand-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
    }

    /* ===========================
       NEWSLETTER
       =========================== */
    .rp-newsletter {
        background: linear-gradient(135deg, var(--rp-dark) 0%, #151b3a 100%);
        color: #ffffff;
        padding: 4rem 0;
        position: relative;
        overflow: hidden;
    }

    .rp-newsletter::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(230,0,0,0.05)"/></svg>');
        background-size: cover;
    }

    .rp-newsletter-title {
        font-size: 1.7rem;
        font-weight: 800;
        margin-bottom: 0.8rem;
        position: relative;
        z-index: 1;
    }

    .rp-newsletter-text {
        font-size: 1rem;
        max-width: 450px;
        color: rgba(255,255,255,0.9);
        position: relative;
        z-index: 1;
    }

    .rp-newsletter-form {
        max-width: 420px;
        position: relative;
        z-index: 1;
    }

    .rp-newsletter-input {
        background-color: rgba(22,28,51,0.8);
        border: 1px solid #252b45;
        color: #ffffff;
        font-size: 1rem;
        padding: 0.75rem 1rem;
        border-radius: 50px;
    }

    .rp-newsletter-input::placeholder {
        color: #8f96b5;
    }

    .rp-newsletter-btn {
        background-color: var(--rp-accent);
        border: none;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--rp-dark);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .rp-newsletter-btn:hover:not(:disabled) {
        background-color: #ffde40;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(255,210,0,0.4);
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

        .rp-brand-logos {
            gap: 1.5rem;
        }

        .rp-brand-logo {
            height: 40px;
        }
    }

    /* ===========================
       ANIMACIONES SCROLL
       =========================== */
    .rp-animate {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .rp-animate.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .rp-delay-1 { transition-delay: 0.1s; }
    .rp-delay-2 { transition-delay: 0.2s; }
    .rp-delay-3 { transition-delay: 0.3s; }
    .rp-delay-4 { transition-delay: 0.4s; }
</style>
@endpush

@section('content')

    {{-- HERO --}}
    <section class="rp-about-hero">
        <div class="rp-about-hero-left">
            <div class="rp-about-hero-left-content rp-animate">
                <p class="rp-about-hero-subtitle">Más de 57 años haciendo historia</p>
                <h1 class="rp-about-hero-title">Nacimos para alimentar vidas</h1>
                <p class="rp-about-hero-text">
                    Desde finales de los años sesenta, la familia Zapata apostó por una
                    empresa avícola en el sur del Perú, que con el tiempo se convirtió
                    en Rico Alimentos: un grupo que hoy integra granjas, plantas de
                    beneficio, marcas y tiendas que llevan productos de calidad a miles
                    de hogares.
                </p>
            </div>
        </div>

        <div class="rp-about-hero-right">
            <div class="rp-about-hero-badge"></div>

            <p class="rp-about-hero-subtitle rp-animate">Nuestra trayectoria en números</p>
            <h2 class="rp-about-hero-title rp-animate rp-delay-1">Creciendo con el Perú</h2>
            <p class="rp-about-hero-text mb-0 rp-animate rp-delay-2">
                Más de medio siglo de experiencia nos respaldan, consolidándonos
                como una de las empresas líderes en el sector alimentario peruano.
            </p>

            <div class="rp-about-hero-stats rp-animate rp-delay-3">
                <div class="rp-about-hero-stat">
                    <span class="rp-about-hero-stat-number" data-counter data-target="57">0</span>
                    <span class="rp-about-hero-stat-label">años de experiencia</span>
                </div>
                <div class="rp-about-hero-stat">
                    <span class="rp-about-hero-stat-number" data-counter data-target="74" data-prefix="+">0</span>
                    <span class="rp-about-hero-stat-label">tiendas a nivel nacional</span>
                </div>
                <div class="rp-about-hero-stat">
                    <span class="rp-about-hero-stat-number" data-counter data-target="4300" data-prefix="+">0</span>
                    <span class="rp-about-hero-stat-label">colaboradores</span>
                </div>
            </div>
        </div>
    </section>

    {{-- LÍNEA DE TIEMPO --}}
    <section class="rp-about-timeline-section">
        <div class="container">
            <div class="rp-about-timeline-header rp-animate">
                <p>Innovando desde el inicio,</p>
                <h2>somos Rico Alimentos</h2>
            </div>

            <div class="rp-timeline-wrapper">
                <div class="rp-timeline-line"></div>

                <div class="rp-timeline-inner" id="rpTimeline">
                    {{-- 1961 --}}
                    <article class="rp-timeline-item rp-animate">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">1961</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.20.48-PM.jpeg"
                                alt="1961 - primera granja en Tacna"
                                class="rp-timeline-img"
                            >
                            <h3>Primera granja en Tacna</h3>
                            <p>
                                El Ing. Enrique Zapata, junto con su padre, inicia una
                                granja de pollos en Tacna. Esa experiencia sería la base
                                de todo el desarrollo posterior de la empresa.
                            </p>
                        </div>
                    </article>

                    {{-- 1967 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-1">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">1967</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/FOTO-2.jpg"
                                alt="1967 - Fundación de Rico Pollo"
                                class="rp-timeline-img"
                            >
                            <h3>Fundación de Rico Pollo</h3>
                            <p>
                                La familia se traslada a Arequipa y se funda Rico Pollo,
                                primera empresa avícola de la región sur, con una granja
                                de engorde de pollos en el valle de Tingo.
                            </p>
                        </div>
                    </article>

                    {{-- 1969 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-2">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">1969</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.25.48-PM.jpeg"
                                alt="1969 - Primera tienda Rico"
                                class="rp-timeline-img"
                            >
                            <h3>Primera Tienda Rico</h3>
                            <p>
                                Ante las restricciones al consumo de carne, Rico Pollo
                                incorpora la venta directa y abre su primera tienda,
                                acercando el producto al consumidor final.
                            </p>
                        </div>
                    </article>

                    {{-- 1995 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-3">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">1995</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/FOTO-6.jpg"
                                alt="1995 - Primera planta de incubación"
                                class="rp-timeline-img"
                            >
                            <h3>Primera planta de incubación</h3>
                            <p>
                                Se instala en Mollendo la primera planta de incubación,
                                dando un paso importante en el crecimiento de la cadena
                                productiva.
                            </p>
                        </div>
                    </article>

                    {{-- 1999 --}}
                    <article class="rp-timeline-item rp-animate">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">1999</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.23.26-PM.jpeg"
                                alt="1999 - Planta de Vía Evitamiento"
                                class="rp-timeline-img"
                            >
                            <h3>Planta de Vía Evitamiento</h3>
                            <p>
                                La planta se traslada a Vía Evitamiento para responder al
                                crecimiento del negocio y se incrementa la flota de
                                transporte.
                            </p>
                        </div>
                    </article>

                    {{-- 2000 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-1">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2000</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.18.21-PM.jpeg"
                                alt="2000 - Máquina trozadora"
                                class="rp-timeline-img"
                            >
                            <h3>Máquina trozadora</h3>
                            <p>
                                Rico Pollo adquiere la primera máquina automática
                                trozadora de pollos del país, modernizando el proceso de
                                corte.
                            </p>
                        </div>
                    </article>

                    {{-- 2009 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-2">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2009</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.25.47-PM.jpeg"
                                alt="2009 - Planta de beneficio de cerdos"
                                class="rp-timeline-img"
                            >
                            <h3>Planta de beneficio de cerdos</h3>
                            <p>
                                Se construye una planta de beneficio para cerdos considerada
                                una de las más modernas del país, consolidando la línea de
                                cerdo.
                            </p>
                        </div>
                    </article>

                    {{-- 2013 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-3">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2013</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9314.jpg"
                                alt="2013 - Modernización planta de pollos"
                                class="rp-timeline-img"
                            >
                            <h3>Modernización planta de pollos</h3>
                            <p>
                                Más de cuatro millones de dólares de inversión permiten
                                modernizar la planta de beneficio de pollos y el sistema de
                                rendering, elevando los estándares ambientales.
                            </p>
                        </div>
                    </article>

                    {{-- 2014 --}}
                    <article class="rp-timeline-item rp-animate">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2014</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9317.jpg"
                                alt="2014 - Diversificación al sector premium"
                                class="rp-timeline-img"
                            >
                            <h3>Ingresamos al sector premium</h3>
                            <p>
                                La empresa entra al mercado de embutidos premium en Lima a
                                través de Westphalia Alimentos S.A.C. con la marca Casa
                                Europa.
                            </p>
                        </div>
                    </article>

                    {{-- 2015 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-1">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2015</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9315.jpg"
                                alt="2015 - Desarrollo del negocio de licores"
                                class="rp-timeline-img"
                            >
                            <h3>Negocio de licores</h3>
                            <p>
                                Se desarrolla la línea de piscos y vinos Costumbres, que
                                pronto obtiene reconocimientos en concursos nacionales.
                            </p>
                        </div>
                    </article>

                    {{-- 2019 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-2">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2019</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_8915.jpg"
                                alt="2019 - Relanzamiento Casa Europa"
                                class="rp-timeline-img"
                            >
                            <h3>Relanzamiento Casa Europa</h3>
                            <p>
                                Se refuerza la marca Casa Europa como referente de
                                charcutería auténtica en el segmento premium de
                                embutidos.
                            </p>
                        </div>
                    </article>

                    {{-- 2024 --}}
                    <article class="rp-timeline-item rp-animate rp-delay-3">
                        <div class="rp-timeline-dot"></div>
                        <div class="rp-timeline-year">2024</div>
                        <div class="rp-timeline-card">
                            <img
                                src="https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9321.jpg"
                                alt="2024 - Relanzamiento Rico Alimentos y Rico"
                                class="rp-timeline-img"
                            >
                            <h3>Relanzamiento Rico Alimentos</h3>
                            <p>
                                Corporación Rico y su marca Ricopollo se relanzan bajo un
                                mismo paraguas: Rico Alimentos y Rico, integrando todas
                                sus unidades de negocio.
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>

    {{-- CALIDAD --}}
    <section class="rp-about-quality rp-animate">
        <div class="rp-about-quality-left">
            <p class="section-title mb-1">Protegemos el</p>
            <h2>sabor y la calidad de inicio a fin</h2>
            <p class="mb-3">
                Gestionamos toda la cadena productiva de pollo y cerdo: desde
                la genética, crianza y alimentación hasta el beneficio, procesado y
                distribución en nuestras tiendas.
            </p>
            <p class="mb-4">
                Al controlar la cadena de frío de principio a fin, aseguramos que
                los productos lleguen siempre frescos y con el sabor que nos
                caracteriza.
            </p>

            <div class="rp-about-quality-features">
                <div class="rp-about-quality-feature">
                    <i class="fas fa-check-circle"></i>
                    <span>Control de calidad integral</span>
                </div>
                <div class="rp-about-quality-feature">
                    <i class="fas fa-check-circle"></i>
                    <span>Cadena de frío garantizada</span>
                </div>
                <div class="rp-about-quality-feature">
                    <i class="fas fa-check-circle"></i>
                    <span>Procesos certificados</span>
                </div>
                <div class="rp-about-quality-feature">
                    <i class="fas fa-check-circle"></i>
                    <span>Trazabilidad completa</span>
                </div>
            </div>
        </div>

        <div class="rp-about-quality-right"></div>
    </section>

    {{-- MARCAS --}}
    <section class="rp-about-brands rp-animate">
        <div class="container">
            <h3>Nuestras marcas</h3>
            <div class="rp-brand-logos">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="Rico" class="rp-brand-logo">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="Casa Europa" class="rp-brand-logo">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="Naturave" class="rp-brand-logo">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="Sursol" class="rp-brand-logo">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="Costumbres" class="rp-brand-logo">
                <img src="https://ricoalimentos.pe/wp-content/uploads/2025/02/varios-logos.png" alt="3 Ríos" class="rp-brand-logo">
            </div>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="rp-newsletter">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <h3 class="rp-newsletter-title rp-animate">Regístrate a nuestro newsletter</h3>
                    <p class="rp-newsletter-text mb-0 rp-animate rp-delay-1">
                        Recibe promociones, recetas inspiradoras y noticias sobre
                        Rico Alimentos. Prometemos no enviarte spam.
                    </p>
                </div>
                <div class="col-md-6">
                    <form class="rp-newsletter-form d-flex gap-2 mt-3 mt-md-0 rp-animate rp-delay-2">
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
document.addEventListener('DOMContentLoaded', function () {
    /* ====== Contadores del hero ====== */
    const counters = document.querySelectorAll('[data-counter]');
    const duration = 1500;

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const prefix = counter.getAttribute('data-prefix') || '';
        const suffix = counter.getAttribute('data-suffix') || '';
        let startTimestamp = null;

        function animate(t) {
            if (!startTimestamp) startTimestamp = t;
            const progress = Math.min((t - startTimestamp) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(Math.max(1, eased * target));
            counter.textContent = prefix + current.toLocaleString('es-PE') + suffix;
            if (progress < 1) requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
    });

    /* ====== Animación aparición (IntersectionObserver) ====== */
    const animated = document.querySelectorAll('.rp-animate');

    if (!('IntersectionObserver' in window)) {
        animated.forEach(el => el.classList.add('is-visible'));
    } else {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        animated.forEach(el => observer.observe(el));
    }

    /* ====== Línea de tiempo: scroll automático + manual ====== */
    const timeline = document.getElementById('rpTimeline');
    if (!timeline) return;

    let autoScrollEnabled = true;
    let lastTs = null;
    let direction = 1;          // 1 hacia la derecha, -1 hacia la izquierda
    const pxPerSecond = 25;     // velocidad lenta (~25 px/s)
    let resumeTimeout = null;

    function step(ts) {
        if (!lastTs) lastTs = ts;
        const delta = ts - lastTs;
        lastTs = ts;

        if (autoScrollEnabled) {
            const distance = (pxPerSecond * delta) / 1000; // px a mover
            const maxScroll = timeline.scrollWidth - timeline.clientWidth;

            let next = timeline.scrollLeft + distance * direction;

            if (next >= maxScroll) {
                next = maxScroll;
                direction = -1; // cambiar dirección
            } else if (next <= 0) {
                next = 0;
                direction = 1;
            }

            timeline.scrollLeft = next;
        }

        requestAnimationFrame(step);
    }
    requestAnimationFrame(step);

    // Pausar auto-scroll cuando el usuario interactúe
    function pauseAutoScroll() {
        autoScrollEnabled = false;
        if (resumeTimeout) clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(() => {
            autoScrollEnabled = true;
        }, 4000); // 4 segundos después de la última interacción
    }

    ['wheel', 'touchstart', 'mousedown', 'mouseenter'].forEach(evt => {
        timeline.addEventListener(evt, pauseAutoScroll, { passive: true });
    });
});
</script>
@endpush
