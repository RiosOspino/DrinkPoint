<?php
//Heredar del modelo principal para nuestro caso mdlPersona

require_once("mdlPersona.php");

//Heredamos la clase
class mdlUsuario extends mdlPersona{
    //Crear los atributos
    private $idUsuario;
    private $usuario;
    private $clave;
    private $idRol;
    private $estado;

    //Crear el metodo para fijar los datos
    public function _SET($atributo,$valor){
        $this-> $atributo =$valor;
    }

    //Metodo para reclamar los datos cuando sea necesario
    public function _GET($atributo){
        return $this-> $atributo;
    }

    //Metodo para validar el usuario
    public function valideUser(){
        //Crear la variable de consulta
        $sql = "SELECT P.Documento, P.Nombres, P.Apellidos, U.idUsuario, U.Usuario, R.Descripcion FROM personas AS P INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento INNER JOIN usuarios AS U ON P.idPersona = U.idPersona INNER JOIN roles AS R ON U.idRol = R.idRol WHERE U.Usuario = ? AND U.Clave = ? AND u.Estado = 1";

        //Vamos a crear una variable que controlara todo el resultado
        $stm = $this->db->prepare($sql);
        $stm-> bindParam(1, $this->usuario);
        $stm-> bindParam(2, $this->clave);
        $stm->execute();

        //Crear una variable para la respuesta de los datos
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}
?>