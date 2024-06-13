<!DOCTYPE html>
<html lang="en">

<head>
    <title>DrinkPoint - Lo mejor en vinos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo URL;?>gen/production/images/favicon.png" type="image/ico" />


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/animate.css">

    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URL; ?>drinkPoint/css/style.css">
</head>

<body>

    <!-- SECCION DE REDES SOCIALES -->
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Tel:</span> <a href="#">+57 3014874236  </a> <span
                            class="mailus">Correo:</span> <a href="#">info@drinkpoint.com</a></p>
                </div>
                <div class="col-12 col-md d-flex justify-content-md-end">
                    <p class="mb-0">Lun - Vie / 9:00am-11:00pm, Sab - Dom / 10:00am-10:00pm</p>
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://www.facebook.com" target= "_blank" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="https://twitter.com" target= "_blank" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="https://instagram.com" target= "_blank" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="https://www.whatsapp.com" target= "_blank"   class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-whatsapp"><i class="sr-only">WhatsApp</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION DEL MENU DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL; ?>">Drink<span>Point</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?php echo URL; ?>" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>#about" class="nav-link">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>#products" class="nav-link">Productos</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>#testimonial" class="nav-link">Testimonios</a></li>
                    <li class="nav-item"><a href="<?php echo URL; ?>#contact" class="nav-link">Contacto</a></li>
                    
                    <!-- SI esta logiueado, mostrar cerrar sesión
                    Sino, mostrar iniciar sesión
                    -->
                    <?php 
                        if ( isset( $_SESSION['SESSION_START'] ) ) {
                            # Mostrar Cerrar sesión
                            echo "<li class='nav-item'><a href='" . URL . "usuarioController/logOut' class='nav-link'>Cerrar Sesión</a></li>";
                        } else {
                            # Mostrar Iniciar sesión
                            echo "<li class='nav-item'><a href='" . URL . "usuarioController/login' class='nav-link'>Iniciar Sesión</a></li>";
                        }                    
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- SECCION DEL BANNER -->
    <section class="hero-wrap">
        <div class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight"
                style="background-image:url(<?php echo URL; ?>drinkPoint/images/bg_11.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 mt-5 text-center">
                                <span class="subheading">Tu mejor version</h2></span>
                                <h1>Vinos exclusivos </h1>
                                <span class="subheading-2">1958</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight"
                style="background-image:url(<?php echo URL; ?>drinkPoint/images/bg_22.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 mt-5 text-center">
                                <span class="subheading">Drink Point en todo el mundo</h2></span>
                                <h1>Expertos en vinos</h1>
                                <span class="subheading-2 sub">1958</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">

        
                <div class="col-sm-10 wrap-about py-5 ftco-animate img"
                    style="background-image: url(<?php echo URL; ?>drinkPoint/images/aboutt.jpg);">
                    <div class="row pb-5 pb-md-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="heading-section mt-5 mb-4">
                                <div class="pl-lg-3 ml-md-5">
                                    <span class="subheading">ACERCA DE</span>
                                    <h2 class="mb-4">DRINK POINT</h2>
                                </div>
                            </div>
                            <div class="pl-lg-3 ml-md-5">
                                <p>Jorge Mario Correa R, inicialmente a través de viajes a destinos Vitivinícolas, visitas a diferentes productores, estudiar, probar, probar. En el mes de Junio de 2006, creamos la Sociedad Importadora Libation SAS; y para el 1 de Diciembre del mismo año, abrió en el sector de El Poblado la primera tienda especializada en Vinos de la Ciudad de Medellín, llamada inicialmente “El Mundo del Vino“, la cual después se transformó en “DRINK POINT”.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE UN MINI BANNER -->
    <section class="ftco-section ftco-intro"
        style="background-image: url(<?php echo URL; ?>drinkPoint/images/bg_33.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span>Los mejores viñedos</span>
                    <h2>Al alcance & en tu mesa.</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PRODUCTOS -->
    <section id="products" class="food_section layout_padding-bottom py-5">
        <div class="container">
            <div class="col-md-12 text-center heading-section mb-5 ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Carta</span>
                <h2 class="mb-4">Todos los productos</h2>
            </div>

            <ul class="filters_menu">
                <a href="<?php echo URL ?>#products"><li class="active" data-filter="*">Todos</li></a>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo URL ?>?idCategoria=<?php echo $category['idCategoria']; ?>#products"><li data-filter=".pasta"><?php echo $category['Nombre']; ?></li></a>
                <?php endforeach; ?>
            </ul>

            <div class="filters-content">
                <div class="row grid">
                    <?php foreach ($products as $product) : ?><div class="col-sm-6 col-lg-4 all pizza">                
                        <div class="box">
                            <div class="img-box">
                                <?php
                                    if ($product['Imagen'] != null) {
                                        echo "<img src='data:image/jpeg;base64, " . base64_encode($product['Imagen']) . "' alt=''/>";
                                    } else {
                                        echo "<img src='" . URL . "img/Image-not-found.png'/>";                                                
                                    }
                                ?>
                            </div>
                            
                            <div class="detail-box">
                                <h5><?php echo $product['Nombre']; ?></h5>
                                <p><?php echo $product['Descripcion']; ?></p>
                                
                                <div class="options">
                                    <h6><?php echo "$" . number_format($product['Precio']); ?></h6>

                                    <!-- SI esta logueado, mostrar el boton de whatSaap si no, mostrar iniciar sesión -->
                                    <?php if ( isset( $_SESSION['SESSION_START'] ) ) : ?>
                                        <a class="whatsaap" href='https://web.whatsapp.com/send?phone=573108368409&text=Hola%2C+deseo+comprar%3A%0D%0A%0D%0A*Producto:* <?php echo $product['Nombre']; ?>%0D%0A*Precio:* $<?php echo number_format($product['Precio']); ?>%0D%0A*URL:* http:<?php echo $url_publica; ?>%0D%0A%0D%0AMuchas+gracias%21' target="_blank">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve">
                                                <g id="XMLID_468_">
                                                    <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                                        c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                                        c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                                        c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                                        c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                                        c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                                        c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                                        c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                                        c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                                        C233.168,179.508,230.845,178.393,227.904,176.981z"/>
                                                    <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                                        c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                                        c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                                        M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                                        l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                                        c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                                        C276.546,215.678,222.799,268.994,156.734,268.994z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    <?php elseif(true) : ?>
                                        <a href="http:<?php echo $url_publica; ?>/usuarioController/login">Iniciar sessión </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; ?>
                </div>
            </div>
            
            <!-- <div class="btn-box">
                <a href="">
                View More
                </a>
            </div> -->
        </div>
    </section>
    <!-- end section -->

    <!-- SECCION DE TESTIMONIOS -->
    <section id="testimonial" class="ftco-section testimony-section"
        style="background-image: url(<?php echo URL; ?>drinkPoint/images/bg_55.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-3 pb-2">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Nuestros</span>
                    <h2 class="mb-4">Testimonios</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-7">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="text p-3">
                                    <p class="mb-4">Los productos de calidad y la frescura de sus vinos hacen que nos convirtamos
                                        en sus clientes fieles y fidelicemos a los nuestros.</p>
                                    <div class="user-img mb-4"
                                        style="background-image: url(<?php echo URL; ?>drinkPoint/images/person_1.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <p class="name">Fredholms Vin</p>
                                    <span class="position">Excelentes profesionales y conocedores en el área</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="text p-3">
                                    <p class="mb-4">La flexibilidad y el buen servicio que nos dan a los clientes son el principal 
                                        pilar, para considerarlos nuestro mejor proveedor.</p>
                                    <div class="user-img mb-4"
                                        style="background-image: url(<?php echo URL; ?>drinkPoint/images/person_2.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <p class="name">Pierre Ragon</p>
                                    <span class="position"> Amables y muy profesionales. Recomendados 100%</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="text p-3">
                                    <p class="mb-4">Sus productos de excelente calidad cumplen a cabalidad todas las expectativas de 
                                        nuestros clientes, ayudándonos a ser un bar exitoso y de calidad  en la ciudad.</p>
                                    <div class="user-img mb-4"
                                        style="background-image: url(<?php echo URL; ?>drinkPoint/images/person_3.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <p class="name">Vincent Grall</p>
                                    <span class="position">Calidad en el trabajo, la organización y las respuestas rápidas</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="text p-3">
                                    <p class="mb-4">Tu satisfacción es nuestro mayor objetivo. Calidad y amor en cada gota de vino.</p>
                                    <div class="user-img mb-4"
                                        style="background-image: url(<?php echo URL; ?>drinkPoint/images/person_4.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                    </div>
                                    <p class="name">Domaine Coirier</p>
                                    <span class="position">Proactivos 100%. Inspiran confianza con su trabajo y dedicación. </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE CONTACTO -->
    <section id="contact" class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 text-center heading-section mb-5 ftco-animate fadeInUp ftco-animated">
                    <span class="subheading">Contacto</span>
                    <h2 class="mb-4">Contactenos</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>DIRECCIÓN:</span> Poblado, Medellín Antioquia</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>TELÉFONO:</span> <a href="tel://1234567920">+57 3014874236</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>Correo:</span> <a href="mailto:info@yoursite.com"> info@drinkpoint.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="dbox">
                        <p><span>SITIO WEB:</span> <a href="#">www.drinkpoint.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-5 order-md-last">
                    <h2 class="h4 mb-5 font-weight-bold">Contactanos</h2>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="mapa"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4114972117086!2d-75.57026262588637!3d6.209331643778538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428299b5aa6d9%3A0x2020c055ff96b671!2sEl%20Poblado%2C%20Medell%C3%ADn%2C%20El%20Poblado%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1715037658373!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DEL FOOTER -->
    <footer class="ftco-footer ftco-no-pb ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">DrinkPoint</h2>
                        <p>Compra online vinos y licores exclusivos y recibe a domicilio en Medellín. Compra rápida, fácil y segura.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="https://www.twitter.com/" target= "_blank" ><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/" target= "_blank" ><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/" target= "_blank" ><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Horarios</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Lunes</span><span>9:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Mastes</span><span>9:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Miércoles</span><span>9:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Jueves</span><span>9:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Viernes</span><span>9:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Sábado</span><span>10:00am - 10:00pm</span></li>
                            <li class="d-flex"><span>Domingo</span><span> 10:00am - 10:00pm</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-88.jpg);">
                            </a>
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-2.jpg);">
                            </a>
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-1.jpg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/insta-4.jpg);">
                            </a>
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/insta-5.jpg);">
                            </a>
                            <a href="https://instagram.com" target= "_blank" class="thumb-menu img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-6.jpg);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Boletin informativo</h2>
                        <p>Recibe las mejores ofertas directamente en tu buzón</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Introducir correo electrónico">
                                <input type="submit" value="Suscribirse" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 bg-primary py-3">
            <div class="row no-gutters">
                <div class="col-md-12 text-center">

                    <p class="mb-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by: <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="<?php echo URL; ?>drinkPoint/js/jquery.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.stellar.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?php echo URL; ?>drinkPoint/js/google-map.js"></script>
    <script src="<?php echo URL; ?>drinkPoint/js/main.js"></script>

</body>

</html>