<?php
    //Crear la clase para heredar del controlador
    class usuarioController extends Controller{
        //Crear los atributos. normalmente suelen ser en este caso una variable para llamar los modelos

        private $modeloU;

        //Vamos a crear el constructor 
        public function __construct(){
            //Instanciar los modelos necesarios
            $this->modeloU = $this->loadModel("mdlUsuario");
        } 

        //Vamos a crear un metodo para iniciar la sesion
        public function login()
    {
        // load views
        require APP . 'view/usuarios/login.php';
    }
    }



?>