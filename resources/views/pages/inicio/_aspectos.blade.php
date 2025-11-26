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
            De una granja familiar en Tacna y Arequipa durante los años 60,
            Rico ha evolucionado hasta consolidarse como Corporación Rico /
            Rico Alimentos, con una cadena productiva integrada, un portafolio
            diversificado de marcas y un enfoque creciente en sostenibilidad.
        </p>

        <div id="historiaRicoCarousel"
            class="carousel slide info-timeline-carousel"
            data-bs-ride="carousel"
            data-bs-touch="true"
            data-bs-interval="8000"
            data-bs-pause="hover">

            {{-- Indicadores (puntos) --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Orígenes"></button>
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="1" aria-label="Expansión"></button>
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="2" aria-label="Modernización"></button>
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="3" aria-label="Diversificación"></button>
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="4" aria-label="Sostenibilidad"></button>
                <button type="button" data-bs-target="#historiaRicoCarousel"
                        data-bs-slide-to="5" aria-label="Evolución corporativa"></button>
            </div>

            {{-- Slides --}}
            <div class="carousel-inner">

                {{-- Slide 1 --}}
                <div class="carousel-item active">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/FOTO-2.jpg') }}"
                                alt="Orígenes de Rico Alimentos"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Orígenes (1961–1967)
                                </div>
                                <p class="info-timeline-slide-text">
                                    Los orígenes se remontan a la década de 1960: en 1961 el
                                    Ing. Enrique Zapata Martineau inicia su primera experiencia
                                    avícola en Tacna y, en 1967, funda en Arequipa la empresa
                                    que luego se conocería como Rico Pollo, comenzando con una
                                    granja de engorde y venta de pollos vivos. Esta etapa marca
                                    la base familiar y técnica sobre la que se construyó la
                                    organización.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.25.48-PM.jpeg') }}"
                                alt="Expansión y comercialización"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Expansión y comercialización
                                    (finales de 1960s–1990s)
                                </div>
                                <p class="info-timeline-slide-text">
                                    A finales de los años 60 la empresa incorpora la
                                    comercialización directa con la apertura de sus primeras
                                    tiendas. En las décadas siguientes consolida su presencia
                                    regional, invierte en incubación y fortalece su flota y
                                    capacidades logísticas para atender mayores volúmenes y
                                    nuevos mercados.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.18.21-PM.jpeg') }}"
                                alt="Modernización productiva"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Modernización productiva (1990s–2010s)
                                </div>
                                <p class="info-timeline-slide-text">
                                    Durante las décadas de 1990 y 2000 la empresa impulsa un
                                    proceso sostenido de modernización: instala plantas de
                                    incubación (1995), traslada y moderniza su planta principal
                                    en la Vía Evitamiento, incorpora equipos automatizados para
                                    troceo y procesamiento, y amplía inversiones en plantas para
                                    cerdos y pollos (años 2000–2013). Estas decisiones refuerzan
                                    la integración vertical de su cadena productiva.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 4 --}}
                <div class="carousel-item">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/WhatsApp-Image-2024-10-12-at-1.25.47-PM.jpeg') }}"
                                alt="Diversificación de marcas"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Diversificación de marcas y posicionamiento (2010s)
                                </div>
                                <p class="info-timeline-slide-text">
                                    En la década de 2010 la empresa diversifica su portafolio:
                                    ingresa al mercado premium con la marca Casa Europa
                                    (vinculada a Westphalia Alimentos) y consolida líneas de
                                    productos procesados bajo marcas como Naturave y Sursol.
                                    Otras marcas del grupo, como Costumbres y 3 Ríos, amplían el
                                    portafolio complementario, aunque con menor protagonismo en
                                    el núcleo industrial.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 5 --}}
                <div class="carousel-item">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_8915.jpg') }}"
                                alt="Sostenibilidad e innovación"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Sostenibilidad e innovación recientes (2020s)
                                </div>
                                <p class="info-timeline-slide-text">
                                    En los últimos años la corporación ha impulsado iniciativas
                                    de sostenibilidad e innovación, entre ellas proyectos de
                                    valorización de purines para la generación de biogás y la
                                    reducción del uso de combustibles fósiles en sus plantas, lo
                                    que evidencia un interés creciente por prácticas ambientales
                                    aplicadas a la producción.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Slide 6 --}}
                <div class="carousel-item">
                    <div class="info-subtopic-box">
                        <div class="info-timeline-header">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9321.jpg') }}"
                                alt="Evolución corporativa y marca"
                                class="info-timeline-img">
                            <div class="info-timeline-text-group">
                                <div class="info-timeline-slide-title">
                                    Evolución corporativa y marca (2024–Actualidad)
                                </div>
                                <p class="info-timeline-slide-text">
                                    La organización ha ido consolidando su estructura como grupo
                                    empresarial. En el período 2024–2025 se observa una
                                    comunicación más unificada del portafolio bajo la identidad
                                    comercial Rico / Rico Alimentos, y la razón social figura
                                    como CORPORACIÓN RICO S.A.C. en documentos oficiales y
                                    políticas internas. Esto refleja un proceso de
                                    profesionalización y posicionamiento de la marca a nivel
                                    nacional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Flechas de navegación --}}
            <button class="carousel-control-prev" type="button"
                    data-bs-target="#historiaRicoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button"
                    data-bs-target="#historiaRicoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <p class="info-small-note">
            En síntesis, de una granja familiar en Tacna y Arequipa
            (1961–1967), Rico creció mediante integración vertical,
            modernización productiva y diversificación de marcas
            (Rico Pollo, Naturave, Sursol, Casa Europa, con Costumbres y
            3 Ríos en menor medida), hasta consolidar hacia 2024 una
            identidad corporativa unificada como Corporación Rico /
            Rico Alimentos, con atención creciente a prácticas
            productivas más sostenibles.
        </p>
    </div>



        <button class="info-topic-btn" type="button"
                data-bs-toggle="collapse" data-bs-target="#s12">
            1.2. Ubicación geográfica
        </button>
        <div class="collapse info-topic-content" id="s12">
            <p>
                Corporación Rico S.A.C. opera con una configuración geográfica que
                combina una sede administrativa y comercial en Lima con plantas
                productivas y granjas en Arequipa, lo que refleja un modelo típico
                de empresas agroindustriales peruanas: gestión corporativa desde la
                capital y producción concentrada en la región sur.
            </p>

            <div class="info-location-grid">

                {{-- Tarjeta: Lima --}}
                <div class="info-location-card">
                    <div class="info-location-pill">
                        Sede administrativa y comercial
                    </div>
                    <div class="info-location-title">
                        Lima – Villa El Salvador
                    </div>
                    <p class="info-location-text">
                        La sede en Lima funciona como domicilio legal y centro de
                        funciones corporativas: administración, finanzas, marketing,
                        manejo de cuentas grandes y coordinación comercial para el
                        mercado central. Esta presencia en la capital facilita la
                        relación con clientes mayoristas, cadenas de retail y
                        organismos reguladores, además de respaldar el posicionamiento
                        de marcas de valor agregado como Casa Europa.
                    </p>

                    <div class="info-location-address">
                        Antigua Carretera Panamericana Sur Mz. B, Lote 12 (Km 17.2),
                        Z.I. Asociación Agrícola Concordia,
                        Villa El Salvador – Lima.
                    </div>
                    <div class="info-location-meta">
                        La ubicación en un área industrial estratégica favorece la
                        conexión con el anillo vial de Lima y con centros de
                        distribución que abastecen al mercado de la capital.
                        <br>
                        <em>Fuente: Google Maps (verificación de dirección corporativa).</em>
                    </div>
                </div>

                {{-- Tarjeta: Arequipa --}}
                <div class="info-location-card">
                    <div class="info-location-pill">
                        Núcleo productivo y operativo
                    </div>
                    <div class="info-location-title">
                        Arequipa – Plantas productivas y granjas
                    </div>
                    <p class="info-location-text">
                        Las instalaciones en Arequipa constituyen el núcleo de
                        producción de Rico Alimentos: crianza, faena, procesamiento
                        y empaque. La concentración de plantas y granjas en una misma
                        región fortalece la integración vertical, reduce tiempos de
                        traslado entre crianzas y planta de beneficio y permite
                        economías de escala en el uso de insumos, logística y control
                        de calidad.
                    </p>

                    <div class="info-location-address">
                        Planta industrial principal: Av. Vía Evitamiento 123,
                        distrito de Cerro Colorado – Arequipa.
                    </div>
                    <div class="info-location-meta">
                        Desde Arequipa se abastece principalmente el sur del país
                        (Arequipa, Moquegua, Tacna, Puno, Cusco, Apurímac) y, mediante
                        centros de distribución, se complementa el suministro hacia
                        Lima y otras regiones.
                    </div>
                </div>

            </div>

            <div class="info-location-note">
                En conjunto, la combinación de sede administrativa en Lima y núcleo
                productivo en Arequipa condiciona la estrategia logística y comercial
                de Corporación Rico S.A.C., permitiéndole articular decisiones
                corporativas desde la capital mientras mantiene el corazón operativo
                cerca de sus principales granjas y plantas de beneficio en el sur del
                país.
            </div>
        </div>


