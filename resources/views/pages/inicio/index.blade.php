@extends('layouts.app')

@section('title', 'Inicio - Rico Alimentos')

@push('styles')
<style>
    /* Usamos las variables de color de layouts.app */
    :root {
        /* solo por si acaso, pero ya las tienes en el layout */
        --info-blue: var(--rp-azul-oscuro);
        --info-blue-dark: #060a18;
        --info-bg: #f5f6fb;
    }

    .info-hero {
        background-color: #ffffff;
        padding: 3.5rem 0 2.5rem 0;
        box-shadow: 0 4px 20px rgba(15,23,42,0.06);
        margin-bottom: 2rem;
        border-radius: 0 0 24px 24px;
    }

    .info-hero-title {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--rp-azul-oscuro);
        margin-bottom: 0.6rem;
        text-align: center;
    }

    .info-hero-subtitle {
        font-size: 1rem;
        color: #4b5563;
        text-align: center;
        max-width: 780px;
        margin: 0 auto;
    }

    .info-section {
        padding-bottom: 3rem;
        background-color: var(--info-bg);
    }

    .info-section-card {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 6px 20px rgba(15,23,42,0.06);
        padding: 2rem 1.75rem 2.25rem 1.75rem;
        margin-bottom: 2rem;
        border-top: 4px solid var(--rp-amarillo);
    }

    .info-section-title {
        font-size: 1.6rem;
        font-weight: 800;
        color: var(--rp-azul-oscuro);
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .info-topic-list {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
    }

    .info-topic-btn {
        width: 100%;
        text-align: left;
        border-radius: 8px;
        border: none;
        padding: 0.55rem 0.9rem;
        font-size: 0.95rem;
        font-weight: 500;
        background: var(--info-blue);
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s ease,
                    box-shadow 0.2s ease;
        box-shadow: 0 3px 6px rgba(15,23,42,0.25);
    }

    .info-topic-btn:hover {
        background: var(--info-blue-dark);
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(15,23,42,0.35);
    }

    .info-topic-btn:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(255,210,0,0.4);
    }

    .info-topic-btn i {
        margin-right: 0.4rem;
        opacity: 0.9;
    }

    .info-topic-content {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 1rem 1.25rem 1.15rem 1.25rem;
        margin: 0.4rem 0 0.6rem 0;
        box-shadow: 0 6px 18px rgba(15,23,42,0.10);
        border-left: 4px solid var(--rp-amarillo);
    }

    .info-topic-content p {
        font-size: 0.9rem;
        color: #4b5563;
        margin-bottom: 0;
    }

    /* Subniveles (por ejemplo 2.1.1, 2.1.2...) */
    .info-subtopic-box {
        background-color: var(--info-bg);
        border-radius: 12px;
        padding: 0.85rem 0.8rem;
        margin-top: 0.6rem;
        box-shadow: 0 4px 10px rgba(15,23,42,0.08);
    }

    .info-subtopic-title {
        font-size: 0.92rem;
        font-weight: 600;
        margin-bottom: 0.4rem;
        color: var(--rp-azul-oscuro);
    }

    .info-subtopic-list {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .info-subtopic-btn {
        background: var(--info-blue);
        color: #ffffff;
        border-radius: 4px;
        border: none;
        padding: 0.4rem 0.6rem;
        font-size: 0.85rem;
        text-align: left;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .info-subtopic-btn:hover {
        background: var(--info-blue-dark);
        transform: translateY(-1px);
    }

    .info-small-note {
        font-size: 0.8rem;
        color: #6b7280;
        margin-top: 0.4rem;
    }

    @media (max-width: 768px) {
        .info-hero-title {
            font-size: 2rem;
        }
        .info-section-card {
            padding: 1.6rem 1.2rem 1.9rem 1.2rem;
        }
    }


     /* === CARRUSEL HISTÓRICO 1.1 === */
    .info-timeline-carousel {
        margin-top: 0.9rem;
        position: relative;
    }

    .info-timeline-carousel .carousel-inner {
        background-color: var(--info-bg);
        border-radius: 12px;
        padding: 1.1rem 1.25rem 1.3rem 1.25rem;
        box-shadow: 0 4px 12px rgba(15,23,42,0.12);
    }

    .info-timeline-slide-title {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--rp-azul-oscuro);
        margin-bottom: 0.4rem;
    }

    .info-timeline-slide-text {
        font-size: 0.9rem;
        color: #4b5563;
        margin-bottom: 0;
    }

    .info-timeline-carousel .carousel-indicators {
        position: static;
        margin-top: 0.6rem;
    }

    .info-timeline-carousel .carousel-indicators [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: var(--rp-azul-oscuro);
        opacity: 0.3;
    }

    .info-timeline-carousel .carousel-indicators .active {
        opacity: 1;
        background-color: var(--rp-amarillo);
    }

    .info-timeline-carousel .carousel-control-prev,
    .info-timeline-carousel .carousel-control-next {
        width: 2rem;
    }

    .info-timeline-carousel .carousel-control-prev-icon,
    .info-timeline-carousel .carousel-control-next-icon {
        filter: invert(1);
    }

    @media (max-width: 768px) {
        .info-timeline-carousel .carousel-inner {
            padding: 1rem;
        }
    }

    .info-timeline-header {
    display: flex;
    align-items: flex-start;
    gap: 0.8rem;
    }

    .info-timeline-img {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--rp-amarillo);
        box-shadow: 0 3px 8px rgba(15,23,42,0.35);
        flex-shrink: 0;
    }

    .info-timeline-text-group {
        flex: 1;
    }

    /* ======== UBICACIÓN GEOGRÁFICA (1.2) ======== */

    .info-location-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.1fr);
        gap: 1.2rem;
        margin-top: 0.7rem;
    }

    .info-location-card {
        background-color: #ffffff;
        border-radius: 14px;
        padding: 1.1rem 1.2rem 1.2rem 1.2rem;
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.10);
        border-left: 4px solid var(--rp-amarillo);
    }

    .info-location-title {
        font-size: 1rem;
        font-weight: 700;
        color: var(--rp-azul-oscuro);
        margin-bottom: 0.35rem;
    }

    .info-location-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.15rem 0.55rem;
        border-radius: 999px;
        background-color: rgba(16, 21, 40, 0.05);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #4b5563;
        margin-bottom: 0.5rem;
    }

    .info-location-text {
        font-size: 0.9rem;
        color: #4b5563;
        margin-bottom: 0.4rem;
    }

    .info-location-address {
        font-size: 0.86rem;
        color: #111827;
        font-weight: 600;
        margin-top: 0.4rem;
    }

    .info-location-meta {
        font-size: 0.8rem;
        color: #6b7280;
        margin-top: 0.25rem;
    }

    .info-location-note {
        font-size: 0.8rem;
        color: #6b7280;
        margin-top: 0.7rem;
        border-top: 1px dashed rgba(156, 163, 175, 0.6);
        padding-top: 0.5rem;
    }

    @media (max-width: 768px) {
        .info-location-grid {
            grid-template-columns: minmax(0, 1fr);
        }
    }

    /* ======== LOCALES, TIENDAS RICO (1.3) ======== */

    .info-stores-intro {
        font-size: 0.9rem;
        color: #4b5563;
        margin-bottom: 0.5rem;
    }

    .info-stores-accordion {
        margin-top: 0.8rem;
    }

    .info-stores-accordion .accordion-item {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 0.55rem;
        border: 1px solid rgba(209, 213, 219, 0.9);
    }

    .info-stores-accordion .accordion-button {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--rp-azul-oscuro);
        background-color: #f9fafb;
        padding-top: 0.55rem;
        padding-bottom: 0.55rem;
    }

    .info-stores-accordion .accordion-button:not(.collapsed) {
        color: var(--rp-azul-oscuro);
        background-color: #e5e7eb;
        box-shadow: inset 0 -1px 0 rgba(209, 213, 219, 0.7);
    }

    .info-stores-accordion .accordion-body {
        padding: 0.75rem 0.9rem 0.85rem 0.9rem;
        background-color: #ffffff;
    }

    .info-stores-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.12rem 0.55rem;
        border-radius: 999px;
        background-color: rgba(16, 21, 40, 0.05);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #4b5563;
        margin-left: 0.5rem;
    }

    .info-stores-table th {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: .05em;
        color: #6b7280;
        border-top: none;
    }

    .info-stores-table td {
        font-size: 0.82rem;
        color: #374151;
        vertical-align: top;
    }

    .info-stores-district {
        font-weight: 600;
        color: var(--rp-azul-oscuro);
    }

    .info-stores-note {
        font-size: 0.8rem;
        color: #6b7280;
        margin-top: 0.7rem;
        border-top: 1px dashed rgba(156, 163, 175, 0.6);
        padding-top: 0.5rem;
    }

        /* ======== LOCALES, TIENDAS RICO (1.3) ======== */
    .info-stores-intro {
        font-size: 0.9rem;
        color: #4b5563;
        margin-bottom: 0.5rem;
    }

    .info-stores-accordion {
        margin-top: 0.8rem;
    }

    .info-stores-accordion .accordion-item {
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 0.55rem;
        border: 1px solid rgba(209, 213, 219, 0.9);
    }

    .info-stores-accordion .accordion-button {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--rp-azul-oscuro);
        background-color: #f9fafb;
        padding-top: 0.55rem;
        padding-bottom: 0.55rem;
    }

    .info-stores-accordion .accordion-button:not(.collapsed) {
        color: var(--rp-azul-oscuro);
        background-color: #e5e7eb;
        box-shadow: inset 0 -1px 0 rgba(209, 213, 219, 0.7);
    }

    .info-stores-accordion .accordion-body {
        padding: 0.75rem 0.9rem 0.85rem 0.9rem;
        background-color: #ffffff;
    }

    .info-stores-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.12rem 0.55rem;
        border-radius: 999px;
        background-color: rgba(16, 21, 40, 0.05);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #4b5563;
        margin-left: 0.5rem;
    }

    .info-stores-table th {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: .05em;
        color: #6b7280;
        border-top: none;
    }

    .info-stores-table td {
        font-size: 0.82rem;
        color: #374151;
        vertical-align: top;
    }

    .info-stores-district {
        font-weight: 600;
        color: var(--rp-azul-oscuro);
    }

    .info-stores-note {
        font-size: 0.8rem;
        color: #6b7280;
        margin-top: 0.7rem;
        border-top: 1px dashed rgba(156, 163, 175, 0.6);
        padding-top: 0.5rem;
    }

    /* ======== 1.3 LOCALES + FILIALES · CARRUSEL NORMAL ======== */

