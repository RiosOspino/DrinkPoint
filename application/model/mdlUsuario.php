<?php
//heredar del modelo principal para nuestro caso mdlPersona
require_once("mdlPersona.php");

//heredamos clase
class mdlUsuario extends mdlPersona{
    //crear los atributos
    private $idUsuario;
    private $usuario;
    private $clave;
    private $idRol;
    private $estado;

    //crear el método para fijar los datos
    public function __SET($atributo,$valor){
        $this->$atributo = $valor;
    }

    //método para reclamar los datos cuando sean necesarios
    public function __GET($atributo){
        return $this->$atributo;
    }

    //método para validar el usuario
    public function validateUser(){
        //crear la variable de consulta
        $sql = "SELECT P.Documento, P.Nombres, P.Apellidos, U.idUsuario, U.Usuario, R.Descripcion FROM personas AS P 
        INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento
        INNER JOIN usuarios AS U ON P.idPersona = U.idPersona
        INNER JOIN roles AS R ON U.idRol = R.idRol WHERE U.Usuario = ? AND U.Clave = ? AND U.Estado = 1";

        //vamos a crear una variable que controlará todo el resultado
        $stm = $this->db->prepare($sql);
        $stm -> bindParam(1, $this->usuario);
        $stm -> bindParam(2, $this->clave);
        $stm->execute();

        //crear una variable para la respuesta de los datos
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;

    }
}
?>