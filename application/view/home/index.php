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
                    <li class="nav-item"><a href="<?php echo URL; ?>usuarioController/login" class="nav-link">Login</a></li>
                    
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

    <!-- SECCION DE LOS PRODUCTOS -->
    <!-- <section id="products" class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Breakfast</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/breakfast-1.jpg);">
                            </div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/breakfast-2.jpg);">
                            </div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/breakfast-3.jpg);">
                            </div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-bread" style="left: 0;"></span>
                        <span class="flat flaticon-breakfast" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Lunch</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/lunch-1.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/lunch-2.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/lunch-3.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-pizza" style="left: 0;"></span>
                        <span class="flat flaticon-chicken" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Dinner</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dinner-1.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dinner-2.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dinner-3.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-omelette" style="left: 0;"></span>
                        <span class="flat flaticon-burger" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Desserts</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dessert-1.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dessert-2.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/dessert-3.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-cupcake" style="left: 0;"></span>
                        <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Wine Card</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-1.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-2.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/wine-3.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-wine" style="left: 0;"></span>
                        <span class="flat flaticon-wine-1" style="right: 0;"></span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>Drinks &amp; Tea</h3>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/drink-1.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/drink-2.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <div class="menus border-bottom-0 d-flex ftco-animate">
                            <div class="menu-img img"
                                style="background-image: url(<?php echo URL; ?>drinkPoint/images/drink-3.jpg);"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>Beef Roast Source</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">$29</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                        <span class="flat flaticon-wine" style="left: 0;"></span>
                        <span class="flat flaticon-wine-1" style="right: 0;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

     <!-- SECCION PRODUCTOS -->
    <section id="products" class="food_section layout_padding-bottom py-5">
    <div class="container">

      <div class="col-md-12 text-center heading-section mb-5 ftco-animate fadeInUp ftco-animated">
            <span class="subheading">Carta</span>
            <h2 class="mb-4">Todos los productos</h2>
        </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Todos</li>
        <li data-filter=".burger">Vino Tinto</li>
        <li data-filter=".pizza">Vino Blanco</li>
        <li data-filter=".pasta">Vino Rosado</li>
        <li data-filter=".fries">Vino Espumoso</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo URL; ?>public/img/p1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Black Label Malbec
                  </h5>
                  <p>
                  Color tinta oscuro, notas especiadas y picantes con frutas maduras en nariz. Sigue la nariz con cocos, vainilla y especias. Elegante buena longitud.
                  </p>
                  <div class="options">
                    <h6>
                      $84.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo URL; ?>public/img/p2.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Riscal Verdejo
                  </h5>
                  <p>
                  Un vino de color amarillo pajizo brillante. En nariz tiene una intensidad aromática alta con frutas tropicales.En general es un vino fresco y equilibrado.
                  </p>
                  <div class="options">
                    <h6>
                      $75.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo URL; ?>public/img/p3.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Montes Cherub
                  </h5>
                  <p>
                  Un vino rosado elegante.Este vino seductor es fresco y bien equilibrado. Muestra riqueza en textura en todo el paladar que conduce a un final deliciosamente largo.
                  </p>
                  <div class="options">
                    <h6>
                      $82.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo URL; ?>public/img/p4.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Chandon Rose
                  </h5>
                  <p>
                  Deliciosos frutos rojos y notas cítricas, se entrelazan frescas y notorias pieles de durazno. Un vino muy suave y amigable en boca y un clásico para cualquier ocasión.
                  <div class="options">
                    <h6>
                      $76.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all fries">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo URL; ?>public/img/p5.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Mionetto Brut
                  </h5>
                  <p>
                  El vino Prosecco Mionetto Brut es un espumoso italiano. El tipo de uva es Glera 100%. ¡Disfruta de un espumoso en tus celebraciones!
                  </p>
                  <div class="options">
                    <h6>
                      $68.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo URL; ?>public/img/p2.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  Montes Alpha
                  </h5>
                  <p>
                  De color rojo rubí profundo, la expresión del cabernet sauvignon es evidente aportando estructura y elegancia. Muchas frutas del bosque y toques de tabaco y vainilla.
                  </p>
                  <div class="options">
                    <h6>
                      $115.000
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
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

    <!-- SECCION DE CHEF -->
    <!-- <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Chef</span>
					<h2 class="mb-4">Our Master Chef</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo URL; ?>drinkPoint/images/chef-4.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>John Gustavo</h3>
							<span class="position mb-2">CEO, Co Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo URL; ?>drinkPoint/images/chef-2.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Michelle Fraulen</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo URL; ?>drinkPoint/images/chef-3.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Alfred Smith</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo URL; ?>drinkPoint/images/chef-1.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Antonio Santibanez</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

    <!-- SECCION NUESTRO INGREDIENTE SECRETO -->
    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(<?php echo URL; ?>drinkPoint/images/bg_6.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url(<?php echo URL; ?>drinkPoint/images/bg_4.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">This is our secrets</span>
						<h2 class="mb-4">Perfect Ingredients</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

    <!-- SECCION DEL BLOG -->
    <!-- <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Blog</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo URL; ?>drinkPoint/images/image_1.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo URL; ?>drinkPoint/images/image_2.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('<?php echo URL; ?>drinkPoint/images/image_3.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

    <!-- SECCION DE LLAMADO A LA ACCION DE RESERVACION -->
    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
				</div>
			</div>
		</div>
	</section> -->

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
                    <!-- <div id="map"></div> -->
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