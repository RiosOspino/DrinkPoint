<?php
//Vamos a crear la clase de este modelo, por lo general, se le da como nombre el mismo del archivo  (mdlProducto)

//heredamos clase
class mdlCategoria {
    //crear los atributos
    private $Nombre;
    // private $idCategoria;

    //crear el método para fijar los datos
    public function __SET($atributo, $valor){
        $this->$atributo = $valor;
    }

    //método para reclamar los datos cuando sean necesarios
    public function __GET($atributo){
        return $this->$atributo;
    }

    //crear la conexión a la db
    public function __construct($db){
        //intentar conectar
        try{
            $this->db = $db;
        }catch(PDOException $e){ //e: exception que si muestra un error dirige automaticamente el msj de exit
            exit("Error al conectar a la base de datos");
        }
    }

    //crear el método para registrar las categorias
    public function registerCategory(){
        //vamos a crear una variable que guardará la consulta
        $sql = "INSERT INTO categorias(Nombre) VALUES (?)";

        //Vamos a crear una variable para mandaar el estado activo por defecto
        $Estado = 1;

        //vamos a crear una variable para mantener lista siempre la consulta y poder enviarla o ejecutarla cada que sea llamada
        $stm = $this->db->prepare($sql);
        // $stm->bindParam(1, $this->idCategoria);
        $stm->bindParam(1, $this->Nombre);

        //respuesta
        $resultado = $stm->execute();
        return $resultado;
    }

    // //método para validar las consultas
    // public function validateCategory(){
    //     //crear la variable de consulta
    //     $sql = "SELECT P.Documento, P.Nombres, P.Apellidos, U.idUsuario, U.Usuario, R.Descripcion FROM personas AS P 
    //     INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento
    //     INNER JOIN usuarios AS U ON P.idPersona = U.idPersona
    //     INNER JOIN roles AS R ON U.idRol = R.idRol WHERE U.Usuario = ? AND U.Clave = ? AND U.Estado = 1";

    //     //vamos a crear una variable que controlará todo el resultado
    //     $stm = $this->db->prepare($sql);
    //     $stm -> bindParam(1, $this->usuario);
    //     $stm -> bindParam(2, $this->clave);
    //     $stm->execute();

    //     //crear una variable para la respuesta de los datos
    //     $user = $stm->fetch(PDO::FETCH_ASSOC);
    //     return $user;
    // }

    //Metodo para  registrar los usuarios
    public function categoryRegister(){
        //Vamos a crear la consulta
        $sql = "INSERT INTO categorias(Nombre) VALUES (?)";
        
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

    //Metodo para obtener los datos de los categoria
    public function getCategory(){
        //Consulta
        $sql = "SELECT * FROM categorias";

        //Vamos a preparar la consulta y ejecutarla
        $stm = $this->db->prepare($sql);
        $stm->execute();
        //Vamos a crear la variable para retornar los datos
        $category = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $category;
    }

    //Metodo para filtrar, tomar,edita, eliminar y reclamar el ID de los usuarios 
    public function getCategoryByID($id){
        //Consulta
        $sql = "SELECT idCategoria, Nombre, FROM categorias WHERE idCategoria = ?";

        //Preparacion y ejecucion de la consulta
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //Metodo para cambiar estados
    public function changeStatus($id){
        //Consulta
        $sql = "UPDATE categorias SET Estado =(CASE WHEN Estado = 1 THEN 0 ELSE 1 END) WHERE idCategoria = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

    //Metodo para eliminar el usuario
    public function deleteCategory($id){
        //Consulta
        $sql = "DELETE FROM categorias WHERE Nombre = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

    //Metodo para actualizar
    public function updateCategory(){
        //Consulta
        $sql = "UPDATE categorias AS P SET P.Nombre = ?, WHERE P.idCategoria = ?";

        //Preparar y enviar la consulta
        $stm = $this->db->prepare($sql);
        // $stm->bindParam(1, $this->idCategoria);
        $stm->bindParam(2, $this->Nombre);

        //Respuesta
        $result = $stm->execute();
        return $result;
    }
}
?>