.info-stores-carousel {
    margin-top: 0.5rem;
}

.info-stores-carousel .carousel-inner {
    background-color: #ffffff;
    border-radius: 14px;
    padding: 1.2rem 1.3rem 1.4rem 1.3rem;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.12);
    border-left: 4px solid var(--rp-amarillo);
}

.info-stores-slide-card {
    font-size: 0.86rem;
    color: #4b5563;
}

.info-stores-slide-pill {
    display: inline-flex;
    align-items: center;
    padding: 0.12rem 0.6rem;
    border-radius: 999px;
    background-color: rgba(16, 21, 40, 0.05);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: #4b5563;
    margin-bottom: 0.4rem;
}

.info-stores-slide-title {
    font-size: 0.96rem;
    font-weight: 700;
    color: var(--rp-azul-oscuro);
    margin-bottom: 0.45rem;
    line-height: 1.35;
}

.info-stores-slide-text {
    font-size: 0.86rem;
    line-height: 1.5;
    margin-bottom: 0.4rem;
}

.info-stores-slide-meta {
    font-size: 0.78rem;
    color: #6b7280;
    font-style: italic;
    line-height: 1.4;
}

.info-stores-carousel .carousel-indicators {
    position: static;
    margin-top: 0.4rem;
}

.info-stores-carousel .carousel-indicators [data-bs-target] {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: rgba(16, 21, 40, 0.25);
}

