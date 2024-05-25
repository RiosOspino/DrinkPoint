<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo URL; ?>login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo URL; ?>login/css/style.css">

    <link rel="icon" href="<?php echo URL;?>gen/production/images/favicon.png" type="image/ico" />

    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">
    <script>const url="<?php echo URL;?>";</script>

</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section id="singnin" class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <?php if(isset($_POST['customerRegisted'])){ ?>
                        <div><h3 style="position: absolute; top: 70px; margin: 0 auto; text-align: center; width: 67%;">Usuario registrado exitosamente</h3></div>                    
                    <?php } ?>                    

                    <div class="signin-image">                        
                        <figure><img src="<?php echo URL; ?>login/images/sesion.webp" alt="sing up image"></figure>
                        <a href="#signup" class="signup-image-link">Crea una cuenta nueva</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Iniciar sesión</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="txtUser" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="txtPassword" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Recordar tu sesión</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btnLogin" id="signin" class="form-submit" value="Iniciar sesión "/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">inicia sesión con</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->    
    <script src="<?php echo URL; ?>login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL; ?>login/js/main.js"></script>

    <script src="<?php echo URL; ?>js/sweetalert2.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>