<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s13">
    1.3. Locales, Tiendas Rico y unidades de negocio
</button>
<div class="collapse info-topic-content" id="s13">
    <div class="info-stores-layout">

        {{-- Columna izquierda: explicación general --}}
        <div class="info-stores-main">
            <p>
                Corporación Rico S.A.C. articula su presencia en el mercado a
                través de una red de locales de venta directa —Tiendas Rico—,
                concentradas principalmente en el sur del país, y de diversas
                unidades de negocio complementarias orientadas a segmentos
                específicos (productos premium, bebidas, logística y producción).
            </p>

            <ul>
                <li>Red de tiendas con fuerte presencia en Arequipa, Cusco,
                    Puno, Moquegua y Apurímac.</li>
                <li>Presencia comercial y administrativa en Lima a través de
                    la sede y tienda de Villa El Salvador.</li>
                <li>Unidades de negocio especializadas como Casa Europa
                    (Westphalia Alimentos) y Food Markets S.A.C. que apoyan la
                    cadena agroindustrial.</li>
            </ul>

            <p class="info-small-note">
                El detalle completo de direcciones, horarios y referencias de
                cada tienda puede incorporarse como anexo o documento de
                soporte (por ejemplo, ficha en PDF o archivo Excel) para
                facilitar la lectura del informe sin recargar la vista de
                inicio.
            </p>
        </div>

        {{-- Columna derecha: carrusel Bootstrap normal (auto + manual) --}}
        <div id="localesCarousel"
             class="carousel slide info-stores-carousel"
             data-bs-ride="carousel"
             data-bs-interval="9000"
             data-bs-touch="true"
             data-bs-pause="hover">

            {{-- Indicadores --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Apurímac"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="1" aria-label="Arequipa"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="2" aria-label="Cusco"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="3" aria-label="Puno"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="4" aria-label="Moquegua"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="5" aria-label="Lima"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="6" aria-label="Casa Europa"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="7" aria-label="Costumbres"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="8" aria-label="Tres Ríos"></button>
                <button type="button" data-bs-target="#localesCarousel"
                        data-bs-slide-to="9" aria-label="Food Markets"></button>
            </div>

            {{-- Slides --}}
            <div class="carousel-inner">

                {{-- Slide 1: Apurímac --}}
                <div class="carousel-item active">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Apurímac
                        </div>
                        <div class="info-stores-slide-title">
                            Abancay – Puerta de entrada en Apurímac
                        </div>
                        <p class="info-stores-slide-text">
                            En Apurímac, Rico cuenta con dos tiendas en Abancay
                            (Jr. Nicaragua 202 y Jr. Lima 104), con horarios de
                            atención que cubren desde primeras horas de la mañana
                            hasta la tarde, incluyendo domingos. Estas tiendas
                            abastecen al mercado urbano de Abancay y funcionan
                            como punto de distribución para zonas cercanas.
                        </p>
                        <p class="info-stores-slide-meta">
                            Las tiendas ABANCAY I y ABANCAY II refuerzan la
                            presencia de Rico en el corredor vial que conecta
                            Apurímac con el sur andino.
                        </p>
                    </div>
                </div>

                {{-- Slide 2: Arequipa --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Arequipa
                        </div>
                        <div class="info-stores-slide-title">
                            Arequipa – Red principal de Tiendas Rico
                        </div>
                        <p class="info-stores-slide-text">
                            Arequipa concentra la red más amplia de Tiendas Rico, con
                            locales en el Cercado, Cayma, Cerro Colorado, Jacobo Hunter,
                            J.L.By.R., Miraflores, Sachaca, Tiabaya, Yanahuara, La Joya,
                            Camaná, Mollendo y Majes, entre otros puntos. La tienda de
                            Vía Evitamiento y los locales en mercados clave (San Camilo,
                            Avelino, Palomar) permiten una cobertura intensa del canal
                            tradicional.
                        </p>
                        <p class="info-stores-slide-meta">
                            Esta red respalda el rol de Arequipa como núcleo productivo
                            y logístico de la corporación, articulando planta industrial,
                            granjas y venta al detalle.
                        </p>
                    </div>
                </div>

                {{-- Slide 3: Cusco --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Cusco
                        </div>
                        <div class="info-stores-slide-title">
                            Cusco – Cobertura en ciudad y provincias
                        </div>
                        <p class="info-stores-slide-text">
                            En Cusco, las Tiendas Rico se distribuyen entre el Cercado,
                            San Jerónimo, San Sebastián, Wanchaq, Urubamba, Sicuani y
                            Quillabamba. La presencia en avenidas estratégicas como La
                            Cultura, Ejército y en zonas industriales y de mercado
                            asegura el abastecimiento tanto de hogares como de negocios
                            locales.
                        </p>
                        <p class="info-stores-slide-meta">
                            La red cusqueña articula puntos de venta urbanos con
                            localidades del Valle Sagrado y la zona de La Convención,
                            ampliando el alcance de la marca en la macroregión sur.
                        </p>
                    </div>
                </div>

                {{-- Slide 4: Puno --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Puno
                        </div>
                        <div class="info-stores-slide-title">
                            Puno y Juliaca – Plataforma comercial en el altiplano
                        </div>
                        <p class="info-stores-slide-text">
                            La corporación mantiene una red importante de tiendas en
                            Puno, Juliaca (provincia de San Román), Ilave, Ayaviri,
                            Espinar y Salcedo. Los locales ubicados en barrios como
                            Laykacota, Santa Bárbara, Manco Cápac y zonas céntricas
                            permiten atender al mercado urbano y a comerciantes que
                            redistribuyen a otros distritos.
                        </p>
                        <p class="info-stores-slide-meta">
                            La combinación de tiendas en Puno y Juliaca refuerza la
                            presencia de Rico en el corredor comercial del altiplano
                            sur, con horarios amplios y enfoque en el canal tradicional.
                        </p>
                    </div>
                </div>

                {{-- Slide 5: Moquegua --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Moquegua
                        </div>
                        <div class="info-stores-slide-title">
                            Ilo y Mariscal Nieto – Nodos costeros
                        </div>
                        <p class="info-stores-slide-text">
                            En la región Moquegua, Rico opera tiendas en Ilo (Pampa
                            Inalámbrica y Barrio Meylan) y en Mariscal Nieto (Av. Balta
                            y Av. Simón Bolívar). Estos puntos se integran a la
                            distribución costera, sirviendo tanto a consumidores finales
                            como a pequeños comercios.
                        </p>
                        <p class="info-stores-slide-meta">
                            La ubicación de las tiendas en zonas urbanas consolidadas
                            contribuye al abastecimiento de ciudades portuarias y
                            centros mineros cercanos.
                        </p>
                    </div>
                </div>

                {{-- Slide 6: Lima --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.1 Locales · Lima
                        </div>
                        <div class="info-stores-slide-title">
                            Villa El Salvador – Sede comercial y logística
                        </div>
                        <p class="info-stores-slide-text">
                            En Lima, la tienda ubicada en la Carretera Panamericana Sur
                            Mz. B Lt. 12, Zona Industrial (Asociación Agrícola Villa El
                            Salvador) cumple una doble función: punto de venta y nodo
                            logístico asociado a la sede corporativa. Desde allí se
                            articula parte del abastecimiento hacia clientes y
                            distribuidores en la capital.
                        </p>
                        <p class="info-stores-slide-meta">
                            Este local se vincula directamente con las operaciones
                            administrativas y de negocio de Corporación Rico S.A.C.
                        </p>
                    </div>
                </div>

                {{-- Slide 7: Casa Europa --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.2 Filiales y unidades de negocio
                        </div>
                        <div class="info-stores-slide-title">
                            Westphalia Alimentos S.A.C. – Casa Europa
                        </div>
                        <p class="info-stores-slide-text">
                            Casa Europa es la marca comercial asociada a Westphalia
                            Alimentos S.A.C., orientada al segmento de charcutería
                            premium y alimentos gourmet. Opera principalmente en Lima,
                            con sede referencial en Av. Las Jojobas Mz. B Lote 12,
                            Z.I. Asociación Agrícola La Concordia (Villa El Salvador),
                            y un punto de venta destacado en Av. Alfredo Benavides
                            2514 – Tienda 101, Miraflores.
                        </p>
                        <p class="info-stores-slide-meta">
                            Esta unidad extiende el portafolio de Rico hacia
                            consumidores de mayor poder adquisitivo, reforzando la
                            imagen de calidad y especialización en productos
                            procesados.
                        </p>
                    </div>
                </div>

                {{-- Slide 8: Costumbres --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.2 Filiales y unidades de negocio
                        </div>
                        <div class="info-stores-slide-title">
                            Costumbres – Línea de bebidas de valor agregado
                        </div>
                        <p class="info-stores-slide-text">
                            Bajo la marca Costumbres se comercializan bebidas de mayor
                            valor agregado, como el Pisco Mosto Verde (Quebranta). Su
                            presencia es más acotada que la de Rico Pollo o Casa
                            Europa, pero aporta al posicionamiento de la corporación en
                            segmentos de bebidas alcohólicas con identidad peruana.
                        </p>
                        <p class="info-stores-slide-meta">
                            En este informe la marca se menciona como parte del
                            portafolio, aunque su análisis operativo se desarrolla con
                            menor detalle.
                        </p>
                    </div>
                </div>

                {{-- Slide 9: Tres Ríos --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.2 Filiales y unidades de negocio
                        </div>
                        <div class="info-stores-slide-title">
                            3 Ríos – Portafolio complementario
                        </div>
                        <p class="info-stores-slide-text">
                            3 Ríos forma parte del portafolio complementario del grupo.
                            Su participación se orienta a productos específicos y no
                            constituye el núcleo de la operación industrial, pero
                            contribuye a ampliar la oferta en determinados canales o
                            zonas.
                        </p>
                        <p class="info-stores-slide-meta">
                            Debido a su menor peso relativo, la marca se incluye como
                            referencia y no como eje central del análisis.
                        </p>
                    </div>
                </div>

                {{-- Slide 10: Food Markets S.A.C. --}}
                <div class="carousel-item">
                    <div class="info-stores-slide-card">
                        <div class="info-stores-slide-pill">
                            1.3.2 Filiales y unidades de negocio
                        </div>
                        <div class="info-stores-slide-title">
                            Food Markets S.A.C. – Producción y logística agroindustrial
                        </div>
                        <p class="info-stores-slide-text">
                            Food Markets S.A.C. es una unidad vinculada a la producción
                            de carne (pollo y cerdo), elaboración de piensos
                            balanceados y transporte y distribución de carga pesada.
                            Entre las direcciones referenciales figuran Av. Vía de
                            Evitamiento N.º 123 en Arequipa y Cl. Loma Bella Mz. D-2
                            Lote 34, Urb. Prolongación Benavides, Lima 15001.
                        </p>
                        <p class="info-stores-slide-meta">
                            Esta unidad cumple un rol de soporte en la cadena de valor,
                            concentrando funciones productivas y logísticas clave para
                            asegurar abastecimiento, trazabilidad y eficiencia en la
                            distribución de productos.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Controles Bootstrap --}}
            <button class="carousel-control-prev" type="button"
                    data-bs-target="#localesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button"
                    data-bs-target="#localesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</div>



<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s14">
    1.4. Marcas, emblemas y logotipos
</button>
<div class="collapse info-topic-content" id="s14">
    <p>
        La identidad visual de Corporación Rico S.A.C. se construye a partir
        de una marca principal —RICO / Rico Alimentos— y un conjunto de
        marcas asociadas (Casa Europa, Costumbres, Naturave, Tres Ríos,
        Sursol), cada una orientada a segmentos y categorías de producto
        específicos, pero articuladas bajo un mismo concepto de calidad y
        origen sureño.
    </p>

    <div id="brandCarousel"
         class="carousel slide info-brand-carousel"
         data-bs-ride="carousel"
         data-bs-interval="9000"
         data-bs-touch="true"
         data-bs-pause="hover">

        {{-- Indicadores --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Rico"></button>
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="1" aria-label="Casa Europa"></button>
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="2" aria-label="Costumbres"></button>
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="3" aria-label="Naturave"></button>
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="4" aria-label="Tres Ríos"></button>
            <button type="button" data-bs-target="#brandCarousel"
                    data-bs-slide-to="5" aria-label="Sursol"></button>
        </div>

        <div class="carousel-inner">

            {{-- Slide 1: RICO / Rico Alimentos --}}
            <div class="carousel-item active">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/logo-rico.png') }}"
                                 alt="Logo Rico / Rico Alimentos"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Marca principal · Corporación Rico S.A.C.
                            </div>
                            <div class="info-brand-name">
                                RICO / Rico Alimentos
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        El logotipo de RICO suele presentarse en letras
                        mayúsculas, robustas y de color amarillo intenso,
                        transmitiendo fuerza, energía y confianza. El amarillo
                        refuerza la idea de pasión por la calidad y compromiso
                        con el sabor, mientras que en algunas aplicaciones se
                        acompaña de un ícono estilizado de pollo o cerdo que
                        alude directamente a sus principales líneas de
                        producción.
                    </p>
                    <p class="info-brand-text">
                        El nombre RICO no solo hace referencia al sabor, sino
                        también a la riqueza nutricional y emocional que la
                        marca busca aportar a la mesa peruana. La tipografía
                        sólida y los colores cálidos construyen la imagen de una
                        marca cercana, confiable y tradicional, anclada en el
                        sur del país pero con proyección nacional.
                    </p>
                    <p class="info-brand-meta">
                        Fuente: Información institucional de Rico Alimentos.
                    </p>
                </div>
            </div>

            {{-- Slide 2: Casa Europa --}}
            <div class="carousel-item">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/casa-europa-scaled.jpg') }}"
                                 alt="Logo Casa Europa"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Marca premium · Westphalia Alimentos S.A.C.
                            </div>
                            <div class="info-brand-name">
                                Casa Europa
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        Casa Europa es la marca premium del grupo, ligada a
                        Westphalia Alimentos S.A.C. Su logotipo emplea una
                        tipografía serif clásica, acompañada de colores sobrios
                        como el negro o el burdeos, lo que proyecta
                        sofisticación, tradición europea y calidad artesanal.
                        En algunas versiones se incorporan elementos gráficos
                        que refuerzan la idea de herencia y maestría en
                        charcutería.
                    </p>
                    <p class="info-brand-text">
                        El nombre “Casa Europa” sugiere un hogar de sabores
                        tradicionales del viejo continente, posicionando la
                        marca como referente en charcutería gourmet y productos
                        de alto valor agregado, especialmente en el mercado
                        limeño y en zonas urbanas de mayor poder adquisitivo.
                    </p>
                    <p class="info-brand-meta">
                        Fuente: Información institucional de Rico Alimentos /
                        Casa Europa.
                    </p>
                </div>
            </div>

            {{-- Slide 3: Costumbres --}}
            <div class="carousel-item">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/logo-costumbres.png') }}"
                                 alt="Logo Costumbres"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Marca de licores · Pisco y bebidas
                            </div>
                            <div class="info-brand-name">
                                Costumbres
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        Costumbres es la marca asociada a bebidas de valor
                        agregado, entre ellas el Pisco Mosto Verde (Quebranta).
                        Su logotipo suele presentar un estilo artesanal, con
                        tipografía manuscrita que recuerda las etiquetas
                        tradicionales de pisco, acompañado de una paleta de
                        tonos azulados que refuerzan la percepción de calidad.
                    </p>
                    <p class="info-brand-text">
                        El nombre “Costumbres” apela a la identidad cultural
                        peruana, a las tradiciones pisqueras y al orgullo por lo
                        autóctono. La marca busca conectar emocionalmente con el
                        consumidor a través de la nostalgia, las celebraciones
                        familiares y los rituales asociados al consumo de
                        pisco.
                    </p>
                    <p class="info-brand-meta">
                        Registro oficial: INDECOPI, expediente
                        N.° 501040-2012/OSD. Fuente: Rico Alimentos.
                    </p>
                </div>
            </div>

            {{-- Slide 4: Naturave --}}
            <div class="carousel-item">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/logo-NATURAVE.png') }}"
                                 alt="Logo Naturave"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Línea saludable · Pollo y pavo
                            </div>
                            <div class="info-brand-name">
                                Naturave
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        Naturave es la marca orientada a productos de pollo y
                        pavo con enfoque en naturalidad y frescura. El nombre
                        combina “natural” y “ave”, reforzando la idea de carne
                        de ave con menos aditivos y procesos más limpios y
                        sostenibles.
                    </p>
                    <p class="info-brand-text">
                        Su identidad visual recurre a tonos verdes y blancos,
                        con tipografía suave y elementos gráficos que evocan
                        naturaleza, frescura y bienestar. De este modo se
                        posiciona como una línea dirigida a consumidores que
                        priorizan opciones percibidas como más saludables y
                        responsables con el entorno.
                    </p>
                    <p class="info-brand-meta">
                        Marca registrada por Corporación Rico S.A.C. en
                        Arequipa. Fuente: Rico Alimentos.
                    </p>
                </div>
            </div>

            {{-- Slide 5: Tres Ríos --}}
            <div class="carousel-item">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/logo-vino-3-rios.png') }}"
                                 alt="Logo Tres Ríos"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Licores artesanales · Vinos y piscos
                            </div>
                            <div class="info-brand-name">
                                Tres Ríos
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        Tres Ríos agrupa una línea de vinos, piscos, aguardientes
                        de uva y sangrías vinculadas a la tradición del sur
                        peruano. La marca evoca abundancia, origen natural y
                        conexión con los valles fértiles de Arequipa y su
                        entorno vitivinícola.
                    </p>
                    <p class="info-brand-text">
                        La construcción visual se orienta a resaltar el origen
                        territorial y la elaboración artesanal, reforzando la
                        idea de productos ligados a la tierra y a la cultura del
                        valle.
                    </p>
                    <p class="info-brand-meta">
                        Registro: Clase 33 – INDECOPI, expediente
                        N.° 496291-2012/OSD. Fuente: Rico Alimentos.
                    </p>
                </div>
            </div>

            {{-- Slide 6: Sursol --}}
            <div class="carousel-item">
                <div class="info-brand-slide-card">
                    <div class="info-brand-header">
                        <div class="info-brand-logo-wrap">
                            <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/logo-sursol-2022.png') }}"
                                 alt="Logo Sursol"
                                 class="info-brand-logo">
                        </div>
                        <div>
                            <div class="info-brand-pill">
                                Aceites y grasas comestibles
                            </div>
                            <div class="info-brand-name">
                                Sursol
                            </div>
                        </div>
                    </div>

                    <p class="info-brand-text">
                        Sursol es la marca asociada a aceites y grasas
                        comestibles. El nombre puede interpretarse como “sol del
                        sur”, una metáfora de energía, vitalidad y origen
                        sureño, alineada con la identidad territorial de la
                        corporación.
                    </p>
                    <p class="info-brand-text">
                        Aunque su difusión es menor que la de RICO o Casa
                        Europa, Sursol se orienta a productos derivados cuya
                        propuesta de valor se basa en la calidad y el origen
                        regional, complementando el portafolio agroindustrial
                        del grupo.
                    </p>
                    <p class="info-brand-meta">
                        Fuente: Información institucional de Rico Alimentos.
                    </p>
                </div>
            </div>
        </div>

        {{-- Controles --}}
        <button class="carousel-control-prev" type="button"
                data-bs-target="#brandCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button"
                data-bs-target="#brandCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s15">
    1.5. Número de trabajadores y estructura básica
</button>
<div class="collapse info-topic-content" id="s15">
    <div class="info-staff-layout">

        {{-- Columna izquierda: panorama general --}}
        <div>
            <p class="info-staff-intro">
                Corporación Rico S.A.C. se ha consolidado como una empresa
                agroindustrial de alcance regional y nacional que emplea a
                <strong>miles de colaboradores</strong> distribuidos entre sus
                plantas de producción, operaciones logísticas, tiendas y áreas
                administrativas. No se trata de una estructura pequeña, sino de
                una organización con un tamaño equivalente al de una gran
                empresa del sector alimentos.
            </p>

            <p class="info-staff-intro">
                A nivel organizacional, la compañía se ordena en varios
                niveles: una <strong>alta dirección</strong> que define la
                estrategia y toma las decisiones de mayor impacto; un grupo de
                <strong>mandos medios</strong> que traducen esa estrategia en
                planes de trabajo concretos; y un bloque amplio de
                <strong>personal operativo y técnico</strong> que hace posible
                el día a día en granjas, plantas, centros de distribución y
                puntos de venta. A ello se suman equipos de
                <strong>servicios generales</strong> y apoyo externo que
                sostienen la operación.
            </p>

            <p class="info-staff-intro">
                En la práctica, la mayor parte de la planilla se concentra en
                actividades operativas y logísticas, mientras que una fracción
                mucho menor corresponde a perfiles de dirección, gestión y
                soporte especializado (finanzas, recursos humanos, sistemas,
                comercial, calidad, entre otros). Esta proporción es coherente
                con el modelo de negocio de una empresa intensiva en activos,
                donde la producción y la distribución son el corazón de la
                operación.
            </p>
        </div>

        {{-- Columna derecha: niveles de la estructura básica --}}
        <div>
            <div class="info-staff-table-title">
                Niveles principales de la estructura organizacional
            </div>

            <div class="table-responsive">
                <table class="table table-sm info-staff-table mb-0">
                    <thead>
                        <tr>
                            <th>Nivel</th>
                            <th>Rol dentro de la organización</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="info-staff-level">Alta Dirección</td>
                            <td>
                                Integrada por la Presidencia del Directorio, la
                                Gerencia General y las principales gerencias
                                corporativas. Define la visión, la estrategia,
                                los planes de inversión y los lineamientos de
                                gestión para toda la corporación.
                            </td>
                        </tr>
                        <tr>
                            <td class="info-staff-level">Mandos Medios</td>
                            <td>
                                Jefaturas de planta, responsables de áreas
                                funcionales (producción, mantenimiento, calidad,
                                logística, comercial, recursos humanos, etc.) y
                                supervisores regionales. Son el puente entre la
                                estrategia y la operación diaria.
                            </td>
                        </tr>
                        <tr>
                            <td class="info-staff-level">Operativo y Técnico</td>
                            <td>
                                Personal de granjas, faenado, procesamiento,
                                empaquetado, cadena de frío, transporte, centros
                                de distribución y tiendas. Ejecutan las tareas
                                productivas y comerciales que dan soporte directo
                                al negocio.
                            </td>
                        </tr>
                        <tr>
                            <td class="info-staff-level">Servicios Generales</td>
                            <td>
                                Equipos de limpieza, vigilancia, mantenimiento
                                y otros servicios de soporte, ya sea contratados
                                directamente o a través de terceros, que velan
                                por el funcionamiento seguro y continuo de las
                                instalaciones.
                            </td>
                        </tr>
                        <tr>
                            <td class="info-staff-level">Apoyo externo</td>
                            <td>
                                Consultores, practicantes y personal temporal
                                que se incorpora en momentos específicos
                                (campañas comerciales, proyectos de expansión,
                                implementación de sistemas, auditorías, etc.).
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>



<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s16">
    1.6. Razón social, forma jurídica y grupo empresarial
</button>
<div class="collapse info-topic-content" id="s16">
    <div class="info-legal-layout">

        {{-- Columna izquierda: identidad legal y logo --}}
        <div class="info-legal-card">
            <div class="info-legal-header">
                <div class="info-legal-logo-wrap">
                    {{-- Logo corporativo Rico (reemplaza por tu archivo real) --}}
                    <img src="{{ asset('https://ricoalimentos.pe/wp-content/uploads/2024/10/IMG_9321.jpg') }}"
                         alt="Logo Corporación Rico S.A.C."
                         class="info-legal-logo">
                </div>
                <div>
                    <div class="info-legal-pill">
                        Razón social y forma jurídica
                    </div>
                    <div class="info-legal-name">
                        CORPORACIÓN RICO S.A.C.
                    </div>
                    <div class="info-legal-sub">
                        Sociedad Anónima Cerrada · R.U.C. N.° 20506421781
                    </div>
                </div>
            </div>

            <p class="info-legal-text">
                CORPORACIÓN RICO S.A.C. es una empresa peruana constituida como
                sociedad anónima cerrada, de acuerdo con la legislación vigente
                de la República del Perú. La compañía se encuentra inscrita en
                la Superintendencia Nacional de los Registros Públicos (SUNARP)
                y desarrolla actividades en el sector agroindustrial, con
                énfasis en la producción, procesamiento y comercialización de
                carne de pollo, cerdo y productos derivados.
            </p>

            <p class="info-legal-text">
                Desde el punto de vista jurídico, la forma de sociedad anónima
                cerrada le permite mantener un accionariado concentrado y un
                gobierno corporativo alineado con la gestión familiar y
                directiva, conservando al mismo tiempo las obligaciones propias
                de una empresa formalmente constituida: inscripción registral,
                llevanza de libros societarios, cumplimiento de normas
                tributarias, laborales, ambientales y sanitarias, entre otras.
            </p>
        </div>

        {{-- Columna derecha: sedes y grupo empresarial --}}
        <div class="info-legal-card">
            <div class="info-legal-pill">
                Sede corporativa, planta industrial
            </div>

            <div class="info-legal-block-title">
                Sede central corporativa – Lima
            </div>
            <p class="info-legal-address">
                <strong>Dirección:</strong> Antigua Carretera Panamericana Sur
                Mz. B, Lote 12 (Km 17.2), Z.I. Asociación Agrícola Concordia,
                distrito de Villa El Salvador, Lima.
            </p>


            <hr class="info-legal-divider">

            <div class="info-legal-block-title">
                Planta industrial principal – Arequipa
            </div>
            <p class="info-legal-address">
                <strong>Dirección:</strong> Av. Vía Evitamiento N.° 123,
                distrito de Cerro Colorado, provincia de Arequipa.
            </p>

        </div>
    </div>
</div>


        <button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s17">
    1.7. Mercado que abastece y segmentos de clientes
</button>
<div class="collapse info-topic-content" id="s17">
    <p>
        Corporación Rico S.A.C. abastece un mercado amplio y diversificado,
        compuesto por distintos tipos de clientes que se segmentan según su
        perfil de consumo, ubicación geográfica y nivel de especialización. La
        empresa opera principalmente en el mercado nacional, con fuerte
        presencia en el sur del Perú, y se ha posicionado en los sectores de
        consumo masivo, institucional y gourmet.
    </p>

    <div class="info-subtopic-box">
        <div class="info-subtopic-title">
            Tipos de clientes
        </div>
        <div class="info-subtopic-list">

            {{-- Clientes minoristas --}}
            <div>
                <strong>Clientes minoristas</strong>
                <ul class="mb-1">
                    <li>Familias y hogares que adquieren productos en tiendas
                        propias o puntos de venta autorizados.</li>
                    <li>Buscan productos frescos, accesibles y confiables, como
                        pollo entero, trozado, cerdo y embutidos.</li>
                    <li>Se abastecen en locales ubicados en Arequipa, Apurímac,
                        Lima y otras regiones del sur.</li>
                </ul>
            </div>

            {{-- Mayoristas y distribuidores --}}
            <div class="mt-1">
                <strong>Clientes mayoristas y distribuidores</strong>
                <ul class="mb-1">
                    <li>Comerciantes, mercados, pollerías, carnicerías y
                        distribuidores regionales.</li>
                    <li>Compran en volumen para reventa o transformación.</li>
                    <li>Requieren logística eficiente, precios competitivos y
                        continuidad de abastecimiento.</li>
                </ul>
            </div>

            {{-- Institucionales --}}
            <div class="mt-1">
                <strong>Clientes institucionales</strong>
                <ul class="mb-1">
                    <li>Restaurantes, hoteles, hospitales, comedores
                        industriales y empresas de catering.</li>
                    <li>Demandan productos con estándares sanitarios,
                        trazabilidad y formatos adaptados a cocina profesional.</li>
                </ul>
            </div>

            {{-- Mercado premium --}}
            <div class="mt-1">
                <strong>Clientes del mercado premium</strong>
                <ul class="mb-1">
                    <li>Consumidores especializados en Lima que adquieren
                        productos gourmet a través de la marca Casa Europa.</li>
                    <li>Incluyen tiendas delicatessen, supermercados de alta
                        gama y consumidores exigentes.</li>
                    <li>Valoran calidad artesanal, inspiración europea y
                        presentación diferenciada.</li>
                </ul>
            </div>

            {{-- Sector bebidas --}}
            <div class="mt-1">
                <strong>Clientes del sector bebidas</strong>
                <ul class="mb-0">
                    <li>Distribuidores de licores, bares y tiendas
                        especializadas que comercializan productos de las
                        marcas Costumbres y Tres Ríos.</li>
                    <li>Enfocados en piscos, vinos y sangrías de origen
                        regional, con reconocimiento en concursos nacionales.</li>
                </ul>
            </div>
        </div>
    </div>

    <p class="info-small-note mb-0">
        La integración vertical de la cadena de valor permite a Corporación
        Rico S.A.C. atender estos segmentos con eficiencia operativa,
        diferenciación de marca y capacidad de respuesta logística, lo que le
        otorga una ventaja competitiva en el abastecimiento regional y
        nacional.
    </p>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s18">
    1.8. Principales proveedores y aliados estratégicos
</button>
<div class="collapse info-topic-content" id="s18">
    <p>
        Corporación Rico S.A.C. mantiene relaciones estratégicas con
        proveedores nacionales e internacionales que abastecen insumos clave
        para sus operaciones agroindustriales. Estos aliados se especializan en
        materias primas para alimentación animal, aditivos, maquinaria,
        embalaje y servicios logísticos. La empresa ha desarrollado una sólida
        capacidad de importación, con un volumen importante de compras
        internacionales en los últimos años.
    </p>

    {{-- 1.8.1 Proveedores internacionales --}}
    <div class="info-subtopic-box">
        <div class="info-subtopic-title">
            1.8.1 Proveedores internacionales de insumos agropecuarios
        </div>
        <div class="info-subtopic-list">
            <div>
                <strong>Maíz duro amarillo</strong>
                <ul class="mb-1">
                    <li>Principal insumo para la elaboración de alimentos
                        balanceados.</li>
                    <li>Países de origen: Argentina, Paraguay y Uruguay.</li>
                    <li>Transporte marítimo a través de navieras como Maersk,
                        MSC y Ocean Network Express.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Tortas y residuos sólidos de soya</strong>
                <ul class="mb-1">
                    <li>Fuente proteica para piensos balanceados.</li>
                    <li>Proveedores ubicados principalmente en Bolivia y
                        Brasil.</li>
                    <li>Utilizados en la formulación de dietas para aves y
                        cerdos.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Premezclas, metionina y aditivos nutricionales</strong>
                <ul class="mb-1">
                    <li>Importados desde países como Japón, China y Chile.</li>
                    <li>Incluyen aminoácidos, vitaminas y minerales esenciales
                        para el crecimiento animal.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Condimentos y sazonadores compuestos</strong>
                <ul class="mb-0">
                    <li>Utilizados en la línea de embutidos y productos
                        procesados.</li>
                    <li>Proveedores especializados en ingredientes funcionales
                        para alimentos.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 1.8.2 Proveedores nacionales --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.8.2 Proveedores nacionales y servicios especializados
        </div>
        <div class="info-subtopic-list">
            <div>
                <strong>Empresas de empaque y embalaje</strong>
                <ul class="mb-1">
                    <li>Suministran bandejas, bolsas al vacío, etiquetas y
                        cajas para distribución.</li>
                    <li>Ubicadas principalmente en Lima y Arequipa.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Proveedores de maquinaria industrial</strong>
                <ul class="mb-1">
                    <li>Equipos de trozado automático, cámaras de frío y
                        sistemas de rendering.</li>
                    <li>Marcas internacionales representadas por distribuidores
                        locales.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Servicios logísticos y transporte</strong>
                <ul class="mb-1">
                    <li>Empresas de transporte como Trans O Corporation y otros
                        operadores externos.</li>
                    <li>Encargados del traslado de productos desde planta hasta
                        puntos de venta y clientes institucionales.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Servicios de mantenimiento, limpieza y seguridad</strong>
                <ul class="mb-0">
                    <li>Contratados para operaciones en planta y tiendas.</li>
                    <li>Incluyen vigilancia, mantenimiento técnico y limpieza
                        industrial.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 1.8.3 OSCE --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.8.3 Registro oficial como proveedor del Estado
        </div>
        <p class="info-small-note mb-0">
            Corporación Rico S.A.C. figura en el Buscador de Proveedores del
            Estado del OSCE, lo que indica que puede participar en procesos de
            contratación pública como proveedor de bienes y servicios.
        </p>
    </div>

    {{-- 1.8.4 y 1.8.5 Cadena de valor --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.8.4 Actividades primarias (cadena de valor)
        </div>
        <div class="table-responsive mb-2">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Actividad</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Logística interna</td>
                        <td>
                            Recepción de insumos (maíz, soya, aditivos),
                            almacenamiento y control de inventarios.
                        </td>
                    </tr>
                    <tr>
                        <td>Operaciones</td>
                        <td>
                            Incubación, crianza, faenado, trozado, empaquetado y
                            rendering ambiental de subproductos.
                        </td>
                    </tr>
                    <tr>
                        <td>Logística externa</td>
                        <td>
                            Distribución a tiendas, mayoristas, clientes
                            institucionales y mercado gourmet.
                        </td>
                    </tr>
                    <tr>
                        <td>Marketing y ventas</td>
                        <td>
                            Promoción de marcas (Rico, Casa Europa, Costumbres,
                            Tres Ríos, Naturave y Sursol) mediante afiches, web,
                            redes y participación en ferias.
                        </td>
                    </tr>
                    <tr>
                        <td>Servicio postventa</td>
                        <td>
                            Atención al cliente, gestión de reclamos,
                            fidelización y soporte comercial.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="info-subtopic-title mt-2">
            1.8.5 Actividades de apoyo
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Área</th>
                        <th>Función estratégica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Infraestructura</td>
                        <td>
                            Planta industrial en Arequipa, sede corporativa en
                            Lima y tiendas propias como base física de la
                            operación.
                        </td>
                    </tr>
                    <tr>
                        <td>Gestión de RR.HH.</td>
                        <td>
                            Selección, capacitación, bienestar y seguridad
                            laboral del personal.
                        </td>
                    </tr>
                    <tr>
                        <td>Desarrollo tecnológico</td>
                        <td>
                            Automatización del trozado, cadena de frío,
                            sistemas de trazabilidad y ERP corporativo.
                        </td>
                    </tr>
                    <tr>
                        <td>Compras y proveedores</td>
                        <td>
                            Evaluación de insumos, negociación con proveedores
                            locales e internacionales y control de calidad de
                            la cadena de suministro.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- 1.8.6 Matriz de evaluación --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.8.6 Matriz de evaluación de proveedores
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Proveedor</th>
                        <th>Tipo de insumo / servicio</th>
                        <th>Criterios evaluados</th>
                        <th>Ponderación (%)</th>
                        <th>Evaluación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Agroexportadora del Sur S.A.</td>
                        <td>Maíz amarillo duro</td>
                        <td>Calidad, precio, continuidad, trazabilidad</td>
                        <td>30</td>
                        <td>Alta</td>
                    </tr>
                    <tr>
                        <td>NutriVet Perú S.A.C.</td>
                        <td>Premezclas y aditivos</td>
                        <td>Composición técnica, certificación, soporte técnico</td>
                        <td>25</td>
                        <td>Media</td>
                    </tr>
                    <tr>
                        <td>Empaques del Pacífico S.A.C.</td>
                        <td>Bandejas y bolsas</td>
                        <td>Resistencia, presentación, costo, tiempos de entrega</td>
                        <td>15</td>
                        <td>Alta</td>
                    </tr>
                    <tr>
                        <td>Trans O Corporation</td>
                        <td>Transporte interno</td>
                        <td>Cobertura, puntualidad, mantenimiento de flota</td>
                        <td>10</td>
                        <td>Alta</td>
                    </tr>
                    <tr>
                        <td>Servicios Integrales Andinos</td>
                        <td>Limpieza y seguridad</td>
                        <td>Personal capacitado, cumplimiento normativo</td>
                        <td>10</td>
                        <td>Media</td>
                    </tr>
                    <tr>
                        <td>Maquinaria Industrial Andina</td>
                        <td>Equipos de trozado y frío</td>
                        <td>Tecnología, garantía, soporte postventa</td>
                        <td>10</td>
                        <td>Alta</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="info-small-note mb-0">
            Matriz elaborada en función de entrevistas internas, registros de
            compras y criterios definidos por la empresa para la evaluación de
            proveedores.
        </p>
    </div>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s19">
    1.9. Productos y servicios ofrecidos
</button>
<div class="collapse info-topic-content" id="s19">
    <p>
        Corporación Rico S.A.C. ofrece una diversidad de productos que abarcan
        carne de pollo, cerdo, embutidos, charcutería premium, productos
        gourmet y bebidas artesanales. Cada línea se vincula a una de sus
        seis marcas principales: Rico, Naturave, Sursol, Casa Europa,
        Costumbres y Tres Ríos.
    </p>
    <p>
        Dentro de todo el portafolio, el producto de mayor relevancia
        operativa y comercial es el <strong>pollo entero beneficiado Rico</strong>,
        que integra la cadena completa de incubación, crianza, faenado,
        procesamiento, distribución y venta directa al consumidor.
    </p>

    {{-- 1.9.1 Características --}}
    <div class="info-subtopic-box">
        <div class="info-subtopic-title">
            1.9.1 Componentes y características del producto
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Aspecto</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Materia prima</td>
                        <td>
                            Aves de línea genética para producción cárnica,
                            criadas en granjas supervisadas por la empresa.
                        </td>
                    </tr>
                    <tr>
                        <td>Presentación</td>
                        <td>
                            Ave eviscerada, sin plumas y completamente limpia,
                            empacada en bolsas termoencogibles.
                        </td>
                    </tr>
                    <tr>
                        <td>Peso promedio</td>
                        <td>1,8 – 2,5 kg, según categoría comercial.</td>
                    </tr>
                    <tr>
                        <td>Cadena de frío</td>
                        <td>
                            Conservado a 0–4&nbsp;°C con control de temperatura
                            continuo.
                        </td>
                    </tr>
                    <tr>
                        <td>Vida útil estimada</td>
                        <td>
                            7 días refrigerado / hasta 12 meses congelado
                            (dependiendo del canal de distribución).
                        </td>
                    </tr>
                    <tr>
                        <td>Certificaciones frecuentes</td>
                        <td>
                            Buenas Prácticas de Manufactura (BPM) y sistemas
                            HACCP en procesos de faenado.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- 1.9.2 Proceso productivo --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.9.2 Proceso productivo en términos generales
        </div>
        <ol class="info-small-note mb-0">
            <li class="mb-1">
                <strong>Incubación:</strong> huevos fértiles incubados durante
                21 días en condiciones controladas de temperatura, humedad y
                ventilación.
            </li>
            <li class="mb-1">
                <strong>Crianza:</strong> pollos criados en galpones ubicados
                principalmente en Arequipa, con manejo sanitario, nutricional y
                ambiental supervisado. El alimento se formula con insumos
                importados (maíz, soya y aditivos), garantizando un crecimiento
                uniforme.
            </li>
            <li class="mb-1">
                <strong>Faenado y procesamiento:</strong> recepción del ave,
                insensibilización y sacrificio, escaldado y desplumado,
                eviscerado y lavado, enfriamiento en chiller y empaque
                termoencogido.
            </li>
            <li>
                <strong>Almacenamiento y distribución:</strong> el producto se
                mantiene en cámaras de frío y luego se distribuye a tiendas,
                mayoristas y clientes institucionales mediante flota
                especializada.
            </li>
        </ol>
    </div>

    {{-- 1.9.3 Beneficios --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.9.3 Beneficios del producto
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Tipo de beneficio</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Frescura garantizada</td>
                        <td>
                            Control de todo el proceso, desde la incubación
                            hasta la venta, reduciendo riesgos de contaminación
                            y pérdidas.
                        </td>
                    </tr>
                    <tr>
                        <td>Calidad homogénea</td>
                        <td>
                            Alimentación balanceada y controles sanitarios que
                            aseguran un producto uniforme.
                        </td>
                    </tr>
                    <tr>
                        <td>Versatilidad culinaria</td>
                        <td>
                            Permite múltiples preparaciones: horno, parrilla,
                            estofados y cortes por piezas.
                        </td>
                    </tr>
                    <tr>
                        <td>Accesibilidad</td>
                        <td>
                            Se distribuye en tiendas propias y puntos de venta
                            autorizados, favoreciendo la disponibilidad en zonas
                            urbanas y periféricas.
                        </td>
                    </tr>
                    <tr>
                        <td>Costo competitivo</td>
                        <td>
                            La integración vertical reduce costos operativos,
                            reflejándose en precios accesibles para el
                            consumidor final.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- 1.9.4 Especificaciones técnicas --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.9.4 Especificaciones técnicas
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Especificación</th>
                        <th>Valor o rango</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>pH post-faenado</td>
                        <td>5,8 – 6,2</td>
                    </tr>
                    <tr>
                        <td>Temperatura de conservación</td>
                        <td>0–4&nbsp;°C</td>
                    </tr>
                    <tr>
                        <td>Humedad de la carne</td>
                        <td>73–76&nbsp;%</td>
                    </tr>
                    <tr>
                        <td>Contenido de proteína</td>
                        <td>18–20&nbsp;%</td>
                    </tr>
                    <tr>
                        <td>Contenido graso</td>
                        <td>11–14&nbsp;% según peso del ave</td>
                    </tr>
                    <tr>
                        <td>Envasado</td>
                        <td>Bolsa termoencogible con sello hermético.</td>
                    </tr>
                    <tr>
                        <td>Transporte</td>
                        <td>
                            Unidades con sistema de frío entre 0 y 4&nbsp;°C.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- 1.9.5 Costos de producción --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.9.5 Costo de producción del pollo entero beneficiado
        </div>
        <p class="info-small-note">
            Proyección referencial del costo por kilogramo de pollo beneficiado.
        </p>

        {{-- I. Crianza --}}
        <div class="table-responsive mb-2">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th colspan="4">I. Costos directos: insumos alimenticios y crianza</th>
                    </tr>
                    <tr>
                        <th>Rubro</th>
                        <th>Detalle</th>
                        <th>Proyección (S/./kg)</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Insumos alimenticios</td>
                        <td>Maíz, soya y aditivos nutricionales.</td>
                        <td>S/.3.80 – S/.4.50</td>
                        <td>
                            El alimento representa más del 70&nbsp;% del costo
                            operativo; maíz y soya con precios de referencia
                            internacionales.
                        </td>
                    </tr>
                    <tr>
                        <td>Crianza y manejo</td>
                        <td>
                            Pollito BB, energía (galpones, ventilación), camas,
                            medicamentos y control veterinario.
                        </td>
                        <td>S/.0.80 – S/.1.20</td>
                        <td>
                            Incluye el costo del animal y los gastos básicos de
                            mantenimiento y sanidad.
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total costo de crianza</strong></td>
                        <td colspan="3"><strong>S/.4.60 – S/.5.70</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- II. Faenado --}}
        <div class="table-responsive mb-2">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th colspan="4">II. Costos directos: procesamiento y faenado</th>
                    </tr>
                    <tr>
                        <th>Rubro</th>
                        <th>Detalle</th>
                        <th>Proyección (S/./kg)</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mano de obra especializada</td>
                        <td>Personal de faenado y supervisión en planta.</td>
                        <td>S/.0.60 – S/.0.90</td>
                        <td>Costo asociado a operarios en línea de producción.</td>
                    </tr>
                    <tr>
                        <td>Equipos, energía y agua</td>
                        <td>
                            Depreciación de equipos de faenado, consumo de
                            energía y agua.
                        </td>
                        <td>S/.0.40 – S/.0.70</td>
                        <td>
                            Uso intensivo de electricidad y agua para higiene y
                            refrigeración.
                        </td>
                    </tr>
                    <tr>
                        <td>Insumos para empaque</td>
                        <td>
                            Bolsas, etiquetas, hielo y embalaje primario.
                        </td>
                        <td>S/.0.30 – S/.0.50</td>
                        <td>
                            Depende del tipo de empaque (pollo entero, trozado,
                            bandejas).
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total costo de faenado</strong></td>
                        <td colspan="3"><strong>S/.1.30 – S/.2.10</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- III. Distribución --}}
        <div class="table-responsive mb-2">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th colspan="4">III. Costos de distribución y comercialización</th>
                    </tr>
                    <tr>
                        <th>Rubro</th>
                        <th>Detalle</th>
                        <th>Proyección (S/./kg)</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Distribución</td>
                        <td>
                            Flota refrigerada, combustible, peajes,
                            mantenimiento y mano de obra (choferes).
                        </td>
                        <td>S/.0.80 – S/.1.30</td>
                        <td>
                            Costos elevados por la necesidad de refrigeración y
                            las grandes distancias en el sur del país.
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total costo de distribución</strong></td>
                        <td colspan="3"><strong>S/.0.80 – S/.1.30</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- IV. Indirectos --}}
        <div class="table-responsive mb-2">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th colspan="4">IV. Costos indirectos y administrativos</th>
                    </tr>
                    <tr>
                        <th>Rubro</th>
                        <th>Detalle</th>
                        <th>Proyección (S/./kg)</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administración general</td>
                        <td>
                            Sueldos de gerencia, RR.HH., finanzas, alquileres
                            de tiendas y servicios.
                        </td>
                        <td>S/.0.50 – S/.0.70</td>
                        <td>
                            Prorrateo de la estructura administrativa
                            corporativa.
                        </td>
                    </tr>
                    <tr>
                        <td>Gestión de calidad y control</td>
                        <td>
                            Laboratorio, certificaciones, control veterinario y
                            gestión ambiental.
                        </td>
                        <td>S/.0.20 – S/.0.30</td>
                        <td>
                            Asociado al cumplimiento de normativas sanitarias y
                            ambientales.
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total costos indirectos</strong></td>
                        <td colspan="3"><strong>S/.0.70 – S/.1.00</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Resumen --}}
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Concepto de costo</th>
                        <th>Rango mínimo (S/./kg)</th>
                        <th>Rango máximo (S/./kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>I. Costo de crianza</td>
                        <td>4.60</td>
                        <td>5.70</td>
                    </tr>
                    <tr>
                        <td>II. Costo de faenado</td>
                        <td>1.30</td>
                        <td>2.10</td>
                    </tr>
                    <tr>
                        <td>III. Costo de distribución</td>
                        <td>0.80</td>
                        <td>1.30</td>
                    </tr>
                    <tr>
                        <td>IV. Costos indirectos</td>
                        <td>0.70</td>
                        <td>1.00</td>
                    </tr>
                    <tr>
                        <td><strong>Costo total de producción unitario</strong></td>
                        <td><strong>S/.7.40</strong></td>
                        <td><strong>S/.10.10</strong></td>
                    </tr>
                    <tr>
                        <td>
                            Precio mayorista de venta
                            (ejemplo con 15&nbsp;% de utilidad)
                        </td>
                        <td>S/.8.51</td>
                        <td>S/.11.62</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s110">
    1.10. Marcas, emblemas y logotipos
</button>
<div class="collapse info-topic-content" id="s110">
    <p>
        El portafolio de Corporación Rico S.A.C. incluye marcas como Rico,
        Naturave, Sursol, Casa Europa, Costumbres y Tres Ríos. Cada una de
        ellas ha desarrollado logotipos y elementos visuales propios, orientados
        a públicos diferentes (consumo masivo, saludable, premium o bebidas),
        manteniendo una identidad común basada en calidad, origen sureño y
        tradición familiar.
    </p>
    <p class="info-small-note mb-0">
        En la sección 1.4 se detalla la identidad visual corporativa y las
        características específicas de cada marca en materia de logotipo,
        colores y estilo gráfico.
    </p>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s111">
    1.11. Tecnología en la empresa
</button>
<div class="collapse info-topic-content" id="s111">
    <p>
        La operación de Corporación Rico S.A.C. se apoya en tecnología aplicada
        a la producción avícola y porcina, la cadena de frío y la gestión de
        información. En planta se utilizan equipos de trozado automático,
        túneles de enfriamiento, cámaras frigoríficas y sistemas de rendering
        para el aprovechamiento de subproductos, todo integrado a protocolos de
        BPM y HACCP.
    </p>
    <p>
        En el ámbito de gestión, la empresa emplea sistemas de planificación de
        recursos (ERP), soluciones de trazabilidad y herramientas informáticas
        para la administración de inventarios, logística y ventas. Esta base
        tecnológica respalda la continuidad operativa y la calidad del producto
        en toda la cadena.
    </p>
</div>

<button class="info-topic-btn" type="button"
        data-bs-toggle="collapse" data-bs-target="#s112">
    1.12. Publicidad, página web y material gráfico
</button>
<div class="collapse info-topic-content" id="s112">
    <p>
        La estrategia publicitaria de Corporación Rico S.A.C. combina afiches,
        banners y material impreso con recursos digitales como la página web y
        las redes sociales. El objetivo es reforzar la identidad de sus marcas,
        destacar la frescura y calidad de los productos y mantener una
        comunicación directa con el consumidor.
    </p>
    <p>
        Cada marca del grupo conserva su propio estilo visual, pero se mantiene
        coherencia en el uso de colores cálidos, imágenes de producto de alta
        calidad y mensajes que enfatizan confianza, seguridad alimentaria y
        tradición familiar.
    </p>

    {{-- 1.12.1 Afiches publicitarios --}}
    <div class="info-subtopic-box">
        <div class="info-subtopic-title">
            1.12.1 Afiches publicitarios
        </div>
        <div class="info-subtopic-list">
            <div>
                <strong>Diseño y elementos visuales</strong>
                <ul class="mb-1">
                    <li>Uso de fotografías reales del producto, mostrando
                        cortes, preparaciones y presentaciones listas para
                        cocinar.</li>
                    <li>Colores predominantes: azules, amarillos y blancos,
                        asociados a la marca Rico y a la industria avícola.</li>
                    <li>Mensajes breves que resaltan frescura, precio y
                        promociones.</li>
                    <li>Tipografías claras y legibles, pensadas para el punto
                        de venta.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Uso y distribución</strong>
                <ul class="mb-0">
                    <li>Colocados en tiendas propias, vitrinas y áreas internas
                        de venta.</li>
                    <li>Utilizados en campañas de temporada (Fiestas Patrias,
                        Navidad, verano, promociones semanales).</li>
                    <li>Adaptados a formatos digitales para redes sociales y
                        banners web.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 1.12.2 Página web corporativa --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.12.2 Página web corporativa
        </div>
        <div class="info-subtopic-list">
            <div>
                <strong>Características generales</strong>
                <ul class="mb-1">
                    <li>Diseño limpio y ordenado, con prioridad en imágenes de
                        alta calidad.</li>
                    <li>Navegación sencilla que facilita el acceso a productos,
                        tiendas y promociones.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Secciones principales</strong>
                <ul class="mb-1">
                    <li>Inicio, con banners rotativos de promociones o
                        productos destacados.</li>
                    <li>Productos, con fichas, descripciones y presentaciones.</li>
                    <li>Talento, con formularios para postulaciones.</li>
                    <li>Contacto, con canales de atención y requerimientos.</li>
                    <li>Historia y valores, con información sobre la empresa y
                        su trayectoria.</li>
                </ul>
            </div>

            <div class="mt-1">
                <strong>Actualización de contenidos</strong>
                <ul class="mb-0">
                    <li>Banners, promociones y avisos renovados de forma
                        periódica, especialmente en campañas estacionales.</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- 1.12.3 Rol de la publicidad --}}
    <div class="info-subtopic-box mt-2">
        <div class="info-subtopic-title">
            1.12.3 Rol de la publicidad en la identidad de la empresa
        </div>
        <div class="table-responsive">
            <table class="table table-sm info-staff-table mb-0">
                <thead>
                    <tr>
                        <th>Elemento publicitario</th>
                        <th>Rol estratégico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Afiches físicos</td>
                        <td>
                            Refuerzan la presencia visual en tiendas y permiten
                            comunicar ofertas de forma inmediata en el punto de
                            venta.
                        </td>
                    </tr>
                    <tr>
                        <td>Página web</td>
                        <td>
                            Centraliza información institucional, muestra el
                            portafolio completo y facilita el acceso a puntos de
                            venta y canales de contacto.
                        </td>
                    </tr>
                    <tr>
                        <td>Banners digitales</td>
                        <td>
                            Adaptan los afiches a redes sociales, manteniendo
                            coherencia en campañas físicas y digitales.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>

    </div>
</div>
