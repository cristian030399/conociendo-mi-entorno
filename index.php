<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6bdbba">
    <title>Conociendo mi entorno</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div id="root">
        <header class="cabezote">
            <img src="./assets/imgs/Banner Ude@Mesa de trabajo 1.png" alt="Cabezote" class="cabezote__img">
        </header>

        <nav class="navbar">

            <input type="checkbox" name="navbar__checkbox" id="navbar__checkbox">
            <label for="navbar__checkbox" class="navbar__menuTriger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list menu-trigger__ico" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </label>

            <ul class="navbar__menu" id="menu-principal">
                <li class="abrirColapsable activo" onclick="stopVideos()" data-contenidoid="compromisosRecomendaciones" data-section-name="Compromisos y recomendaciones">
                    Compromisos y recomendaciones</li>
                <li class="abrirColapsable" onclick="stopVideos()" data-contenidoid="editoPerfil" data-section-name="Edito el perfil">Edito el perfil</li>
                <li class="abrirColapsable" onclick="stopVideos()" data-contenidoid="actividades" data-section-name="Mis actividades">Mis actividades</li>
                <li class="abrirColapsable" onclick="stopVideos()" data-contenidoid="tutoriasVirtuales" data-section-name="Participo en tutorías virtuales">Participo en tutorías virtuales</li>
            </ul>

            <h1 class="navbar__titulo" id="navbar__titulo">Compromisos y recomendaciones</h1>
        </nav>

        <div class="contenido">
            <section id="compromisosRecomendaciones" class="colapsable activo">

                <div class="carrusel" id="carrusel1">
                    <div class="carrusel__slide">

                        <div class="contenedor-video">
                            <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/6005a9bc5115740ce72fc144" type="text/html" allowscriptaccess="always"
                                    allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div>
                        </div>
                    </div>
                    <div class="carrusel__slide">

                        <div class="contenedor-video">
                            <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1920px" height="1080px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5cc34411db97e30f5d500203" type="text/html" allowscriptaccess="always"
                                    allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div>
                        </div>
                    </div>

                    <button class="carrusel__flechaIzquierda carrusel__flecha" data-carruselId="carrusel1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>

                    <button class="carrusel__flechaDerecha carrusel__flecha" data-carruselId="carrusel1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>

                </div>
            </section>

            <section id="editoPerfil" class="colapsable">

                <div class="contenedor-video">
                    <div class="video">
                        <div class="video-iframe" id="editar_perfil"></div>
                    </div>
                </div>
            </section>

            <section id="actividades" class="colapsable">
                <div class="carrusel" id="carrusel2">
                    <!-- Slide -->
                    <div class="carrusel__slide">
                        <div class="contenedor-video">
                            <div class="video">
                                <div class="video-iframe" id="participo_en_foro"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="carrusel__slide">
                        <div class="contenedor-video">
                            <div class="video">
                                <div class="video-iframe" id="resolver_una_actividad_interactiva"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="carrusel__slide">
                        <div class="contenedor-video">
                            <div class="video">
                                <div class="video-iframe" id="resolver_un_cuestionario"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="carrusel__slide">
                        <div class="contenedor-video">
                            <div class="video">
                                <div class="video-iframe" id="enviar_una_tarea"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="carrusel__slide">
                        <div class="contenedor-video">
                            <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1920px" height="1080px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5ccb03afdb97e30f5d5d432a" type="text/html" allowscriptaccess="always"
                                    allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div>
                        </div>
                    </div>

                    <button class="carrusel__flechaIzquierda carrusel__flecha" onclick="stopVideos()" data-carruselId="carrusel2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>

                    <button class="carrusel__flechaDerecha carrusel__flecha" onclick="stopVideos()" data-carruselId="carrusel2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>

                </div>
            </section>

            <section id="tutoriasVirtuales" class="colapsable">

                <div class="contenedor-video">
                    <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1366px" height="768.375px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/605e0d15e44ee30d9ab7169a" type="text/html" allowscriptaccess="always" allowfullscreen="true"
                            scrolling="yes" allownetworking="all"></iframe> </div>
                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="footer__info">
                <div class="footer--logoUdearroba">
                    <img src="./assets/imgs/footer-logo.png" alt="" class="footer__logo">
                </div>
                <p class="footer__text" style="line-height : 27px; ">
                    Contacto: serviciosude@udea.edu.co
                    <br>Calle 67 #53-108 - Bloque 22, oficina 226 Medellín (Antioquia) - Colombia
                    <br>+57 (4) 219 8111
                </p>
            </div>
            <div class=" footer--logoUdea">
                <img src="./assets/imgs/logo-udea-portal.png" class="footer__logo" alt="">
            </div>
        </footer>
    </div>




    <script src="https://www.youtube.com/iframe_api "></script>
    <script src="./assets/js/youtube.js "></script>
    <script src="./assets/js/main.js "></script>

</body>

</html>