.info-stores-carousel .carousel-indicators .active {
    background-color: var(--rp-amarillo);
}

.info-stores-carousel .carousel-control-prev,
.info-stores-carousel .carousel-control-next {
    width: 2.2rem;
}

.info-stores-carousel .carousel-control-prev-icon,
.info-stores-carousel .carousel-control-next-icon {
    filter: invert(1);
}

@media (max-width: 768px) {
    .info-stores-carousel .carousel-inner {
        padding: 1rem 1.1rem 1.2rem 1.1rem;
    }
}


    /* Controles de navegación del carrusel */
    .info-carousel-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        padding-top: 1rem;
    }

    .info-carousel-nav {
        display: flex;
        gap: 0.5rem;
    }

    .info-carousel-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(16, 21, 40, 0.08);
        color: var(--rp-azul-oscuro);
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .info-carousel-btn:hover {
        background-color: rgba(16, 21, 40, 0.15);
        transform: scale(1.05);
    }

    .info-carousel-indicators {
        display: flex;
        gap: 0.4rem;
        justify-content: center;
        flex-grow: 1;
    }

    .info-carousel-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: rgba(16, 21, 40, 0.2);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .info-carousel-indicator.active {
        background-color: var(--rp-azul-oscuro);
        transform: scale(1.2);
    }

    .info-carousel-progress {
        height: 3px;
        background-color: rgba(16, 21, 40, 0.1);
        border-radius: 2px;
        margin-top: 0.5rem;
        overflow: hidden;
    }

    .info-carousel-progress-bar {
        height: 100%;
        background-color: var(--rp-amarillo);
        width: 0%;
        transition: width 0.1s linear;
    }

    /* Mejoras responsivas */
    @media (max-width: 768px) {
        .info-stores-layout {
            grid-template-columns: minmax(0, 1fr);
        }

        .info-vertical-carousel {
            margin-top: 0.6rem;
            min-height: 320px;
        }

        .info-carousel-controls {
            flex-direction: column;
            gap: 0.8rem;
        }

        .info-carousel-indicators {
            order: -1;
        }
    }

    @media (max-width: 480px) {
        .info-vertical-carousel {
            padding: 1rem;
        }

        .info-vertical-slide {
            padding: 1rem;
        }

        .info-vertical-slide-title {
            font-size: 0.95rem;
        }

        .info-vertical-slide-text {
            font-size: 0.82rem;
        }
    }






    /* ======== 1.5 NÚMERO DE TRABAJADORES Y ESTRUCTURA BÁSICA ======== */

