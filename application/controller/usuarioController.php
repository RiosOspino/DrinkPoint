<?php
    //crear la clase para heredar del controlador
    class usuarioController extends Controller{
        //atributos normalmente suelen ser en este caso una variable para llamar los modelos

        private $modeloU;
        private $modeloR;

        //vamos a crear el constructor
        public function __construct(){
            //instanciar los modelos necesarios
            $this->modeloU = $this->loadModel("mdlUsuario");
            $this->modeloR = $this->loadModel("mdlRoles");
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

        public function main(){
            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/main.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para cerrar sesion
        public function logOut(){
            //Validamos que hallan sesiones iniciadas
            if (isset($_SESSION['SESSION_START'])){
                session_destroy();
            }
            header("Location:".URL."home/index");
            exit();
        }

        //Metodo para llamar al formulario de registro de usuario
        public function userRegister(){
            //Con un condicional para el formulario y modelo
            if(isset($_POST['btnRegister'])){
                 //Comunicacion modelo y formulario
                $this->modeloU->__SET('idTipoDocumento',$_POST['selDocType']);
                $this->modeloU->__SET('documento', $_POST['txtDocument']);
                $this->modeloU->__SET('nombres', $_POST['txtNames']);
                $this->modeloU->__SET('apellidos', $_POST['txtLastname']);
                $this->modeloU->__SET('fechaNacimiento', $_POST['txtBirthdate']);
                $this->modeloU->__SET('telefono', $_POST['txtPhone']);
                $this->modeloU->__SET('direccion', $_POST['txtAddress']);
                $this->modeloU->__SET('email', $_POST['txtEmail']);
                $this->modeloU->__SET('genero', $_POST['selGender']);

                //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                $person = $this->modeloU->registerPerson();

                //Vamos a validar que registre a partir de la ultima persona registrada 
                if($person == true){
                    $ultimoId = $this->modeloU->lastIdPerson();

                    //foreach que se encarga de tomar los datos explicitos 
                    foreach($ultimoId as $value){
                        $ultimoIdValue = $value['lastIdPerson'];
                    }
                }

            //Aqui vamos a enviar los datos para el registro de el usuario
            $this->modeloU->__SET('idPersona', $ultimoIdValue);
            $this->modeloU->__SET('usuario', $_POST['txtUser']);
            $this->modeloU->__SET('clave', $_POST['txtPassword']);
            $this->modeloU->__SET('idRol', $_POST['selRol']);

                //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                $user = $this->modeloU->userRegister();

                header("Location: " .URL."usuarioController/getUsers");
            }

            //Vamos a crear variables para hacer los llamados a los metodos a los diversos modelos
            $documentType = $this->modeloU->getTypeDocument();
            $roles = $this ->modeloR->getRoles();

            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/userRegister.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodos para ver los usuarios registrados y modificados
        public function getUsers(){
            //Variables para llamar los metodos de los modelos
            $users = $this->modeloU->getUsers();
            $roles = $this->modeloR->getRoles();
            $documentType = $this->modeloU->getTypeDocument();
            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/getUsers.php';
            require APP . 'view/_templates/footer.php';
        }
    }
    
?>