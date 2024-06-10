<?php
    //crear la clase para heredar del controlador
    class productoController extends Controller{
        //atributo que va a ser el encargado de llamar el módelo necesario
        private $modeloP;
        private $modeloC;

        //vamos a crear el constructor que llamará del modelo a la base de datos
        public function __construct(){
            //Instanciar los modelos necesarios
            $this->modeloP = $this->loadModel("mdlProducto");
            $this->modeloC = $this->loadModel("mdlCategoria");
        }

        //Metodo para llamar al formulario de registro de usuario
        public function productRegister(){
            //Con un condicional para el formulario y modelo
            if(isset($_POST['btnRegister'])){
                //Comunicacion con el modelo y el formulario
                $this->modeloP->__SET('Nombre', $_POST['txtName']);
                $this->modeloP->__SET('Descripcion', $_POST['txtDescription']);
                $this->modeloP->__SET('Precio', $_POST['txtPrice']);
                // $this->modeloP->__SET('urlImage', $_POST['txtImage']);
                if($_FILES['txtImage']['tmp_name'] !=null){
                    $this->modeloP->__SET("Imagen", file_get_contents($_FILES['txtImage']["tmp_name"]));
                }
                $this->modeloP->__SET('idUsuario', $_SESSION['idUsuario']);
                $this->modeloP->__SET('idCategoria', $_POST['selCategory']);

                //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                $product = $this->modeloP->registerProduct();

                //sweetalert
                if($product == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Agregado',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location: " . URL."productoController/getProduct");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location:" . URL."productoController/productRegister");
                        exit();  
                }

                header("Location: " .URL."productoController/getProduct");
            }

            //Vamos a crear variables para hacer los llamados a los metodos a los diversos modelos (Traer los demas metodos necesarios)
            $categorias = $this ->modeloC->getCategory();

            require APP . 'view/_templates/header.php';
            require APP . 'view/productos/productRegister.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodos para ver los productos registrados y modificados
        public function getProduct(){

            //Vamos a tener el condicional para cuando sea el momento de editar los productos
            if(isset($_POST['btnUpdate'])){
                //Comunicacion con el modelo y el formulario
                $this->modeloP->__SET('idProducto', $_POST['txtIdProducto']);
                $this->modeloP->__SET('Nombre', $_POST['txtName']);
                $this->modeloP->__SET('Descripcion', $_POST['txtDescription']);
                $this->modeloP->__SET('Precio', $_POST['txtPrice']);
                $this->modeloP->__SET('idCategoria', $_POST['selCategory']);

                //Variable para el actualizar
                $update = $this->modeloP->updateProduct();

                //Sweetalert
                if($update == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Modificado',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location: " . URL."ProductoController/getProduct");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location:" . URL."ProductoController/getProduct");
                        exit();  
                }
            }

            //Variables para llamar los metodos de los modelos
            $productos = $this->modeloP->getProduct();
            $categorias = $this ->modeloC->getCategory();

            //Para que funcione el metodo requiere los archivos visuales 
            require APP . 'view/_templates/header.php';
            require APP . 'view/productos/getProduct.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para traer el ID 
        public function getProductByID(){
            //Vamos a crear una variable para controlar el dato
            $dataProduct = $this->modeloP->getProductByID($_POST['id']);
            $dataProduct['Imagen'] = $dataProduct['Imagen'] ? base64_encode($dataProduct['Imagen']) : "";

            echo json_encode($dataProduct);
        }

        //Metodo para cambiar el estado
        public function changeStatus(){
            //Vamos a crear una variable para controlar el dato
            $dataProduct = $this->modeloP->changeStatus($_POST['id']);
            echo 1;
        }

        //Metodo para eliminar el usuario
        public function deleteProduct(){
            //Vamos a crear una variable para controlar el dato
            $dataProduct = $this->modeloP->deleteProduct($_POST['id']);
            echo 1;
        }
    }
?>