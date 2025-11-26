@extends('layouts.app')

@section('title', 'Contáctanos - Rico Alimentos')

@push('styles')
<style>
    .rp-contact-hero {
        padding: 3rem 0 2rem 0;
        background-color: #f5f5f5;
        border-bottom: 1px solid #e2e4ee;
    }

    .rp-contact-subtitle {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: .14em;
        color: #777;
        margin-bottom: 0.4rem;
    }

    .rp-contact-title {
        font-size: 1.9rem;
        font-weight: 700;
        color: #101528;
        margin-bottom: 0.6rem;
    }

    .rp-contact-text {
        font-size: 0.9rem;
        color: #555;
        max-width: 480px;
    }

    /* LAYOUT BOT */
    .rp-contact-bot-section {
        padding: 2.5rem 0 3rem 0;
        background-color: #ffffff;
    }

    .rp-bot-card {
        background-color: #f8f9ff;
        border-radius: 1.2rem;
        padding: 1.5rem;
        box-shadow: 0 10px 26px rgba(0,0,0,0.08);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .rp-bot-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .rp-bot-avatar {
        width: 42px;
        height: 42px;
        border-radius: 999px;
        background-color: #101528;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffd200;
        font-weight: 800;
        font-size: 1.2rem;
    }

    .rp-bot-name {
        font-size: 0.95rem;
        font-weight: 600;
        color: #101528;
        margin-bottom: 0.1rem;
    }

    .rp-bot-status {
        font-size: 0.8rem;
        color: #777;
    }

    .rp-chat-window {
        flex: 1;
        background-color: #ffffff;
        border-radius: 1rem;
        padding: 1rem;
        overflow-y: auto;
        max-height: 420px;
        margin-bottom: 1rem;
        border: 1px solid #e2e4ee;
    }

    .rp-chat-message {
        display: flex;
        margin-bottom: 0.7rem;
    }

    .rp-chat-message.bot {
        justify-content: flex-start;
    }

    .rp-chat-message.user {
        justify-content: flex-end;
    }

    .rp-chat-bubble {
        max-width: 80%;
        padding: 0.55rem 0.75rem;
        border-radius: 0.8rem;
        font-size: 0.85rem;
        line-height: 1.4;
    }

    .rp-chat-bubble.bot {
        background-color: #f1f3ff;
        color: #101528;
        border-bottom-left-radius: 0.2rem;
    }

    .rp-chat-bubble.user {
        background-color: #ffd200;
        color: #101528;
        border-bottom-right-radius: 0.2rem;
    }

    .rp-chat-time {
        font-size: 0.7rem;
        color: #999;
        margin-top: 0.1rem;
    }

    .rp-chat-input-wrap {
        display: flex;
        gap: 0.6rem;
        align-items: center;
    }

    .rp-chat-input-wrap input {
        font-size: 0.9rem;
    }

    .rp-chat-send-btn {
        white-space: nowrap;
        font-size: 0.9rem;
    }

    .rp-faq-chips-title {
        font-size: 0.85rem;
        font-weight: 600;
        color: #101528;
        margin-bottom: 0.6rem;
    }

    .rp-faq-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 0.4rem;
        margin-bottom: 0.8rem;
    }

    .rp-faq-chip {
        border-radius: 999px;
        border: 1px solid #e2e4ee;
        padding: 0.25rem 0.7rem;
        font-size: 0.8rem;
        background-color: #ffffff;
        cursor: pointer;
        transition: background-color 0.15s ease, transform 0.15s ease;
    }

    .rp-faq-chip:hover {
        background-color: #ffd20033;
        transform: translateY(-1px);
    }

    .rp-contact-info-card {
        background-color: #101528;
        color: #ffffff;
        border-radius: 1.2rem;
        padding: 1.5rem 1.5rem 1.2rem 1.5rem;
        height: 100%;
    }

    .rp-contact-info-card h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.8rem;
    }

    .rp-contact-info-card p {
        font-size: 0.85rem;
        margin-bottom: 0.4rem;
    }

    .rp-contact-info-card a {
        color: #ffd200;
        text-decoration: none;
    }

    .rp-contact-info-card a:hover {
        text-decoration: underline;
    }

    .rp-contact-info-card ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0.6rem;
    }

    .rp-contact-info-card ul li {
        font-size: 0.83rem;
    }

    @media (max-width: 992px) {
        .rp-contact-hero {
            padding: 2.5rem 0 1.5rem 0;
        }
        .rp-chat-window {
            max-height: 360px;
        }
    }
