{{-- Estilos base para todas las páginas de línea de productos --}}
<style>
    /* HERO DIVIDIDO (TEXTO + IMAGEN) */
    .rp-line-hero-wrap {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.4fr);
        min-height: 320px;
    }

    .rp-line-hero-left {
        background-color: #f5f5f5;
        padding: 3rem 3rem 3rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .rp-line-hero-right {
        background-size: cover;
        background-position: center;
        min-height: 260px;
    }

    .rp-line-breadcrumb {
        font-size: 0.8rem;
        color: #777;
        margin-bottom: 1rem;
    }

    .rp-line-breadcrumb a {
        color: inherit;
        text-decoration: none;
    }

    .rp-line-breadcrumb a:hover {
        text-decoration: underline;
    }

    .rp-line-hero-icon {
        width: 64px;
        height: 64px;
        border-radius: 999px;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        margin-bottom: 1rem;
    }

    .rp-line-hero-icon img {
        width: 36px;
        height: 36px;
        display: block;
    }

    .rp-line-hero-title {
        font-size: 2rem;
        font-weight: 700;
        color: #101528;
        margin-bottom: 0.75rem;
    }

    .rp-line-hero-text {
        font-size: 0.9rem;
        color: #555;
        max-width: 460px;
    }

    .rp-line-brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        margin-top: 1.5rem;
        padding: 0.35rem 0.8rem;
        border-radius: 999px;
        background-color: #ffffff;
        font-size: 0.78rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.06);
    }

    .rp-line-brand-dot {
        width: 10px;
        height: 10px;
        border-radius: 999px;
        background-color: #c8102e;
    }

    @media (max-width: 992px) {
        .rp-line-hero-wrap {
            grid-template-columns: minmax(0, 1fr);
        }
        .rp-line-hero-left {
            padding: 2.5rem 1.5rem;
        }
    }

    /* CARDS DE SUBPRODUCTOS */
    .rp-subproducts-section {
        padding: 3rem 0;
        background-color: #ffffff;
    }

    .rp-subproducts-title {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 1.5rem;
        color: #101528;
    }

    .rp-subproduct-card {
        border-radius: 1rem;
        overflow: hidden;
        background-color: #ffffff;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transition: transform 0.16s ease, box-shadow 0.16s ease;
        cursor: default;
        height: 100%;
    }

    .rp-subproduct-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 26px rgba(0,0,0,0.12);
    }

    .rp-subproduct-image {
        width: 100%;
        height: 190px;
        object-fit: cover;
        display: block;
    }

    .rp-subproduct-body {
        padding: 0.8rem 1rem 1rem 1rem;
    }

    .rp-subproduct-name {
        font-size: 0.95rem;
        font-weight: 600;
        color: #101528;
        margin-bottom: 0;
    }

    .rp-subproduct-text {
        font-size: 0.85rem;
        color: #555;
        margin-top: 0.4rem;
    }

    /* NEWSLETTER */
    .rp-newsletter {
        background-color: #101528;
        color: #ffffff;
        padding: 3rem 0 2.5rem 0;
        margin-top: 1.5rem;
    }

    .rp-newsletter-title {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .rp-newsletter-text {
        font-size: 0.9rem;
        max-width: 380px;
    }

    .rp-newsletter-form {
        max-width: 360px;
    }

    .rp-newsletter-input {
        background-color: #161c33;
        border: 1px solid #252b45;
        color: #ffffff;
        font-size: 0.9rem;
    }

    .rp-newsletter-input::placeholder {
        color: #8f96b5;
    }

    .rp-newsletter-btn {
        background-color: var(--rp-amarillo);
        border: none;
        font-size: 0.85rem;
        font-weight: 600;
        color: #101528;
        padding: 0.45rem 0.9rem;
    }

    @media (max-width: 768px) {
        .rp-newsletter {
            text-align: center;
        }
        .rp-newsletter-text,
        .rp-newsletter-form {
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>
