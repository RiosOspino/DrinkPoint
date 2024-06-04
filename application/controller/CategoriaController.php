<?php
    //crear la clase para heredar del controlador
    class categoriaController extends Controller{
        //atributo que va a ser el encargado de llamar el módelo necesario
        private $modeloC;
        // private $modeloP;

        //vamos a crear el constructor que llamará del modelo a la base de datos
        public function __construct(){
            //Instanciar los modelos necesarios
            $this->modeloC = $this->loadModel("mdlCategoria");
            // $this->modeloP = $this->loadModel("mdlProducto");
        }

        //Metodo para llamar al formulario de registro de usuario
        public function categoryRegister(){
            //Con un condicional para el formulario y modelo
            if(isset($_POST['btnRegister'])){
                //Comunicacion con el modelo y el formulario
                // $this->modeloC->__SET('idCategoria', $_POST['txtNumber']);
                $this->modeloC->__SET('Nombre', $_POST['txtName']);

                
                //Vamos a crear una variable que llamara al metodo del modelo para poder registrar los datos
                $category = $this->modeloC->registerCategory();

                //sweetalert
                if($category == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Agregado',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location: " . URL."CategoriaController/getCategory");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location:" . URL."categoriaController/categoryRegister");
                        exit();  
                }

                header("Location: " .URL."categoriaController/getCategory");
            }

            //Vamos a crear variables para hacer los llamados a los metodos a los diversos modelos (Traer los demas metodos necesarios)
            // $documentType = $this->modeloP->getTypeDocument();
            // $categorias = $this ->modeloC->getCategorias();

            require APP . 'view/_templates/header.php';
            require APP . 'view/categorias/categoryRegister.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodos para ver los productos registrados y modificados
        public function getCategory(){

            //Vamos a tener el condicional para cuando sea el momento de editar los productos
            if(isset($_POST['btnUpdate'])){
                //Comunicacion con el modelo y el formulario
                $this->modeloC->__SET('idCategoria', $_POST['txtIdCategory']);
                $this->modeloC->__SET('Nombre', $_POST['txtName']);

                //Variable para el actualizar
                $update = $this->modeloC->updateCategory();

                //Sweetalert
                if($update == true){
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'success',
                        title: 'Modificado',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location: " . URL."CategoriaController/getCategory");
                        exit();
                }else{
                    $_SESSION['alert'] = "Swal.fire({
                        position:'',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer:2000})";

                        header("Location:" . URL."CategoriaController/getCategory");
                        exit();  
                }
            }

            //Variables para llamar los metodos de los modelos
            $Categorias = $this->modeloC->getCategory();
            // $categorias = $this->modeloC->getCategorias();
            // $documentType = $this->modeloP->getTypeDocument();

            //Para que funcione el metodo requiere los archivos visuales 
            require APP . 'view/_templates/header.php';
            require APP . 'view/categorias/getCategory.php';
            require APP . 'view/_templates/footer.php';
        }

        //Metodo para traer el ID 
        public function getCategoryByID(){
            //Vamos a crear una variable para controlar el dato
            $dataCategory = $this->modeloC->getCategoryByID($_POST['id']);
            echo json_encode($dataCategory);
        }

        //Metodo para cambiar el estado
        public function changeStatus(){
            //Vamos a crear una variable para controlar el dato
            $dataCategory = $this->modeloC->changeStatus($_POST['id']);
            echo 1;
        }

        //Metodo para eliminar el usuario
        public function deleteCategory(){
            //Vamos a crear una variable para controlar el dato
            $dataCategory = $this->modeloC->deleteCategory($_POST['id']);
            echo 1;
        }
    }
?>