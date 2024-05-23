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
        <!--/ Sing in  Form -->
    
        <!-- Sign up form -->
        <section id="singnup" style="display: none;">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Regístrate</h2>
                        <form method="POST" class="register-form" id="register-form">
                        
                            <div class="form-group">
                                <label for="Register_DocType"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <select class="form-control" name="Register_DocType" id="Register_DocType" required="required" >
                                    <option>Seleccionar tipo de documento</option>
                                    <?php foreach($documentTypes as $tipoDocumento):?>
                                        <option value="<?php echo $tipoDocumento['idTipoDocumento'];?>"><?php echo $tipoDocumento['doc'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div> 
                            
                            <div class="form-group">
                                <label for="Register_DocNum"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="number" name="Register_DocNum" id="Register_DocNum" placeholder="Ingresar número de documento" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="Register_Name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Register_Name" id="Register_Name" placeholder="Ingresa tu nombre" required="required"/>
                            </div>
                
                            <div class="form-group">
                                <label for="Register_Lastname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Register_Lastname" id="Register_Lastname" placeholder="Ingresar tu apellido" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="Register_Email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Register_Email" id="Register_Email" placeholder="Ingresar tu correo electronico" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="Register_Phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="Register_Phone" id="Register_Phone" placeholder="Ingresar tu numero" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="Register_Address"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="Register_Address" id="Register_Address" placeholder="Ingresar tu dirrecion" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="Register_Gender"><i class="zmdi zmdi-male-female"></i></label>
                                <select class="form-control" name="Register_Gender" id="Register_Gender" required="required" >
                                    <option value="">Selecionar genero</option>
                                    <option value="female">Mujer</option>
                                    <option value="male">Hombre</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Register_Birthdate"><i class="zmdi zmdi-calendar"></i></label>
                                <input id="Register_Birthdate" name="Register_Birthdate" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
										input.type = 'text';
									}, 60000);
								}
							</script>
                            </div>

                            <div class="form-group">
                                <label for="Register_UserName"><i class="zmdi zmdi-account-circle"></i></label>
                                <input type="text" name="Register_UserName" id="Register_UserName" placeholder="Escribe tu nombre de usuario" required="required"/>
                            </div>

                            <div class="form-group">
                                <label for="Register_Password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Register_Password" id="Register_Password" placeholder="Escriba una contraseña" required="required"/>
                            </div>
                            
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Estoy de acuerdo con todas las declaraciones en <a href="#" class="term-service">Términos de servicio</a></label>
                            </div> -->

                            <div class="form-group form-button">
                                <input type="submit" name="btnSignup" id="signup" class="form-submit" value="Regístrate"/>
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
    </div>

    <!-- JS -->    
    <script src="<?php echo URL; ?>login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL; ?>login/js/main.js"></script>

    <script src="<?php echo URL; ?>js/sweetalert2.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>