.info-staff-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.4fr) minmax(0, 1.3fr);
    gap: 1.2rem;
    margin-top: 0.7rem;
}

.info-staff-intro {
    font-size: 0.9rem;
    color: #4b5563;
}

.info-staff-kpi-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 0.6rem;
    margin-top: 0.7rem;
}

.info-staff-kpi-card {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 0.7rem 0.75rem;
    box-shadow: 0 3px 10px rgba(15, 23, 42, 0.10);
    border-left: 3px solid var(--rp-amarillo);
}

.info-staff-kpi-label {
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: #6b7280;
    margin-bottom: 0.15rem;
}

.info-staff-kpi-number {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--rp-azul-oscuro);
}

.info-staff-kpi-sub {
    font-size: 0.8rem;
    color: #6b7280;
}

.info-staff-table-title {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--rp-azul-oscuro);
    margin-bottom: 0.3rem;
}

.info-staff-table {
    font-size: 0.8rem;
}

.info-staff-table th {
    text-transform: uppercase;
    letter-spacing: .06em;
    color: #6b7280;
    border-top: none;
}

.info-staff-table td {
    color: #374151;
    vertical-align: top;
}

.info-staff-level {
    font-weight: 600;
    color: var(--rp-azul-oscuro);
}

.info-staff-note {
    font-size: 0.8rem;
    color: #6b7280;
    margin-top: 0.6rem;
    border-top: 1px dashed rgba(156, 163, 175, 0.7);
    padding-top: 0.45rem;
}

@media (max-width: 768px) {
    .info-staff-layout {
        grid-template-columns: minmax(0, 1fr);
    }
}




/* ======== 1.4 LOGO E IDENTIDAD VISUAL CORPORATIVA ======== */

.info-brand-carousel {
    margin-top: 0.8rem;
}

.info-brand-slide-card {
    background-color: #ffffff;
    border-radius: 14px;
    padding: 1rem 1.2rem 1.2rem 1.2rem;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.12);
    border-left: 4px solid var(--rp-amarillo);
    min-height: 200px;
}

.info-brand-header {
    display: flex;
    align-items: center;
    gap: 0.9rem;
    margin-bottom: 0.4rem;
}

