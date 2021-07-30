<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema de diseño | Documentación N5</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Documentación de N5">
    <meta name="author" content="Wagner Henriquez">
    <link rel="shortcut icon" href="../assets/images/Logo-white.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="../assets/fontawesome/js/all.min.js"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="../assets/plugins/simplelightbox/simple-lightbox.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">

</head>

<body class="docs-page">
    <header class="header fixed-top">
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none"
                        type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="site-logo"><a class="navbar-brand" href="../index.html"><img class="logo-icon me-2 logo"
                                src="../assets/images/logo-color.png" alt="logo"><span class="logo-text">Sistema<span
                                    class="text-alt"> de Diseño</span></span></a></div>
                </div>
                <!--//docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                    <div class="top-search-box d-none d-lg-flex">
                        <form class="search-form">
                            <input type="text" placeholder="Buscar palabra clave..." name="search"
                                class="form-control search-input">
                            <button type="submit" class="btn search-btn" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <a href="#">Ver Demo</a>
                </div>
                <!--//docs-top-utilities-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->


    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar">
            <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
                    <input type="text" placeholder="Buscar palabra clave" name="search"
                        class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            {{-- <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span
                                class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>Introducción</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">1.1 Objetivos</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">1.2 Librerías</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-componentes">1.3 Componentes</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-mob">1.4 MOB</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-atomic">1.5 Atomic Design</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-valor">1.6 Valor agregado</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">Section Item 1.4</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
                                class="theme-icon-holder me-2"><i class="fas fa-palette"></i></span>Color</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Section Item 2.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">Section Item 2.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">Section Item 2.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span
                                class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>Tipografía</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Section Item 3.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Section Item 3.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">Section Item 3.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span
                                class="theme-icon-holder me-2"><i class="fas fa-cogs"></i></span>Cards</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">Section Item 4.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-2">Section Item 4.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-3">Section Item 4.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span
                                class="theme-icon-holder me-2"><i class="fas fa-tools"></i></span>Alertas</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-1">Section Item 5.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-2">Section Item 5.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-3">Section Item 5.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6"><span
                                class="theme-icon-holder me-2"><i class="fas fa-laptop-code"></i></span>Web</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-1">Section Item 6.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-2">Section Item 6.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-3">Section Item 6.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span
                                class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>Mobile</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-1">Section Item 7.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-2">Section Item 7.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-3">Section Item 7.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span
                                class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>Resources</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">Section Item 8.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">Section Item 8.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">Section Item 8.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>FAQs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">Section Item 9.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">Section Item 9.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">Section Item 9.3</a></li>
                </ul>

            </nav>
            <!--//docs-nav--> --}}
        </div>
        <!--//docs-sidebar-->
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    @yield('content')
                    {{-- <header class="docs-header">
                        <h1 class="docs-heading">¿Qué es un Sistema de Diseño? <span class="docs-time">Última
                                actualización: 19/07/2021</span></h1>
                        <section class="docs-intro">
                            <p>Es un sistema para <b>pensar, diseñar y desarrollar.</b></p>
                            <p>Los sistemas de diseño o design systems son los procesos por los que, en la etapa de
                                planeación y construcción de un proyecto digital, se decide cuáles serán los elementos
                                de un sistema. Esos elementos incluyen la arquitectura del sitio o aplicación, sus
                                módulos, componentes, tipo de interfaz, diseño y usabilidad.</p>
                            <p>Esta herramienta permite al equipo establecer patrones y contar con una serie de
                                elementos que se pueden, y deben, reutilizar para crear funcionalidades. La modularidad
                                del sistema es lo que permite crear desde una unidad mínima hasta componentes más
                                complejos. Establece reglas que nos ayudan a trabajar en equipo de forma alineada a
                                través de principios.</p>
                            <p>Un sistema de diseño considera el producto digital como un todo, y comprende a
                                profundidad cómo cada elemento interactúa con el otro. Una forma de imaginarlo es
                                pensarlo como la arquitectura de un producto digital.</p>
                        </section>
                        <!--//docs-intro-->

                    </header> --}}
                    {{-- <section class="docs-section" id="item-1-1">
                        <h2 class="section-heading">1.1 Objetivos</h2>
                        <p>Un Sistema de Diseño o Design System facilita la agilidad en producto, al prevenir estancarse
                            en temas ya discutidos, acordados, documentados e implementados.</p>
                        <h5>Sus principales objetivos son:</h5>
                        <div class="single__content">
                            <ul>
                                <li>
                                    <p>Crear</p>
                                </li>
                                <li>
                                    <p>Unificar</p>
                                </li>
                                <li>
                                    <p>Customizar</p>
                                </li>
                                <li>
                                    <p>Agilizar</p>
                                </li>
                                <li>
                                    <p>Escalar</p>
                                </li>
                            </ul>
                        </div>
                        <h5>Beneficios:</h5>
                        <ol>
                            <li>Se diseña más rápido porque todos los elementos y patrones están disponibles en el
                                sistema.</li>
                            <li>Hay más cohesion en el equipo de producto porque todos crean a partir de un mismo
                                lenguaje y las iteraciones terminan siendo más cortas y efectivas.</li>
                            <li>El producto es más consistente porque se corrigen todos los patrones y librerías de
                                código que tienen problemas de semántica y pragmática.</li>
                            <li>Se reducen los costes porque la información está centralizada y el tiempo de diseño UI,
                                implementación y toma de decisiones se reducen.</li>
                            <li>La optimización es parte del proceso porque se trabaja más rápido dejando espacio para
                                mejorar el producto constantemente.</li>
                            <li>Facilita la escalabilidad porque el lenguaje está automatizado así que se puede aumentar
                                la actividad sin perder calidad ni aumentar los costes.</li>
                        </ol>

                        <h5>Callout Examples:</h5>
                        <div class="callout-block callout-block-info">

                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <!--//icon-holder-->
                                    Note
                                </h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a
                                        href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                            </div>
                            <!--//content-->
                        </div>
                        <!--//callout-block-->

                        <div class="callout-block callout-block-warning">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-bullhorn"></i>
                                    </span>
                                    <!--//icon-holder-->
                                    Warning
                                </h4>
                                <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere
                                    fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link
                                        example</a> tellus vel diam viverra elementum.</p>
                            </div>
                            <!--//content-->
                        </div>
                        <!--//callout-block-->

                        <div class="callout-block callout-block-success">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder me-1">
                                        <i class="fas fa-thumbs-up"></i>
                                    </span>
                                    <!--//icon-holder-->
                                    Tip
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link
                                        example</a> aenean commodo ligula eget dolor.</p>
                            </div>
                            <!--//content-->
                        </div>
                        <!--//callout-block-->

                        <div class="callout-block callout-block-danger me-1">
                            <div class="content">
                                <h4 class="callout-title">
                                    <span class="callout-icon-holder">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <!--//icon-holder-->
                                    Danger
                                </h4>
                                <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut
                                    tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim.
                                    Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                            </div>
                            <!--//content-->
                        </div>
                        <!--//callout-block-->

                        <h5 class="mt-5">Alert Examples:</h5>
                        <div class="alert alert-primary" role="alert">
                            This is a primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            This is a secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            This is a success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            This is a danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            This is a warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            This is a info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            This is a light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            This is a dark alert—check it out!
                        </div>


                    </section> --}}
                    <!--//section-->

                    {{-- <section class="docs-section" id="item-1-2">
                        <h2 class="section-heading">1.2 Librerías</h2>
                        <p>Un Design System o Sistema de Diseño es un lenguaje centralizado que consta de un conjunto de
                            patrones perceptuales y funcionales que están interconectados, traducidos en código y
                            guiados por normas específicas para que se utilicen de manera coherente y eficaz sin perder
                            el objetivo del producto digital.</p>
                        <p>Los patrones son la repetición de elementos que combinados crean una interfaz: user flows,
                            interacciones, botones, campos de textos, tipografía, textos (copy), etc. Mientras que las
                            normas son la explicación de cómo esos patrones han sido creados, cuáles son sus objetivos,
                            cómo se deben plasmar, compartir y ensamblar en la interfaz de manera coherente y eficaz.
                        </p>
                        <p>Es muy importante resaltar que los Sistemas de Diseño no son estáticos (por ejemplo un pdf),
                            son más bien dinámicos (códigos), ellos pueden mostrar los componentes, los design tokens,
                            el lenguaje utilizado, los marco de trabajo y las normas de marca y UX de un producto para
                            que todos los integrantes de un equipo los puedan utilizar de manera practica y eficiente.
                        </p>
                        <p>N5 está conformado por:</p>

                        <img class="logo2" src="../assets/images/logos/Google_Material_Design_Logo.svg.png"> +
                        <img class="logo2" src="../assets/images/logos/material-ui.png"> +
                        <img class="logo2" src="../assets/images/logos/Mask Group 4.png"> +
                        <img class="logo2" src="../assets/images/logo-color.png">
                        <h5 class="mt-5">Material Design:</h5>

                        <p>Para mayor información ir a <i class="fas fa-external-link-alt"></i> <a class="theme-link"
                                href="https://material.io/components?platform=web" target="_blank">Material.io</a>. </p>


                    </section> --}}
                    <!--//section-->

                    {{-- <section class="docs-section" id="item-componentes">
                        <h2 class="section-heading">1.3 Componentes</h2>
                        <p>Al entender que un sistema de diseño es una colección de componentes reutilizables, guiados
                            por estándares claros, que se pueden ensamblar para construir cualquier número de
                            interfaces, podemos decir que estamos tratando con un grupo de unidades discretas que serán
                            el motor del trabajo que estamos realizando.</p>

                        <h5 class="mt-5">Elementos de marca:</h5>
                        <p>Aquí entra la adaptación de la marca a los diferentes formatos donde el producto vaya a estar
                            presente.</p>
                        <p>Está compuesto por:</p>

                        <div class="single__content">
                            <ul>
                                <li>Definición de marca</li>
                                <li>Logotipo, imagotipo, isotipo</li>
                                <li>Color corporativo (Pantone, RGB, CMYK)</li>
                                <li>Tipografía</li>
                                <li>Adaptación de marca en diferentes contextos (Ej: Oficinas comerciales).</li>
                            </ul>

                            <h5 class="mt-5">Componentes de Diseño:</h5>
                            <p>Librería de componentes y otros elementos de diseño pensada para que los desarrolladores
                                y los diseñadores de producto puedan crear nuevos productos coherentes de una manera
                                rápida y fácil.</p>
                            <p>En diseño solemos incluir:</p>

                            <div class="single__content">
                                <ul>
                                    <li>UI Kit</li>
                                    <li>Dirección de arte digital</li>
                                    <li>Tipografía</li>
                                </ul>
                            </div>
                            <h5 class="mt-5">Componentes de Desarrollo:</h5>
                            <p>Los elementos del UI Kit pueden estar traspasados a código en servicios como GitHub. Esto
                                nos asegura un uso compartido, rápido y con un desarrollo controlado.</p>
                            <p>En desarrollo se suele incluir:</p>

                            <div class="single__content">
                                <ul>
                                    <li>Framework</li>
                                    <li>Api’s</li>
                                    <li>Entorno de manejo de versiones</li>
                                </ul>
                            </div>
                            <h5 class="mt-5">Componentes:</h5>
                            <img class="img" src="../assets/images/sistema.jpg">


                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-mob">
                        <h2 class="section-heading">1.4 MOB</h2>
                        <h5 class="mt-5">Methodology to Organise and Build</h5>
                        <p>MOB es nuestro sistema de diseño el cuál mantiene una filosofía que busca incluir todos los
                            dominios dentro del sistema, enfocarse en la funcionalidad, mejorar visual y funcionalmente
                            el producto.</p>
                        <p>Los principales beneficios son los siguientes:</p>
                        <div class="single__content">
                            <ul>
                                <li>Posibilidad de iteración para mejoras de los componentes</li>
                                <li>Re-utilización de componentes y dinamismo en nuevos desarrollos</li>
                                <li>Rápida customización y adaptabilidad de look and feel</li>
                                <li>Crecimiento y mejora continua sin re-trabajo</li>
                                <li>Términos específicos: Mejor comunicación entre las áreas</li>
                            </ul>
                        </div>
                        <p>El sistema de Diseño (MOB) dentro de N5:</p>
                        <div class="single__content">
                            <ul>
                                <li>SPA</li>
                                <li>FMC</li>
                                <li>Mis Clientes</li>
                                <li>Mis Resultados</li>
                                <li>Campaigns</li>
                                <li>Analytics</li>
                                <li>Onboarding</li>
                                <li>Flujos</li>
                            </ul>
                        </div>


                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-atomic">
                        <h2 class="section-heading">1.5 Atomic Design</h2>

                        <p>Atomic Design está justo en la intersección entre diseño y desarrollo. Los diseñadores
                            utilizamos guías de estilos y moodboards y los desarrolladores, frameworks como Bootstrap o
                            Foundation.</p>
                        <p>Atomic Design viene a unir ambas disciplinas bajo un concepto: diseñar por componentes.</p>
                        <img class="img2" src="../assets/images/atomic.png">
                        <h5 class="mt-5">Brad Frost basa la metodología del Atomic Design en estos 5 niveles:</h5>
                        <h5 class="mt-5">Nivel 1: Atomos.</h5>
                        <p>Un átomo es la unidad de partículas más pequeña que puede existir.</p>
                        <p>Aplicado al diseño, hablamos de átomos cuando hablamos de elementos UI que por sí solos
                            tienen alguna funcionalidad: botones, cards, avatares, inputs de formulario… pero también
                            las tipografías, paleta de colores, espaciados, párrafos…</p>
                        <img class="img" src="../assets/images/atomos.jpg">
                        <p>Y, cada uno de ellos, tiene sus propias variaciones que representan estados: seleccionados,
                            con foco, deshabilitados, etc.</p>

                        <h5 class="mt-5">Nivel 2: Moléculas.</h5>
                        <p>Una molécula es una unión de dos o más átomos.</p>
                        <p>Del mismo modo, una molécula en Atomic Design es la unión de diferentes átomos para formar un
                            elemento UI más complejo.</p>
                        <p>Por ejemplo, un campo de formulario con un botón de enviar y un label. O un rectángulo con un
                            avatar, nombre y ubicación del usuario (es decir, avatar con texto en un área determinada).
                            O un icono junto con un texto que ocupa una área determinada.</p>
                        <img class="img" src="../assets/images/moleculas.jpg">
                        <h5 class="mt-5">Nivel 3: Organismos.</h5>
                        <p>Cuando llegamos al tercer nivel estamos hablando de elementos que son más complejos, ya que
                            son sumas de los niveles anteriores.</p>
                        <p>No debemos perder de vista que estamos hablando de elementos de UI formados por moléculas
                            (que a su vez son átomos) y que, por encima de todo, pueden repetirse.</p>
                        <p>En este sentido, podríamos considerar un organismo una unión de moléculas. Por ejemplo,
                            cuando juntamos los rectángulos con el avatar y los nombres, cuando unimos los iconos y
                            texto para crear una navegación de una aplicación, etc.</p>
                        <img class="img" src="../assets/images/organismos.jpg">
                        <h5 class="mt-5">Nivel 4: Plantillas.</h5>
                        <p>En esencia, lo que consideraríamos “plantillas” dentro del Atomic Design no dejarían de ser
                            los wireframes: una unión de distintos organismos que forman una página o una aplicación.
                        </p>
                        <p>Se trata de un entregable de alta fidelidad, pero que no termina de ser el diseño final. Para
                            que nos entendamos, se trata del “esqueleto” de la aplicación o página web.</p>
                        <h5 class="mt-5">Nivel 5: Páginas.</h5>
                        <p>Este es el último nivel del Atomic Design. Son en realidad el diseño final que ya contiene
                            las imágenes y otros detalles que hacen que ese archivo ya esté listo para el desarrollo o,
                            en su defecto, test con usuarios o el equipo.</p>



                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-valor">
                        <h2 class="section-heading">1.6 Valor agregado</h2>
                        <p>Utilizar un sistema de diseño garantiza la consistencia de nuestros productos. Esto repercute
                            de manera positiva en la experiencia del usuario y acorta significativamente los tiempos de
                            ideación, desarrollo y elaboración de productos. Por otra parte, los sistemas de diseño son
                            una herramienta especialmente útil para conseguir crear productos digitales capaces de
                            escalar y crecer rápidamente de una forma controlada. Por último, pero no menos importante,
                            un valor que aporta es que permite dedicar menos tiempo a pensar en detalles superfluos y
                            más a pensar en producto.</p>
                        <p>Si bien presenta algunas similitudes, el sistema de diseño no es ni un manual de marca ni una
                            guía de estilos, ni sustituto de los mismos. Puede convivir con ellos y cada uno aporta
                            valores distintos. La principal diferencia, es que el sistema de diseño no es un documento
                            estático de consulta que se limita a explicar cómo debe ser el aspecto de los elementos.
                            Como ya hemos mencionado, el sistema de diseño es una entidad viva que contiene un lenguaje
                            común, principios y herramientas que ayudan a construir productos coherentes.</p>


                    </section>
                    <!--//section--> --}}

                    {{-- <section class="docs-section" id="item-1-3">
                        <h2 class="section-heading">Section Item 1.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        <h5>Badges Examples:</h5>
                        <div class="my-4">
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-secondary">Secondary</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-danger">Danger</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-info">Info</span>
                            <span class="badge badge-light">Light</span>
                            <span class="badge badge-dark">Dark</span>
                        </div>
                        <h5>Button Examples:</h5>
                        <div class="row my-3">
                            <div class="col-md-6 col-12">
                                <ul class="list list-unstyled pl-0">
                                    <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                    <li><a href="#" class="btn btn-secondary">Secondary Button</a></li>
                                    <li><a href="#" class="btn btn-light">Light Button</a></li>
                                    <li><a href="#" class="btn btn-success">Succcess Button</a></li>
                                    <li><a href="#" class="btn btn-info">Info Button</a></li>
                                    <li><a href="#" class="btn btn-warning">Warning Button</a></li>
                                    <li><a href="#" class="btn btn-danger">Danger Button</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <ul class="list list-unstyled pl-0">
                                    <li><a href="#" class="btn btn-primary"><i class="fas fa-download me-2"></i>
                                            Download Now</a></li>
                                    <li><a href="#" class="btn btn-secondary"><i class="fas fa-book me-2"></i> View
                                            Docs</a></li>
                                    <li><a href="#" class="btn btn-light"><i
                                                class="fas fa-arrow-alt-circle-right me-2"></i> View Features</a></li>
                                    <li><a href="#" class="btn btn-success"><i class="fas fa-code-branch me-2"></i> Fork
                                            Now</a></li>
                                    <li><a href="#" class="btn btn-info"><i class="fas fa-play-circle me-2"></i> Find
                                            Out Now</a></li>
                                    <li><a href="#" class="btn btn-warning"><i class="fas fa-bug me-2"></i> Report
                                            Bugs</a></li>
                                    <li><a href="#" class="btn btn-danger"><i
                                                class="fas fa-exclamation-circle me-2"></i> Submit Issues</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--//row-->

                        <h5>Progress Examples:</h5>
                        <div class="my-4">
                            <div class="progress my-4">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress my-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </section>
                    <!--//section-->

                </article>

                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h1 class="docs-heading">Paleta de Colores</h1>
                        <section class="docs-intro">
                            <p>El color es un elemento muy importante de la comunicación visual, por ello, es necesario
                                hacer un uso inteligente e intencional del mismo. A la hora de crear sistemas de diseño
                                distinguimos los siguientes tipos de colores: </p>
                            <div class="single__content">
                                <ul>
                                    <li><strong> Marca.</strong> Colores normalmente asociados al branding, que definen
                                        y dan personalidad a la marca del producto. La función principal de estos
                                        colores es acentuar.Todos los colores primarios se agruparan en la paleta
                                        primaria.</li>
                                    <li><strong>Complementarios.</strong> Grupos de colores con la riqueza suficiente
                                        como para funcionar a la hora de crear aplicaciones tales como ilustraciones,
                                        fotografías o generar colores de fondo.Todos los colores secundarios definidos
                                        se agruparan en la paleta secundaria.</li>
                                    <li><strong>Tipográficos.</strong> Como mínimo se deben establecer un color oscuro y
                                        otro claro para utilizar en la tipografía. También se pueden establecer otros
                                        estilos de texto que tengan un color distinto a los mencionados.</li>
                                </ul>
                            </div>
                        </section>
                        <!--//docs-intro-->
                    </header>
                    <section class="docs-section" id="item-2-1">
                        <h2 class="section-heading">Section Item 2.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-2-2">
                        <h2 class="section-heading">Section Item 2.2</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-2-3">
                        <h2 class="section-heading">Section Item 2.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->
                </article>
                <!--//docs-article-->


                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading">APIs</h1>
                        <section class="docs-intro">
                            <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit.
                                Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                        </section>
                        <!--//docs-intro-->
                    </header>
                    <section class="docs-section" id="item-3-1">
                        <h2 class="section-heading">Section Item 3.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-3-2">
                        <h2 class="section-heading">Section Item 3.2</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->

                    <section class="docs-section" id="item-3-3">
                        <h2 class="section-heading">Section Item 3.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <!--//section-->
                </article>
                <!--//docs-article--> --}}

                    <article class="docs-article" id="section-4">
                        <header class="docs-header">
                            <h1 class="docs-heading">Intergrations</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum
                                    suscipit.
                                    Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                    lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-4-1">
                            <h2 class="section-heading">Section Item 4.1</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-4-2">
                            <h2 class="section-heading">Section Item 4.2</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-4-3">
                            <h2 class="section-heading">Section Item 4.3</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->

                    <article class="docs-article" id="section-5">
                        <header class="docs-header">
                            <h1 class="docs-heading">Utilities</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum
                                    suscipit.
                                    Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                    lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-5-1">
                            <h2 class="section-heading">Section Item 5.1</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-5-2">
                            <h2 class="section-heading">Section Item 5.2</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-5-3">
                            <h2 class="section-heading">Section Item 5.3</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->


                    <article class="docs-article" id="section-6">
                        <header class="docs-header">
                            <h1 class="docs-heading">Web</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum
                                    suscipit.
                                    Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                    lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-6-1">
                            <h2 class="section-heading">Section Item 6.1</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-6-2">
                            <h2 class="section-heading">Section Item 6.2</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-6-3">
                            <h2 class="section-heading">Section Item 6.3</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->


                    <article class="docs-article" id="section-7">
                        <header class="docs-header">
                            <h1 class="docs-heading">Mobile</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum
                                    suscipit.
                                    Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                    lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-7-1">
                            <h2 class="section-heading">Section Item 7.1</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-7-2">
                            <h2 class="section-heading">Section Item 7.2</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-7-3">
                            <h2 class="section-heading">Section Item 7.3</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->


                    <article class="docs-article" id="section-8">
                        <header class="docs-header">
                            <h1 class="docs-heading">Resources</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum
                                    suscipit.
                                    Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                    lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-8-1">
                            <h2 class="section-heading">Section Item 8.1</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-8-2">
                            <h2 class="section-heading">Section Item 8.2</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-8-3">
                            <h2 class="section-heading">Section Item 8.3</h2>
                            <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae
                                facilisis
                                leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis
                                quis
                                felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla
                                odio
                                in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                                arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->


                    <article class="docs-article" id="section-9">
                        <header class="docs-header">
                            <h1 class="docs-heading">FAQs</h1>
                            <section class="docs-intro">
                                <p>Section intro goes here. You can list all your FAQs using the format below.</p>
                            </section>
                            <!--//docs-intro-->
                        </header>
                        <section class="docs-section" id="item-9-1">
                            <h2 class="section-heading">Section Item 9.1 <small>(FAQ Category One)</small></h2>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget
                                lacinia?
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.
                                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                Nulla
                                consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu
                                pede mollis pretium.</p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam
                                tortor?</h5>
                            <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
                                cursus
                                nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus
                                quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I bibendum sodales?</h5>
                            <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                nonummy
                                id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?
                            </h5>
                            <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum
                                diam
                                mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus
                                leo.
                                Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida
                                lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-9-2">
                            <h2 class="section-heading">Section Item 9.2 <small>(FAQ Category Two)</small></h2>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget
                                lacinia?
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.
                                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                Nulla
                                consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu
                                pede mollis pretium.</p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam
                                tortor?</h5>
                            <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
                                cursus
                                nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus
                                quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I bibendum sodales?</h5>
                            <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                nonummy
                                id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?
                            </h5>
                            <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum
                                diam
                                mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus
                                leo.
                                Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida
                                lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                        </section>
                        <!--//section-->

                        <section class="docs-section" id="item-9-3">
                            <h2 class="section-heading">Section Item 9.3 <small>(FAQ Category Three)</small></h2>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to dapibus sollicitudin
                                justo
                                vel fermentum?</h5>
                            <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
                                cursus
                                nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus
                                quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How long bibendum sodales?</h5>
                            <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                nonummy
                                id, metus. Nullam accumsan lorem in dui. </p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where dapibus sollicitudin?</h5>
                            <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum
                                diam
                                mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus
                                leo.
                                Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida
                                lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                        </section>
                        <!--//section-->
                    </article>
                    <!--//docs-article-->

                    <footer class="footer">
                        <div class="container text-center py-5">

                            <ul class="social-list list-unstyled pt-4 mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
                            </ul>
                            <!--//social-list-->
                        </div>
                    </footer>
            </div>
        </div>
    </div>
    <!--//docs-wrapper-->


    <!-- Javascript -->
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="../assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="../assets/js/highlight-custom.js"></script>
    <script src="../assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="../assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="../assets/js/docs.js"></script>

</body>

</html>
