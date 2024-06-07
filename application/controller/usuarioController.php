<?php
    //crear la clase para heredar del controlador
    class usuarioController extends Controller{
        //atributo que va a ser el encargado de llamar el módelo necesario
        private $modeloU;
        private $modeloR;

        //vamos a crear el constructor que llamará del modelo a la base de datos
        public function __construct(){
            //Instanciar los modelos necesarios
            $this->modeloU = $this->loadModel("mdlUsuario");
            $this->modeloR = $this->loadModel("mdlRoles");
        }

        //vamos a crear un método para iniciar sesión 
        public function login(){
            //Capturar cualquier tipo de error
            $error = false;

            //vamos a validar los datos que vengan del formulario de Login
            if(isset($_POST['btnLogin'])){
        
                $this->modeloU->__SET('usuario',$_POST['txtUser']);
                $this->modeloU->__SET('clave',$_POST['txtPassword']);

                //lo anterior pasa a un arreglo vacío (Lo guardamos en un arreglo vacio)
                $_POST=[];

                //con una variable vamos a llamar el método del modelo que nos permite validar los datos
                $validate = $this->modeloU->validateUser();

                //vamos a revisar esa validación
                if($validate == true){
                    // Guardar datos usuario en la sesión
                    $_SESSION['SESSION_START'] = true;

                    //La variable $error sigue en false porque aun no ha capturado ningun error
                    $error = false;

                    //Vamos a configurar  superglobales para los atributos de la sesión
                    //Comunicamos formulario y modelo
                    $_SESSION['Nombres'] = $validate['Nombres'];
                    $_SESSION['idUsuario'] = $validate['idUsuario'];
                    $_SESSION['Apellidos'] = $validate['Apellidos'];
                    $_SESSION['Documento'] = $validate['Documento'];
                    $_SESSION['Usuario'] = $validate['Usuario'];
                    $_SESSION['Descripcion'] = $validate['Descripcion'];
                    $_SESSION['idRol'] = $validate['idRol'];

                    // SI es admin, ingrese al dashboard
                    if ($validate['idRol'] === 1) {
                        //después de la validación lo dirije al main
                        header("Location:" . URL . "usuarioController/main");
                    }

                    // SI es asistente, ingrese a gestionar tienda                    
                    if ($validate['idRol'] === 2) {
                        //después de la validación lo dirije a los productos
                        header("Location:" . URL . "usuarioController/userRegister");
                    }
                    
                    // SI es cliente, redireccionar al home para que pueda comprar
                    if ($validate['idRol'] === 3) {
                        //después de la validación que me dirija a los productos
                        header("Location:" . URL . "/#products");
                    }

                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error al iniciar sesión',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location:" . URL."usuarioController/login");
                        exit(); 
                }
            }
            
            //vamos a validar los datos que vengan del formulario de registrar cliente
            if(isset($_POST['btnSignup'])){
                // Obtener datos desde el formulario de Registrar cliente
                $this->modeloU->__SET('idTipoDocumento', $_POST['Register_DocType']);
                $this->modeloU->__SET('documento', $_POST['Register_DocNum']);
                $this->modeloU->__SET('nombres', $_POST['Register_Name']);
                $this->modeloU->__SET('apellidos', $_POST['Register_Lastname']);
                $this->modeloU->__SET('email', $_POST['Register_Email']);
                $this->modeloU->__SET('telefono', $_POST['Register_Phone']);
                $this->modeloU->__SET('direccion', $_POST['Register_Address']);
                $this->modeloU->__SET('genero', $_POST['Register_Gender']);
                $this->modeloU->__SET('fechaNacimiento', $_POST['Register_Birthdate']);

                // Registrar datos del cliente en Personas
                $person = $this->modeloU->registerPerson();

                // Validar si se creó correctamente la persona                  
                if($person == true) {
                    // Obtener el ID de la persona recién creada
                    $ultimoId = $this->modeloU->lastIdPerson();

                    //foreach que se encarga de tomar los datos explicitos 
                    foreach($ultimoId as $value){
                        $ultimoIdValue = $value['lastIdPerson'];
                    }
                }

                // Obtener y asignar datos del cliente
                $this->modeloU->__SET('idPersona', $ultimoIdValue);
                $this->modeloU->__SET('usuario', $_POST['Register_UserName']);
                $this->modeloU->__SET('clave', $_POST['Register_Password']);
                $this->modeloU->__SET('idRol', 3);

                // Guardar datos del cliente en Usuario
                $user = $this->modeloU->userRegister();

                // Validar si se registro exitosamente el cliente
                if($person == true && $user == true) {
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Registrado',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location: " . URL."usuarioController/login");
                        exit();
                } else {
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location:" . URL."usuarioController/login");
                        exit();  
                }
            }

            // Obtener tipos de documentos
            $documentTypes = $this->modeloU->getTypeDocument();

            // Load view
            require APP . 'view/usuarios/login.php';
        }

        //Metodo para cargar el admin
        public function main(){
            require APP . 'view/_templates/header.php';
            require APP . 'view/main.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para cerrar sesion
        public function logOut(){
            //Validamos que hallan sesiones iniciadas
            if (isset($_SESSION['SESSION_START'])){
                session_destroy();
            }

            header("Location:" . URL);
            exit();
        }

        //Metodo para llamar al formulario de registro de usuario
        public function userRegister(){
            //Con un condicional para el formulario y modelo
            if(isset($_POST['btnRegister'])){
                //Comunicacion con el modelo y el formulario
                $this->modeloU->__SET('idTipoDocumento', $_POST['selDocType']);
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

                //sweetalert
                if($person == true && $user == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Registrado',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location: " . URL."usuarioController/getUsers");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location:" . URL."usuarioController/userRegister");
                        exit();  
                }

                header("Location: " .URL."usuarioController/getUsers");
            }

            //Vamos a crear variables para hacer los llamados a los metodos a los diversos modelos (Traer los demas metodos necesarios)
            $documentType = $this->modeloU->getTypeDocument();
            $roles = $this ->modeloR->getRoles();

            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/userRegister.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodos para ver los usuarios registrados y modificados
        public function getUsers(){

            //Vamos a tener el condicional para cuando sea el momento de editar los usuarios
            if(isset($_POST['btnUpdate'])){
                //Comunicacion con el modelo y el formulario
                $this->modeloU->__SET('idTipoDocumento', $_POST['selDocType']);
                $this->modeloU->__SET('idUsuario', $_POST['txtIdUser']);
                $this->modeloU->__SET('documento', $_POST['txtDocument']);
                $this->modeloU->__SET('nombres', $_POST['txtNames']);
                $this->modeloU->__SET('apellidos', $_POST['txtLastname']);
                $this->modeloU->__SET('telefono', $_POST['txtPhone']);
                $this->modeloU->__SET('direccion', $_POST['txtAddress']);
                $this->modeloU->__SET('email', $_POST['txtEmail']);
                $this->modeloU->__SET('usuario', $_POST['txtUser']);
                $this->modeloU->__SET('clave', $_POST['txtPassword']);

                //Variable para el actualizar
                $update = $this->modeloU->updateUser();

                //Sweetalert
                if($update == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Modificado',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location: " . URL."usuarioController/getUsers");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:3000})";

                        header("Location:" . URL."usuarioController/getUsers");
                        exit();  
                }
            }

            //Validamos si existe un envío o post de busqueda con una condicion
            if(isset($_POST['usersFilter']) && $_POST['FilterRol'] ){
                // Obtiene lista de usuarios filtrados por rol
                $users = $this->modeloU->getUsersByRol( $_POST['FilterRol'] );
            }else{
                // Consulta todos los usuarios
                $users = $this->modeloU->getUsers();
            }

            // Obtener lista de roles
            $roles = $this->modeloR->getRoles();

            // Obtener tipos de documentos
            $documentType = $this->modeloU->getTypeDocument();

            //Para que funcione el metodo requiere los archivos visuales 
            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/getUsers.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para traer el ID 
        public function userId(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloU->userId($_POST['id']);
            echo json_encode($dataUser);
        }

        //Metodo para cambiar el estado
        public function changeStatus(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloU->changeStatus($_POST['id']);
            echo 1;
        }

        //Metodo para eliminar el usuario
        public function deleteUser(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloU->deleteUser($_POST['id']);
            echo 1;
        }
    }
?>