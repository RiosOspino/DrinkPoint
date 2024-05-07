<?php
    //crear la clase para heredar del controlador
    class usuarioController extends Controller{
        //atributos normalmente suelen ser en este caso una variable para llamar los modelos

        private $modeloU;

        //vamos a crear el constructor
        public function __construct(){
            //instanciar los modelos necesarios
            $this->modeloU = $this->loadModel("mdlUsuario");
        }

        //vamos a crear un método para iniciar sesión 
        public function login(){
            //controlar los errores
            $error = false;
            //vamos a validar la comunicación con el modelo usuario y el formulario
            if(isset($_POST['btnLogin'])){
                $this->modeloU->__SET('usuario',$_POST['txtUser']);
                $this->modeloU->__SET('clave',$_POST['txtPassword']);

                //lo anterior pasa a un arreglo vacío
                $_POST=[];

                //con variable vamos a llamar el método del modelo que nos permite validar los datos
                $validate = $this->modeloU->validateUser();

                //vamos a revisar esa validación
                if($validate == true){
                    $_SESSION['SESSION_START'] = true;
                    $error = false;

                    //vamos a configurar  superglobales para los atributos de la sesión
                    $_SESSION['Nombres'] = $validate['Nombres'];
                    $_SESSION['idUsuario'] = $validate['idUsuario'];
                    $_SESSION['Apellidos'] = $validate['Apellidos'];
                    $_SESSION['Documento'] = $validate['Documento'];
                    $_SESSION['Usuario'] = $validate['Usuario'];
                    $_SESSION['Descripcion'] = $validate['Descripcion'];

                    //después de la validación que me dirija a un admin
                    header("Location:" . URL . "usuarioController/main");
                }else{
                    $error = true;
                }
            }
            require APP . 'view/usuarios/login.php';
        }
    }
?>