.info-brand-logo-wrap {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #ffffff;
    border: 2px solid rgba(255, 210, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 3px 10px rgba(15, 23, 42, 0.25);
    overflow: hidden;
}

.info-brand-logo {
    max-width: 70px;
    max-height: 70px;
    object-fit: contain;
}

.info-brand-pill {
    display: inline-flex;
    align-items: center;
    padding: 0.12rem 0.6rem;
    border-radius: 999px;
    background-color: rgba(16, 21, 40, 0.05);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: #4b5563;
    margin-bottom: 0.15rem;
}

.info-brand-name {
    font-size: 0.96rem;
    font-weight: 700;
    color: var(--rp-azul-oscuro);
}

.info-brand-text {
    font-size: 0.86rem;
    color: #4b5563;
    margin-bottom: 0.25rem;
}

.info-brand-meta {
    font-size: 0.8rem;
    color: #6b7280;
}

.info-brand-carousel .carousel-indicators {
    position: static;
    margin-top: 0.5rem;
}

.info-brand-carousel .carousel-indicators [data-bs-target] {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: var(--rp-azul-oscuro);
    opacity: 0.3;
}

.info-brand-carousel .carousel-indicators .active {
    opacity: 1;
    background-color: var(--rp-amarillo);
}

.info-brand-carousel .carousel-control-prev,
.info-brand-carousel .carousel-control-next {
    width: 2.2rem;
}

.info-brand-carousel .carousel-control-prev-icon,
.info-brand-carousel .carousel-control-next-icon {
    filter: invert(1);
}

@media (max-width: 768px) {
    .info-brand-header {
        align-items: flex-start;
    }
}


/* ======== 1.6 RAZÓN SOCIAL, FORMA JURÍDICA Y GRUPO EMPRESARIAL ======== */

.info-legal-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.4fr) minmax(0, 1.4fr);
    gap: 1.2rem;
    margin-top: 0.7rem;
    align-items: flex-start;
}

.info-legal-card {
    background-color: #ffffff;
    border-radius: 14px;
    padding: 1.1rem 1.2rem 1.2rem 1.2rem;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.12);
    border-left: 4px solid var(--rp-amarillo);
}

.info-legal-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.4rem;
}

.info-legal-logo-wrap {
    width: 72px;
    height: 72px;
    border-radius: 999px;
    background-color: #ffffff;
    border: 2px solid rgba(255, 210, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 3px 10px rgba(15, 23, 42, 0.25);
    flex-shrink: 0;
    overflow: hidden;
}

.info-legal-logo {
    max-width: 64px;
    max-height: 64px;
    object-fit: contain;
}

.info-legal-pill {
    display: inline-flex;
    align-items: center;
    padding: 0.12rem 0.6rem;
    border-radius: 999px;
    background-color: rgba(16, 21, 40, 0.05);
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: #4b5563;
    margin-bottom: 0.15rem;
}

.info-legal-name {
    font-size: 1.02rem;
    font-weight: 800;
    color: var(--rp-azul-oscuro);
    margin-bottom: 0.1rem;
}

.info-legal-sub {
    font-size: 0.84rem;
    color: #6b7280;
    margin-bottom: 0;
}

.info-legal-text {
    font-size: 0.86rem;
    color: #4b5563;
    margin-bottom: 0.4rem;
    line-height: 1.5;
}

.info-legal-block-title {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--rp-azul-oscuro);
    margin-bottom: 0.25rem;
}

.info-legal-address {
    font-size: 0.86rem;
    color: #111827;
    margin-bottom: 0.35rem;
}

.info-legal-divider {
    margin: 0.7rem 0;
    border-top: 1px dashed rgba(156, 163, 175, 0.7);
}

.info-legal-meta {
    font-size: 0.78rem;
    color: #6b7280;
    margin-top: 0.3rem;
}

@media (max-width: 768px) {
    .info-legal-layout {
        grid-template-columns: minmax(0, 1fr);
    }
}



</style>
@endpush

@section('content')

    {{-- HERO --}}
    @include('pages.inicio._hero')

    {{-- Sección principal con las tarjetas --}}
    <section class="info-section">
        <div class="container">
            @include('pages.inicio._aspectos')
            @include('pages.inicio._planeamiento')
            @include('pages.inicio._control')
            @include('pages.inicio._anexos')
        </div>
    </section>

@endsection