</style>
@endpush

@section('content')

    {{-- HERO CONTACTO --}}
    <section class="rp-contact-hero">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <p class="rp-contact-subtitle">Canales de atención</p>
                    <h1 class="rp-contact-title">Hablemos con Rico</h1>
                    <p class="rp-contact-text mb-0">
                        Este asistente virtual responde preguntas frecuentes sobre
                        Rico Alimentos: teléfonos, ventas, tiendas, reclamos, marcas,
                        productos y trabajo. No es un chat en tiempo real, pero está
                        entrenado con información oficial de la empresa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- BOT DE PREGUNTAS FRECUENTES --}}
    <section class="rp-contact-bot-section">
        <div class="container">
            <div class="row g-4">
                {{-- Chat bot --}}
                <div class="col-lg-7">
                    <div class="rp-bot-card">
                        <div class="rp-bot-header">
                            <div class="rp-bot-avatar">R</div>
                            <div>
                                <div class="rp-bot-name">Rico Bot</div>
                                <div class="rp-bot-status">Asistente virtual de Rico Alimentos</div>
                            </div>
                        </div>

                        <div id="rpChatWindow" class="rp-chat-window">
                            {{-- mensajes se inyectan por JS --}}
                        </div>

                        <div class="rp-faq-chips">
                            <div class="rp-faq-chips-title">Preguntas rápidas</div>

                            <button type="button" class="rp-faq-chip" data-question="¿Cuál es el teléfono de atención o central de Rico Alimentos?">
                                Teléfono de atención
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="Quiero vender productos Rico, ¿con quién me comunico?">
                                Quiero vender productos Rico
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="¿En qué ciudades hay Tiendas Rico?">
                                Tiendas Rico
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="¿Cómo presento un reclamo o queja?">
                                Reclamos / Libro de reclamaciones
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="¿Qué marcas pertenecen a Rico Alimentos?">
                                Marcas del grupo
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="¿Qué productos de pollo ofrece Rico?">
                                Productos de pollo
                            </button>
                            <button type="button" class="rp-faq-chip" data-question="¿Cómo puedo trabajar en Rico Alimentos?">
                                Trabaja con nosotros
                            </button>
                        </div>

                        <form id="rpChatForm" class="rp-chat-input-wrap mt-1">
                            <input
                                id="rpChatInput"
                                type="text"
                                class="form-control"
                                placeholder="Escribe tu pregunta sobre Rico Alimentos..."
                                autocomplete="off"
                                required
                            >
                            <button type="submit" class="btn btn-rp rp-chat-send-btn">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Información de contacto estática --}}
                <div class="col-lg-5">
                    <div class="rp-contact-info-card">
                        <h3>Canales oficiales</h3>
                        <p class="mb-2">
                            Si el asistente no resuelve tu duda, puedes usar estos
                            canales de contacto directo.
                        </p>

                        <p class="mb-1"><strong>Central / ventas</strong></p>
                        <ul>
                            <li>Teléfono gratuito Perú: <strong>0800 17017</strong></li>
                            <li>Correo ventas: <a href="mailto:ventas@ricoalimentos.pe">ventas@ricoalimentos.pe</a></li>
                        </ul>

                        <p class="mb-1 mt-3"><strong>Tiendas Rico</strong></p>
                        <p class="mb-1">
                            Encuentra tu tienda más cercana en:
                            <a href="https://ricoalimentos.pe/tiendas-rico/" target="_blank" rel="noopener">
                                ricoalimentos.pe/tiendas-rico
                            </a>.
                        </p>

                        <p class="mb-1 mt-3"><strong>Libro de reclamaciones</strong></p>
                        <p class="mb-1">
                            Para reclamos o quejas formales, accede al Libro de
                            Reclamaciones virtual desde el sitio oficial.
                        </p>

                        <p class="mb-1 mt-3"><strong>Información general</strong></p>
                        <p class="mb-0">
                            Para conocer más sobre la historia, marcas y unidades de
                            negocio de Rico Alimentos, visita la sección “Nosotros”
                            del sitio web oficial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const chatWindow = document.getElementById('rpChatWindow');
    const chatForm   = document.getElementById('rpChatForm');
    const chatInput  = document.getElementById('rpChatInput');
    const chips      = document.querySelectorAll('.rp-faq-chip');

    // ========== MINI BASE DE DATOS EN JS ==========
    // Cada entrada tiene: id, tags (palabras), category y answer (HTML)
    const KB = [
        {
            id: 'telefono',
            tags: ['telefono','teléfono','central','llamar','numero','número','contacto'],
            category: 'contacto',
            answer: `
                Puedes comunicarte con nuestra central llamando al
                <strong>0800 17017</strong>, una línea gratuita para todo el Perú.
                Desde allí te derivarán al área de ventas o de servicio al cliente
                según tu consulta.
            `
        },
        {
            id: 'ventas',
            tags: ['ventas','mayorista','distribuidor','comprar para mi negocio','compras grandes','proveedor'],
            category: 'ventas',
            answer: `
                Si deseas comprar al por mayor o convertirte en cliente comercial,
                escríbenos a <a href="mailto:ventas@ricoalimentos.pe">ventas@ricoalimentos.pe</a>
                indicando tus datos y ciudad, o llama al <strong>0800 17017</strong>
                para que te atienda el equipo de ventas.
            `
        },
        {
            id: 'tiendas',
            tags: ['tienda','tiendas','donde compro','dónde compro','puntos de venta','sucursales'],
            category: 'tiendas',
            answer: `
                Para encontrar la tienda Rico más cercana ingresa a
                <a href="https://ricoalimentos.pe/tiendas-rico/" target="_blank" rel="noopener">
                    ricoalimentos.pe/tiendas-rico
                </a>.
                Allí verás las Tiendas Rico organizadas por región con su dirección
                y horario referencial.
            `
        },
        {
            id: 'horario-tiendas',
            tags: ['horario','horarios','abre','cierran','hora','tiendas rico'],
            category: 'tiendas',
            answer: `
                Los horarios pueden variar según la tienda y la ciudad, pero muchas
                Tiendas Rico atienden desde muy temprano en la mañana hasta la tarde.
                Te recomendamos revisar el horario específico de tu tienda en
                <a href="https://ricoalimentos.pe/tiendas-rico/" target="_blank" rel="noopener">
                    la sección Tiendas Rico
                </a> o comunicarte por teléfono con la tienda elegida.
            `
        },
        {
            id: 'reclamos',
            tags: ['reclamo','reclamos','queja','libro de reclamaciones','reclamacion','reclamación'],
            category: 'reclamos',
            answer: `
                Para registrar un reclamo o queja formal sobre un producto o servicio,
                utiliza el <strong>Libro de Reclamaciones</strong> de Rico Alimentos.
                En el sitio oficial encontrarás el acceso al libro virtual, donde
                podrás ingresar tus datos y detallar el inconveniente según la
                normativa de protección al consumidor en el Perú.
            `
        },
        {
            id: 'marcas',
            tags: ['marcas','grupo','marcas del grupo','que marcas','qué marcas'],
            category: 'empresa',
            answer: `
                Rico Alimentos reúne varias marcas de alimentos, entre ellas:
                <strong>Rico</strong> (pollos, cerdo, embutidos y preparados),
                <strong>Casa Europa</strong> (embutidos premium),
                <strong>Naturave</strong>,
                <strong>Sursol</strong> (aceite comestible),
                <strong>Costumbres</strong> y
                <strong>3 Ríos</strong> (piscos y vinos).
            `
        },
        {
            id: 'empresa',
            tags: ['quienes son','quiénes son','historia','empresa','rico alimentos','ricopollo'],
            category: 'empresa',
            answer: `
                Rico Alimentos es una empresa peruana con más de cinco décadas de
                historia. Nació como una empresa avícola familiar en el sur del país
                y hoy integra granjas, plantas de beneficio, producción de embutidos,
                aceites, licores y una red de Tiendas Rico que llevan productos a
                miles de hogares.
            `
        },
        {
            id: 'pollo',
            tags: ['pollo','productos de pollo','entero','trozado','menudencia','menudencias'],
            category: 'productos',
            answer: `
                La línea de <strong>pollo</strong> incluye pollos enteros en
                diferentes rangos de peso, presentaciones trozadas (medios pollos,
                mixes familiares, etc.) y menudencias (mollejas, hígados, corazones).
                Todo se produce bajo una cadena de frío controlada para asegurar
                frescura y sabor.
            `
        },
        {
            id: 'cerdo',
            tags: ['cerdo','chuletas','lechon','lechón','cortes especiales'],
            category: 'productos',
            answer: `
                En <strong>cerdo</strong>, Rico ofrece chuletas, cortes especiales
                (lomos, costillas, etc.) y presentaciones de lechón pensadas para
                platos cotidianos, parrillas y ocasiones especiales.
            `
        },
        {
            id: 'preparados',
            tags: ['preparados','nuggets','hamburguesas','alitas','empanizados','sazonados','enrollados'],
            category: 'productos',
            answer: `
                Los <strong>preparados</strong> Rico son productos listos o
                semi-listos para cocinar, como nuggets, hamburguesas de pollo,
                alitas sazonadas, empanizados y enrollados. Están pensados para
                ahorrar tiempo en la cocina manteniendo el sabor de la marca.
            `
        },
        {
            id: 'embutidos',
            tags: ['embutidos','jamon','jamón','salchichas','chorizos','fiambres','tocino'],
            category: 'productos',
            answer: `
                En <strong>embutidos</strong> encontrarás jamones, salchichas,
                chorizos, fiambres y tocinos, con líneas para consumo diario y
                propuestas más especiales bajo marcas como Rico y Casa Europa.
            `
        },
        {
            id: 'huevo',
            tags: ['huevo','huevos','huevo de mesa'],
            category: 'productos',
            answer: `
                La línea de <strong>huevo</strong> se orienta a huevos de mesa
                frescos, ideales para el consumo familiar, la panadería y la
                pastelería, distribuidos a través de la red comercial de la empresa.
            `
        },
        {
            id: 'aceites',
            tags: ['aceite','aceites','sursol','aceite de soya','omega','colesterol'],
            category: 'productos',
            answer: `
                <strong>Sursol</strong> es el aceite de soya de Rico Alimentos.
                Se promociona como un aceite con 0% colesterol y aporte de vitamina E,
                Omega 3 y Omega 6, recomendado para la cocina de todos los días.
            `
        },
        {
            id: 'licores',
            tags: ['pisco','vino','licor','licores','costumbres','3 rios','3 ríos','tres rios'],
            category: 'productos',
            answer: `
                A través de la bodega Tres Ríos y la marca <strong>Costumbres</strong>,
                Rico Alimentos produce piscos y vinos que han sido reconocidos en
                concursos nacionales e internacionales. El consumo de licores es
                exclusivo para <strong>mayores de edad</strong> y se recomienda
                hacerlo con moderación.
            `
        },
        {
            id: 'calidad',
            tags: ['calidad','inocuidad','cadena de frio','cadena de frío','seguridad','proceso'],
            category: 'calidad',
            answer: `
                Rico Alimentos controla la cadena productiva desde la granja hasta
                el punto de venta: crianza, alimentación, beneficio, procesamiento,
                cadena de frío y distribución. Esto permite asegurar inocuidad y
                calidad en cada producto que llega a la mesa.
            `
        },
        {
            id: 'trabajo',
            tags: ['trabajar','empleo','trabajo','postular','convocatoria','talento'],
            category: 'talento',
            answer: `
                Si te interesa trabajar en Rico Alimentos, revisa la sección
                “Talento” del sitio oficial y los avisos publicados en portales
                de empleo. Allí se detallan los puestos disponibles, requisitos
                y formas de postulación.
            `
        },
        {
            id: 'delivery',
            tags: ['delivery','envio','envío','domicilio','tienda virtual','online','comprar por internet'],
            category: 'tiendas',
            answer: `
                El sitio web de Rico Alimentos se enfoca en información de
                productos y ubicación de Tiendas Rico. En algunas ciudades pueden
                existir tiendas virtuales o servicios de reparto gestionados
                localmente, por lo que te sugerimos consultar en tu tienda más
                cercana o en las redes sociales oficiales de la marca.
            `
        },
        {
            id: 'correo-general',
            tags: ['correo','email','mail','escribir','contacto por correo'],
            category: 'contacto',
            answer: `
                Para consultas comerciales puedes escribir a
                <a href="mailto:ventas@ricoalimentos.pe">ventas@ricoalimentos.pe</a>.
                Para reclamos formales, usa el Libro de Reclamaciones disponible
                en el sitio oficial.
            `
        }
    ];

    // Normalizar texto (minúsculas, sin tildes)
    function normalize(text) {
        return text
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');
    }

    function addMessage(html, sender = 'bot') {
        const wrapper = document.createElement('div');
        wrapper.classList.add('rp-chat-message', sender);

        const bubble = document.createElement('div');
        bubble.classList.add('rp-chat-bubble', sender);
        bubble.innerHTML = html;

        const time = document.createElement('div');
        time.classList.add('rp-chat-time');
        const now = new Date();
        const hh = String(now.getHours()).padStart(2, '0');
        const mm = String(now.getMinutes()).padStart(2, '0');
        time.textContent = hh + ':' + mm;

        wrapper.appendChild(bubble);
        wrapper.appendChild(time);

        chatWindow.appendChild(wrapper);
        chatWindow.scrollTop = chatWindow.scrollHeight;
    }

    function findBestAnswer(question) {
        const qNorm = normalize(question);
        let best = null;
        let bestScore = 0;

        KB.forEach(entry => {
            let score = 0;
            entry.tags.forEach(tag => {
                const tNorm = normalize(tag);
                if (tNorm && qNorm.includes(tNorm)) {
                    score += 2; // coincidencia fuerte por tag
                }
            });

            // bonus: palabras relevantes de la pregunta visible
            const words = normalize(entry.id + ' ' + entry.category).split(/\s+/);
            words.forEach(w => {
                if (w.length >= 4 && qNorm.includes(w)) {
                    score += 1;
                }
            });

            if (score > bestScore) {
                bestScore = score;
                best = entry;
            }
        });

        if (!best || bestScore === 0) {
            return `
                Soy el asistente virtual de Rico Alimentos.
                No encontré una coincidencia clara para tu pregunta, pero puedo ayudarte con:
                <strong>teléfonos y correos de contacto, ventas al por mayor, Tiendas Rico,
                libro de reclamaciones, marcas, productos y trabajo en la empresa.</strong>
                También puedes llamar al <strong>0800 17017</strong> o escribir a
                <a href="mailto:ventas@ricoalimentos.pe">ventas@ricoalimentos.pe</a>.
            `;
        }

        return best.answer;
    }

    function handleQuestion(text) {
        if (!text.trim()) return;
        addMessage(text, 'user');
        const answer = findBestAnswer(text);
        setTimeout(() => addMessage(answer, 'bot'), 200);
    }

    // Mensaje de bienvenida
    addMessage(`
        ¡Hola! Soy <strong>Rico Bot</strong>.
        Pregúntame sobre teléfonos, ventas al por mayor, Tiendas Rico, reclamos,
        marcas, productos o trabajo en Rico Alimentos.
    `, 'bot');

    // Envío por formulario
    chatForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const text = chatInput.value;
        chatInput.value = '';
        handleQuestion(text);
    });

    // Envío al hacer clic en chips
    chips.forEach(chip => {
        chip.addEventListener('click', function () {
            const q = this.getAttribute('data-question') || this.textContent;
            handleQuestion(q);
        });
    });
});
</script>
@endpush
