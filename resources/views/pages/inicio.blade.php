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
</style>
@endpush

@section('content')

    {{-- HERO --}}
    <section class="info-hero">
        <div class="container">
            <h1 class="info-hero-title">
                Bienvenido a nuestra Página Informativa Rico Alimentos
            </h1>
            <p class="info-hero-subtitle">
                Estructura general para el análisis organizacional de Rico Alimentos /
                Ricopollo, integrando aspectos de la empresa, planeamiento
                estratégico, control y anexos. Por ahora es solo el índice; más
                adelante incorporarás el contenido detallado en cada punto.
            </p>
        </div>
    </section>

    <section class="info-section">
        <div class="container">

            {{-- 1. Aspectos Generales --}}
            <div class="info-section-card">
                <h2 class="info-section-title">1. Aspectos Generales de la Empresa</h2>

                <div class="info-topic-list">
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s11">
                        1.1. Reseña histórica de la empresa
                    </button>
                    <div class="collapse info-topic-content" id="s11">
                        <p>
                            Aquí irá la reseña histórica de Rico Alimentos: origen en Tacna,
                            fundación de Rico Pollo en Arequipa, evolución de granja familiar
                            a corporación de alimentos, principales hitos cronológicos, etc.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s12">
                        1.2. Ubicación geográfica
                    </button>
                    <div class="collapse info-topic-content" id="s12">
                        <p>
                            Sección para describir la ubicación de la sede principal,
                            plantas de beneficio, granjas y centros de distribución, así
                            como el ámbito geográfico donde opera Rico Alimentos.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s13">
                        1.3. Locales, Tiendas Rico y mapa de presencia
                    </button>
                    <div class="collapse info-topic-content" id="s13">
                        <p>
                            Aquí podrás incorporar un listado de Tiendas Rico por región
                            (Apurímac, Arequipa, Cusco, Lima, etc.) y un mapa o esquema de
                            presencia en el territorio.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s14">
                        1.4. Logo e identidad visual corporativa
                    </button>
                    <div class="collapse info-topic-content" id="s14">
                        <p>
                            Espacio para explicar la construcción del logo Rico, colores
                            corporativos, tipografía y lineamientos básicos de uso de marca.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s15">
                        1.5. Número de trabajadores y estructura básica
                    </button>
                    <div class="collapse info-topic-content" id="s15">
                        <p>
                            Datos aproximados de colaboradores, distribución por áreas
                            (producción, logística, administración, comercial, etc.) y
                            descripción general de la estructura organizacional.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s16">
                        1.6. Razón social, forma jurídica y grupo empresarial
                    </button>
                    <div class="collapse info-topic-content" id="s16">
                        <p>
                            Información sobre la razón social, tipo de sociedad, pertenencia
                            a grupo empresarial y principales inscripciones registrales.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s17">
                        1.7. Mercado que abastece y segmentos de clientes
                    </button>
                    <div class="collapse info-topic-content" id="s17">
                        <p>
                            Descripción de los mercados objetivo: hogares, canal moderno,
                            canal tradicional, food service, mayoristas, etc.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s18">
                        1.8. Principales proveedores y aliados estratégicos
                    </button>
                    <div class="collapse info-topic-content" id="s18">
                        <p>
                            Sección para detallar proveedores críticos (insumos, granos,
                            envases, logística) y alianzas con otras empresas o marcas.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s19">
                        1.9. Productos y servicios ofrecidos
                    </button>
                    <div class="collapse info-topic-content" id="s19">
                        <p>
                            Resumen de las líneas de producto: pollo, cerdo, preparados,
                            embutidos, huevo, aceites, licores y servicios complementarios.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s110">
                        1.10. Marcas, emblemas y logotipos
                    </button>
                    <div class="collapse info-topic-content" id="s110">
                        <p>
                            Detalle del portafolio de marcas del grupo: Rico, Casa Europa,
                            Naturave, Sursol, Costumbres, 3 Ríos, etc.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s111">
                        1.11. Tecnología en la empresa
                    </button>
                    <div class="collapse info-topic-content" id="s111">
                        <p>
                            Tecnología utilizada en granjas, plantas de beneficio,
                            cadena de frío y sistemas de información de soporte.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s112">
                        1.12. Publicidad, página web y material gráfico
                    </button>
                    <div class="collapse info-topic-content" id="s112">
                        <p>
                            Sección para campañas, afiches, página web, redes sociales
                            y piezas gráficas representativas de Rico Alimentos.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 2. Planeamiento estratégico --}}
            <div class="info-section-card">
                <h2 class="info-section-title">2. Análisis de Planeamiento Estratégico</h2>

                <div class="info-topic-list">
                    {{-- 2.1 con subniveles --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s21">
                        2.1. Visión, misión y valores de la empresa
                    </button>
                    <div class="collapse info-topic-content" id="s21">
                        <p>
                            Desarrollo de la aspiración de futuro (visión), propósito
                            fundamental (misión) y valores corporativos que guían la
                            cultura de Rico Alimentos.
                        </p>

                        <div class="info-subtopic-box">
                            <div class="info-subtopic-title">
                                Subtemas sugeridos:
                            </div>
                            <div class="info-subtopic-list">
                                <button class="info-subtopic-btn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#s211">
                                    2.1.1. Aspiración (Visión)
                                </button>
                                <div class="collapse info-topic-content mt-2" id="s211">
                                    <p>
                                        Texto de la visión oficial o propuesta académica
                                        sobre el futuro deseado de Rico Alimentos.
                                    </p>
                                </div>

                                <button class="info-subtopic-btn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#s212">
                                    2.1.2. Propósito (Misión)
                                </button>
                                <div class="collapse info-topic-content mt-2" id="s212">
                                    <p>
                                        Descripción de la misión: qué hace la empresa,
                                        para quién y con qué valor diferencial.
                                    </p>
                                </div>

                                <button class="info-subtopic-btn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#s213">
                                    2.1.3. Valores de la empresa
                                </button>
                                <div class="collapse info-topic-content mt-2" id="s213">
                                    <p>
                                        Listado y explicación de valores como calidad,
                                        confianza, innovación, responsabilidad social, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2.2 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s22">
                        2.2. Estructura organizacional
                    </button>
                    <div class="collapse info-topic-content" id="s22">
                        <p>
                            Organigrama, niveles jerárquicos, áreas clave y funciones
                            principales dentro de Rico Alimentos.
                        </p>
                    </div>

                    {{-- 2.3 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s23">
                        2.3. Cultura organizacional
                    </button>
                    <div class="collapse info-topic-content" id="s23">
                        <p>
                            Estilo de liderazgo, formas de trabajo, clima laboral y
                            elementos culturales que caracterizan a la empresa.
                        </p>
                    </div>

                    {{-- 2.4 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s24">
                        2.4. Gestión de calidad e inocuidad
                    </button>
                    <div class="collapse info-topic-content" id="s24">
                        <p>
                            Cómo se gestionan la calidad e inocuidad de los productos:
                            normas, certificaciones, procedimientos, auditorías, etc.
                        </p>
                    </div>

                    {{-- 2.5 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s25">
                        2.5. Análisis FODA interno
                    </button>
                    <div class="collapse info-topic-content" id="s25">
                        <p>
                            Fortalezas y debilidades relevantes a nivel de recursos,
                            procesos, capacidades, finanzas, marca, etc.
                        </p>
                    </div>

                    {{-- 2.6 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s26">
                        2.6. Análisis FODA externo
                    </button>
                    <div class="collapse info-topic-content" id="s26">
                        <p>
                            Oportunidades y amenazas del entorno competitivo,
                            económico, social, tecnológico y regulatorio.
                        </p>
                    </div>

                    {{-- 2.7 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s27">
                        2.7. Cruce FODA – Matriz CAME
                    </button>
                    <div class="collapse info-topic-content" id="s27">
                        <p>
                            Matriz CAME (Corregir, Afrontar, Mantener, Explotar) para
                            derivar estrategias a partir del FODA.
                        </p>
                    </div>

                    {{-- 2.8 --}}
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s28">
                        2.8. Mapa estratégico
                    </button>
                    <div class="collapse info-topic-content" id="s28">
                        <p>
                            Propuesta de mapa estratégico para Rico Alimentos con
                            objetivos en las cuatro perspectivas clásicas.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 3. Control estratégico --}}
            <div class="info-section-card">
                <h2 class="info-section-title">3. Control Estratégico</h2>

                <div class="info-topic-list">
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s31">
                        3.1. Cuadro de mando integral (BSC)
                    </button>
                    <div class="collapse info-topic-content" id="s31">
                        <p>
                            Diseño del BSC para Rico Alimentos: objetivos, indicadores,
                            metas e iniciativas por perspectiva.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s32">
                        3.2. Sistemas de información y control de gestión
                    </button>
                    <div class="collapse info-topic-content" id="s32">
                        <p>
                            Sistemas que soportan el control de operaciones, ventas,
                            finanzas y logística (ERP, BI, reportes, etc.).
                        </p>
                    </div>
                </div>
            </div>

            {{-- 4. Anexos --}}
            <div class="info-section-card">
                <h2 class="info-section-title">4. Anexos</h2>

                <div class="info-topic-list">
                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s41">
                        4.1. Evidencias (visitas, entrevistas, fotos, etc.)
                    </button>
                    <div class="collapse info-topic-content" id="s41">
                        <p>
                            Fotografías, capturas de pantalla, evidencias de visitas a
                            plantas o tiendas, entrevistas a colaboradores, etc.
                        </p>
                    </div>

                    <button class="info-topic-btn" type="button"
                            data-bs-toggle="collapse" data-bs-target="#s42">
                        4.2. Documentación complementaria
                    </button>
                    <div class="collapse info-topic-content" id="s42">
                        <p>
                            Normativas internas, manuales, informes resumidos,
                            cuadros comparativos u otros documentos relevantes para
                            el estudio.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
