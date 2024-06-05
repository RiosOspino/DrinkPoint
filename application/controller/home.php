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
    public function __construct(){
        $this->modeloP = $this->loadModel('mdlProducto');
    }
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        $products =  $this->modeloP->getProduct();
        require APP . 'view/home/index.php';
    }

}
