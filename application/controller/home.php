<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    public $modeloP;
    public $modeloC;
    
    public function __construct(){
        $this->modeloP = $this->loadModel('mdlProducto');
        $this->modeloC = $this->loadModel('mdlCategoria');
    }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        if (isset($_GET['idCategoria'])) {
            // Consulta los productos por categoría 
            $products =  $this->modeloP->getProductsByCategory($_GET['idCategoria']);
        } else {
            // Consulta todos los productos
            $products =  $this->modeloP->getProduct();
        }
        
        // Consulta categorias
        $categories =  $this->modeloC->getCategory();

        $url_publica = URL;
        
        // load views
        require APP . 'view/home/index.php';
    }

}
