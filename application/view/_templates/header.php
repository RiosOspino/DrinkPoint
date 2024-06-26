<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo URL;?>gen/production/images/favicon.png" type="image/ico" />

    <title>DrinkPoint</title>

    <!-- Bootstrap -->
    <link href="<?php echo URL;?>gen/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo URL;?>gen/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo URL;?>gen/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo URL;?>gen/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo URL;?>gen/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo URL;?>gen/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo URL;?>gen/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo URL;?>gen/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>gen/build/css/estilos_admin.css" rel="stylesheet">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">
    <script>const url="<?php echo URL;?>";</script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-glass"></i> <span> DrinkPoint </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo URL;?>gen/production/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hola,</span>
                <h2><?php echo $_SESSION['Nombres'] . ' ' . $_SESSION['Apellidos'] ; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <?php 
                      if ( isset( $_SESSION['idRol'] ) ) {
                        if ( $_SESSION['idRol'] == 1 ) {
                          # Mostrar Cerrar sesión
                          echo '<li><a><i class="fa fa-users"></i>USUARIOS <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="' . URL . 'usuarioController/userRegister">Registrar Usuarios</a></li>
                              <li><a href="' . URL . 'usuarioController/getUsers">Ver Usuarios</a></li>
                            </ul>
                          </li>';
                        }
                      }                  
                  ?>

                  <li><a><i class="fa fa-users"></i>PRODUCTOS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>ProductoController/productRegister">Registrar Productos</a></li>
                      <li><a href="<?php echo URL; ?>ProductoController/getProduct">Ver Productos</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-list"></i>CATEGORÍAS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>CategoriaController/categoryRegister">Registrar Categorías</a></li>
                      <li><a href="<?php echo URL; ?>CategoriaController/getCategory">Ver Categorías</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Cerrar sesión" href="<?php echo URL;?>usuarioController/logOut">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo URL;?>gen/production/images/user.png" alt=""><?php echo $_SESSION['Nombres'] . ' ' . $_SESSION['Apellidos'] ; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>Ajustes</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Ayuda</a>
                    <a class="dropdown-item"  href="<?php echo URL;?>usuarioController/logOut"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión </a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <!-- <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"></span>
                  </a> -->
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo URL;?>gen/production/images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $_SESSION['Nombres']; ?></span>
                          <span class="time">1 min</span>
                        </span>
                        <span class="message">
                          Has iniciado sesión 
                        </span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo URL;?>gen/production/images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $_SESSION['Nombres']; ?></span>
                          <span class="time">3 min</span>
                        </span>
                        <span class="message">
                        Has iniciado sesión 
                        </span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo URL;?>gen/production/images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $_SESSION['Nombres']; ?></span>
                          <span class="time">5 min </span>
                        </span>
                        <span class="message">
                        Has iniciado sesión 
                        </span>
                      </a>
                    </li>
                  
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>Ver todas las alertas</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">