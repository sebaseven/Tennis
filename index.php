<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GRINCOC - TENNIS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>
<?php
if (!isset($_POST["submit"])) { ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <body id="page-top">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/GC_LOGO-CH.png" alt="" width="193" height="80" /></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#portfolio">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#about">Sedes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#team">Becas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Header -->
            <header class="masthead">
                <div class="container">
                    <div class="intro-text">

                        <div class="intro-heading text-uppercase "><img src="img/GC_LOGO.png" alt="grincoc logo" width="735" height="264" class="img-fluid" /></div>
                        <div>&nbsp;</div>
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="inscripcion.html">INSCRIBITE</a>
                        <div>&nbsp;</div>
                        <a button type="button" class="btn btn-light" href="entrenamientodeprueba.html">Entrenamiento de prueba</a>
                        <div>&nbsp;</div>
                        <p>Solo jugadores con residencia en Argentina</p>
                    </div>
                </div>
            </header>

            <!-- Services -->
            <section class="page-section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">Servicios</h2>
                            <h3 class="section-subheading text-muted"></h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-baseball-ball fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="service-heading">JUGADORES</h4>
                            <p class="text-muted">Juniors. Profesionales. Seniors.</p>
                            <!--<p>Nuestro ciclo anual de trabajo se extiende de enero a diciembre. Ofrecemos una multiplicidad de fórmulas y opciones que permiten a cada uno de nuestros jugadores encontrar el programa que mejor le conviene. Rodeados por nuestro equipo de coachs, nuestros jugadores tienen la oportunidad de descubrir los métodos que definen el deporte de alto nivel.
                    <p>Todas las opciones de nuestro trabajo ofrecen un entrenamiento a base de repetición y correctivos técnicos y situaciones de jugadas que ponen acento en el aspecto táctico y mental.</p>-->
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">Ver más...</a>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-medal fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="service-heading">ENTRENADORES</h4>
                            <p class="text-muted">
                                Servicios para entrenadores. Ofrecemos estructura para el entrenamiento de sus jugadores.
                                Asesoramiento en el lugar y a distancia. Testeo técnico, táctico y físico. Entrenamiento conjunto.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-table-tennis fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="service-heading">INSTITUCIONES</h4>
                            <p class="text-muted">Servicios para instituciones. Armado de una Academia (todos los niveles de enseñanza hasta profesionales). Asesoramiento para el armado de una Academia. Asesoramiento, testeo y seguimiento de jugadores competitivos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Grid -->
            <section class="bg-light page-section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">NOSOTROS</h2>
                            <h4 class="section-subheading text-muted">Nuestra Filosofía</h4>
                            <h3 class="section-subheading text-muted">Hemos trabajado 20 años con jugadores de tenis. Tratando de cumplir sus sueños y haciendo con ellos, mejores personas. Colaboramos en la formación de numerosos jugadores destacados, obteniendo grandes victorias a través de nuestro método de trabajo. Renovamos nuestro equipo, para evolucionar año a año, intercambiamos ideas, aprendemos de nuestros alumnos, para ser una de las mejores academias de Sudamérica. Tenemos pasión por lo que hacemos, estamos comprometidos con nuestro trabajo y buscamos que las personas que nos rodean superen sus límites, y alcancen todo su potencial.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 portfolio-item col-xl-2">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover"> </div>
                            </a>

                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="img/01-Conti-full.jpg" width="400" height="360" alt="Cinthia Conti">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Cinthia Conti</h4>
                                <p class="text-muted">Fundadora</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="img/02-Grisolia-ch.jpg" width="400px" height="360px" alt="Natalia Grsolía">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Natalia Grisolía</h4>
                                <p class="text-muted">Fundadora</p>
                            </div>
                        </div>


                    </div>

                  <!--  <div class="row">
                        <div class="col-md-4 col-sm-6 portfolio-item ">
                            <a class="portfolio-link" data-toggle="modal">

                                <img class="img-fluid" src="img/Luciano-Cabeiro-ch.jpg" width="400" height="360" alt="Luciano Cabeiro">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Luciano Cabeiro</h4>
                                <p class="text-muted">Equipo técnico</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal">
                                <!--<div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                          </div>
                        </div>
                                <img class="img-fluid" src="img/Federico-Alvarez-ch.jpg" width="400" height="360" alt="ederico Álvarez">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Federico Álvarez</h4>
                                <p class="text-muted">Equipo técnico</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal">
                                <!--<div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                          </div>
                        </div>
                                <img class="img-fluid" src="img/Agustin-Valentini-ch.jpg" width="400px" height="360px" alt="Agustín Valentini">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Agustín Valentini</h4>
                                <p class="text-muted">Equipo técnico</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-md-lg-xl-12 text-center">
                        <a button type="btn btn-primary btn-xl text-uppercase js-scroll-trigger" class="btn btn-warning" href="trabajo.html">Sé parte de nuestro equipo técnico</a>
                    </div>-->


                    
                </div>
            </section>

            <!-- About -->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">SEDES E INSTALACIONES</h2>
                            <h3 class="section-subheading text-muted">Nuestra Academia cuenta con dos sedes ubicadas en la Ciudad de Buenos Aires.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image">
                                        <img class="rounded-circle img-fluid" src="img/logos/Logo-darling.jpg" width="282px" height="282px" alt="logo Darling Tennis Club">
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h5>
                                                Darling Tennis Club<br>
                                                <a href="https://www.darlingtennisclub.org/">darlingtennisclub.org</a>
                                            </h5>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">
                                                En pleno corazón de Puerto Madero, el Darling Tennis Club, es uno de los clubes más tradicionales de la República Argentina. Fundado en 1928, cuenta hoy con hermosos parques y jardines ademas de:<br>
                                                <br>
                                                -13 canchas de tenis de polvo de ladrillo.<br>
                                                - Piscina.<br>
                                                - Vestuarios.<br>
                                                - Restaurant.<br>
                                                - Gimnasio.<br>
                                                - Quincho.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <img class="rounded-circle img-fluid" src="img/logos/Logo-soliscano-baja.jpg" width="282px" height="282px" alt="logo solis cano">
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>Solis Cano</h4>
                                            <h4 class="subheading">Solis 1252, CABA</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">Posee 5 canchas de tenis techadas, estacionamiento propio gratis, vestuarios</p>
                                        </div>
                                    </div>
                                </li>


                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <h4>
                                            <br>¡Sumate!
                                            <br>
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Contact -->
            <section class="page-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">Contacto</h2>
                            <h3 class="section-subheading text-muted">Envíanos tu consulta.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="txtnombre" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="txtemail" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="txttel" type="tel" placeholder="Teléfono *" required="required" data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="txtmensaje" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <input type="submit" class="btn btn-primary btn-xl text-uppercase" name="submit" value="ENVIAR">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <span class="copyright"></span>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-inline social-buttons">
                                <!--<li class="list-inline-item">
                          <a href="#">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>-->
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/grincoctennis/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/grincoctennis/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--<div class="col-md-4">
                  <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">Terms of Use</a>
                    </li>
                  </ul>
                </div>-->
                    </div>
                </div>
            </footer>

            <!-- Portfolio Modals -->
            <!-- Modal 1 -->
            

            <!-- Modal 2 -->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2 class="text-uppercase">Cinthia Conti</h2>
                                        <p class="item-intro text-muted">Fundadora</p>
                                        <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                                        <p>
                                            Desde sus primeros pasos en el tenis, Cinthia Conti se destacó como una gran jugadora, representando al Club River Plate en la década de los 80, en el mismo equipo que participaba la emblemática tenista Gabriela Sabatini. De muy joven, comenzó a pisar fuerte como coach y directora del Centro de Enseñanza y Entrenamiento de Alto Rendimiento Kofman - Conti, en el Club Comunicaciones, donde forjo su experiencia en la dirección y administración de todos los ámbitos empresariales y competitivos vinculados al tenis.
                                            Luego, trabajo como supervisora y responsable de los parques Manuel Belgrano, Sarmiento, General Roca y Campo Municipal de Golf y fue directora de la escuela pública de tenis, en la Dirección General de Deportes de la -Ciudad de Buenos Aires. Más adelante, sustentando su camino hacia la especialización como entrenadora de tenistas de alto rendimiento, viajo a España donde se destacó como la única mujer coach en la Academia Sanchez-Casal, dirigida por Emilio Sanchez Vicario, en la ciudad de Barcelona. De regreso al país, se asocia con la coach Natalia Grisolia para dirigir la academia de tenis en el Club Círculo Militar. Un nuevo paso por Europa, la llevo a ser la responsable de la programación y entrenamientos de la Magic Tennis Academy en la ciudad de Jesi, en Italia, y a crear en la ciudad de Porto San Giorgio la Asociación Deportiva Grincoc, donde también se desempeñó como coach. De nuevo radicada en el país, tras casi 20 años viajando por Europa y Sudamérica como coach de jugadores juniors y profesionales, Cinthia Conti continúa junto a Natalia Grisolia encabezando Grincoc.
                                            Su notable trayectoria dentro del tenis de formación competitivo la llevo a ser elegida en varias oportunidades como capitana de delegaciones nacionales que han representado a nuestros juveniles por el mundo y se parte del programa “tutores” de desarrollo de contenidos para los profesorados de tenis de todo el país.
                                            Su amplio conocimiento técnico la convierte actualmente en una consultora y asesora requerida por varios coach en todo el mundo.
                                        </p>
                                        <ul class="list-inline">
                                            <h4>Algunos jugadores/as con los que ha colaborado en su trayectoria como coach:</h4>
                                            <p>Stefano Travaglia (ITA), Federico Gaio (ITA), Juan Pablo Ortiz (ARG), Maximiliano Estevez ( ARG), Juan Pablo Paz ( ARG), Gianluigi Quinzi (ITA), Gloria Pischini (ITA), Nastassja Burnett (ITA), Tomas Tenconi (ITA), Juan Martin Aranguren ( ARG), Jonathan Gonzalia (ARG), Dante Bottini (ARG), Matias Guccione (ARG), Sabrina Valenti (ARG), Guillermo Carry (ARG).</p>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times"></i>
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2 class="text-uppercase">Natalia Grisolía</h2>
                                        <p class="item-intro text-muted">
                                            Fundadora
                                        </p>
                                        <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                        <p>Natalia Grisolia comenzó a dar sus primeros pasos en el tenis desde muy pequeña, como una muy hábil jugadora que ha logrado destacarse a nivel nacional a lo largo de su niñez y adolescencia. Luego de recibirse como profesora Nacional de Educación Física en el Instituto N1 Dr. Enrique Romero Brest, unió su vocación con su pasión para convertirse hoy en una entrenadora de tenistas de alto rendimiento. Su primer trabajo gerencial en el ámbito tenístico lo llevo adelante en el campo de deportes del Colegio Cardenal Copello, en la Ciudad de Buenos Aires. Luego Dirigió la academia de tenis del Club Círculo Militar de Buenos Aires donde más tarde se asoció con Cinthia Conti. Tiempo después, forjo su experiencia profesional en Europa como coach y responsable de las programaciones físicas y organización general en la Magic Tennis Academy, en la ciudad de Jesi, en Italia, y creo el Grupo de Alto Rendimiento de tenis Masculino de la Asociación Deportiva Grincoc, en la ciudad de Porto San Giorgio, también en Italia. Tras su regreso al país, continúa junto a Cinthia Conti encabezando Grincoc, y lleva más de diez años viajando por Europa y Sudamérica como coach de jugadores juniors y profesionales.</p>
                                        <ul class="list-inline">
                                            <h4>Algunos jugadores/as con los que ha colaborado en su trayectoria como coach:</h4>
                                            <p>Stefano Travaglia (ITA), Federico Gaio (ITA), Juan Pablo Ortiz (ARG), Maximiliano Estevez ( ARG), Juan Pablo Paz ( ARG) y Gianluigi Quinzi (ITA).</p>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times"></i>
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2 class="text-uppercase">Jugadores</h2>
                                        <p class="item-intro text-muted">Junios. Profesionales. Seniors.</p>
                                        <!--<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">-->
                                        <h4>Jugadores Juniors</h4>
                                        <p>
                                            Nuestro ciclo anual de trabajo se extiende de enero a diciembre. Ofrecemos una multiplicidad de fórmulas y opciones que permiten a cada uno de nuestros jugadores encontrar el programa que mejor le conviene. Rodeados por nuestro equipo de coachs, nuestros jugadores tienen la oportunidad de descubrir los métodos que definen el deporte de alto nivel.

                                            Todas las opciones de nuestro trabajo ofrecen un entrenamiento a base de repetición y correctivos técnicos y situaciones de jugadas que ponen acento en el aspecto táctico y mental.
                                        </p>

                                        <h6>Pretemporadas</h6>
                                        <p>Las pretemporadas se realizan todos los años de la semana 1 a 8 y la semana 29 y 30.</p>

                                        <h6>Personalizado</h6>
                                        <p>Elegí el momento del año que quieras entrenarte o hacer tu propia pre temporada.</p>
                                        <h4>Jugadores Profesionales</h4>
                                        <p>ITF, ATP y WTA team. Opciones de Entrenamiento: entrenamientos grupales e individuales.</p>
                                        <h6>Giras</h6>
                                        <p>Giras grupales e individuales.</p>

                                        <h4>Jugadores Seniors</h4>
                                        <p>
                                            Opciones de Entrenamiento.
                                            Tenis y paseo por buenos aires.
                                        </p>

                                        <ul class="list-inline">
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times"></i>
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
           

            <!-- Modal 6 -->
            

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Contact form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <!-- Custom scripts for this template -->
            <script src="js/agency.min.js"></script>

        </body>
    </form>
<?php
} else {

    if ($_POST) {
        $headers = "From: sitio@grincoctennis.com";
        $from_email  = "sitio@grincoctennis.com";  // sender email
        $to_email    = "grincoc@gmail.com";    //recipient email 
        $Nombre = $_POST['txtnombre'];
        $Tel = $_POST['txttel'];
        $Mensaje = $_POST['txtmensaje'];
        $Email = $_POST['txtemail'];
        $subject = 'Contacto Automatico desde Pagina';
        $MensajeCompuesto = 'Este es un mensaje automatico desde el sitio Grinco' . "\n";
        $MensajeCompuesto = 'Nombre: ' . $Nombre . "\n";
        $MensajeCompuesto .= 'Tel: ' . $Tel .  "\n";
        $MensajeCompuesto .= 'Email: ' . $Email . "\n";
        $MensajeCompuesto .= 'Mensaje: ' . $Mensaje;
        //echo $MensajeCompuesto;

        if (mail($to_email, $subject, $MensajeCompuesto, $headers)) {
    
             header("Location: http://www.grincoctennis.com/nuevositio/EmailEnviado.html");
             die();
           
        } else {
            echo ("Error en envio...");
        }
    }
}
?>


</html>