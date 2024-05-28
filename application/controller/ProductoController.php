<?php
    //crear la clase para heredar del controlador
    class productoController extends Controller{
        //atributo que va a ser el encargado de llamar el módelo necesario
        private $modeloP;
        // private $modeloC;

        //vamos a crear el constructor que llamará del modelo a la base de datos
        public function __construct(){
            //Instanciar los modelos necesarios
            $this->modeloP = $this->loadModel("mdlProducto");
            // $this->modeloC = $this->loadModel("mdlCategoria");
        }

        //Metodo para llamar al formulario de registro de usuario
        public function productRegister(){
            //Con un condicional para el formulario y modelo
            if(isset($_POST['btnRegister'])){
                //Comunicacion con el modelo y el formulario
                // $this->modelop->__SET('idProducto', $_POST['selDocType']);
                // $this->modelop->__SET('Nombre', $_POST['txtNames']);
                // $this->modelop->__SET('Descripcion', $_POST['txtDocument']);
                // $this->modelop->__SET('Precio', $_POST['txtNumber']);
                // $this->modelop->__SET('urlImage', $_POST['txtImagen']);
                // $this->modelop->__SET('idUsuario', $_POST['txtUser']);
                // $this->modelop->__SET('idCategoria', $_POST['txtCategoria']);

                // //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                // $person = $this->modeloP->registerPerson();

                // //Vamos a validar que registre a partir de la ultima persona registrada 
                // if($person == true){
                //     $ultimoId = $this->modeloP->lastIdPerson();

                //     //foreach que se encarga de tomar los datos explicitos 
                //     foreach($ultimoId as $value){
                //         $ultimoIdValue = $value['lastIdPerson'];
                //     }
                // }

                // //Aqui vamos a enviar los datos para el registro de el usuario
                // $this->modeloP->__SET('idPersona', $ultimoIdValue);
                // $this->modeloP->__SET('usuario', $_POST['txtUser']);
                // $this->modeloP->__SET('clave', $_POST['txtPassword']);
                // $this->modeloP->__SET('idRol', $_POST['selRol']);

                // //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                // $user = $this->modeloP->userRegister();

                // //sweetalert
                // if($person == true && $user == true){
                //     $_SESSION['alert'] = "Swal.fire({
                //         position:'',
                //         icon: 'success',
                //         title: 'Agregado',
                //         showConfirmButton: false,
                //         timer:2000})";

                //         header("Location: " . URL."productoController/getProduc");
                //         exit();
                // }else{
                //     $_SESSION['alert'] = "Swal.fire({
                //         position:'',
                //         icon: 'error',
                //         title: 'Error',
                //         showConfirmButton: false,
                //         timer:2000})";

                //         header("Location:" . URL."productoController/productRegister");
                //         exit();  
                // }

                // header("Location: " .URL."productoController/getUsers");
            }

            //Vamos a crear variables para hacer los llamados a los metodos a los diversos modelos (Traer los demas metodos necesarios)
            // $documentType = $this->modeloP->getTypeDocument();
            // $categorias = $this ->modeloC->getCategorias();

            require APP . 'view/_templates/header.php';
            require APP . 'view/productos/productRegister.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodos para ver los usuarios registrados y modificados
        public function getProducts(){

            //Vamos a tener el condicional para cuando sea el momento de editar los usuarios
            if(isset($_POST['btnUpdate'])){
                //Comunicacion con el modelo y el formulario
                // $this->modeloP->__SET('idProducto', $_POST['selCategory']);
                $this->modeloP->__SET('Nombre', $_POST['txtName']);
                $this->modeloP->__SET('Descripcion', $_POST['txtDescription']);
                $this->modeloP->__SET('Precio', $_POST['txtPrice']);
                $this->modeloP->__SET('urlImage', $_POST['txtImage']);
                // $this->modelop->__SET('idUsuario', $_POST['txtUser']);
                $this->modeloP->__SET('idCategoria', $_POST['txtCategory']);

                //Variable para el actualizar
                $update = $this->modeloP->updateUser();

                //Sweetalert
                if($update == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Modificado',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location: " . URL."productoController/getProduc");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location:" . URL."productoController/getProduc");
                        exit();  
                }
            }

            //Variables para llamar los metodos de los modelos
            $productos = $this->modeloP->getProductos();
            $categorias = $this->modeloC->getCategorias();
            // $documentType = $this->modeloP->getTypeDocument();

            //Para que funcione el metodo requiere los archivos visuales 
            require APP . 'view/_templates/header.php';
            require APP . 'view/usuarios/getUsers.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para traer el ID 
        public function userId(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloP->userId($_POST['id']);
            echo json_encode($dataUser);
        }

        //Metodo para cambiar el estado
        public function changeStatus(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloP->changeStatus($_POST['id']);
            echo 1;
        }

        //Metodo para eliminar el usuario
        public function deleteUser(){
            //Vamos a crear una variable para controlar el dato
            $dataUser = $this->modeloP->deleteUser($_POST['id']);
            echo 1;
        }
    }
?>