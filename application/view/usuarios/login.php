<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo URL; ?>login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo URL; ?>login/css/style.css">
</head>
<body>

    <div class="main">

            <!-- Sing in  Form -->
            <section id="singnin" class="sign-in">
            <div class="container">
                <div class="signin-content">
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

    </div>

        <!-- Sign up form -->
        <section id="signup" class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Regístrate Gratis</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Escribe tu usuario"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Escribe tu Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Escribe de nuevo tu contraseña"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Estoy de acuerdo con todas las declaraciones en <a href="#" class="term-service">Términos de servicio</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Regístrate"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                    <figure><img src=" <?php echo URL; ?>login/images/JAMEL_16e44d6b-1475-45b4-a474-aff7163fa283.webp" alt="sing up image"></figure>
                    <a href="#singnin" class="signup-image-link">Ya soy miembro</a>
                    </div>
                </div>
            </div>
        </section>



    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>