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

    //Metodo para  registrar los usuarios
    public function userRegister(){
        //Vamos a crear la consulta
        $sql = "INSERT INTO usuarios(idPersona, Usuario, Clave, idRol, Estado) VALUES (?,?,?,?,?)";
        
        //Vamos a crear una variable para mandaar el estado activo por defecto
        $estado = 1;

        //Vamos a enviar los parametros a la base de datos
        $stm = $this->db->prepare($sql);

        $stm->bindParam(1, $this->idPersona);
        $stm->bindParam(2, $this->usuario);
        $stm->bindParam(3, $this->clave);
        $stm->bindParam(4, $this->idRol);
        $stm->bindParam(5, $estado);

        //Respuesta
        $result = $stm->execute();
        return $result;
    }

    //Metodo para obtener los datos de usuarios
    public function getUsers(){
        //Consulta
        $sql = "SELECT P.*, U.idUsuario, U.Usuario, U.Estado, R.Descripcion AS rol, TD.Descripcion AS tipoDoc FROM personas AS P INNER JOIN usuarios AS U ON P.idPersona = U.idPersona INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento";

        //Vamos a preparar la consulta y ejecutarla
        $stm = $this->db->prepare($sql);
        $stm->execute();
        //Vamos a crear la variable para retornar los datos
        $user = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    //Metodo para filtrar, tomar,edita, eliminar y reclamar el ID de los usuarios 
    public function userId($id){
        //Consulta
        $sql = "SELECT P.*, U.*, R.idRol, R.Descripcion AS rol, TD.Descripcion AS tipoDOc FROM personas AS P INNER JOIN usuarios AS U ON P.idPersona = U.idPersona INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN tiposDocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento WHERE U.idUsuario = ?";

        //Preparacion y ejecucion de la consulta
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //Metodo para cambiar estados
    public function changeStatus($id){
        //Consulta
        $sql = "UPDATE usuarios SET Estado =(CASE WHEN Estado = 1 THEN 0 ELSE 1 END) WHERE idUsuario = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

    //Metodo para eliminar el usuario
    public function deleteUser($id){
        //Consulta
        $sql = "DELETE U, P FROM usuarios AS U INNER JOIN personas AS P WHERE P.idPersona = U.idPersona AND U.idUsuario = ?; 
        ALTER TABLE usuarios AUTO_INCREMENT = 1; 
        ALTER TABLE usuarios AUTO_INCREMENT = 1"; 


        // $refrehId = "ALTER TABLE usuarios AUTO_INCREMENT = 1";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

}
?>