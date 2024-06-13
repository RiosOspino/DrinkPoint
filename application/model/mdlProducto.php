<?php
//Vamos a crear la clase de este modelo, por lo general, se le da como nombre el mismo del archivo  (mdlProducto)
require_once("mdlProducto.php");

//heredamos clase
class mdlProducto {
    //crear los atributos
    private $Nombre;
    private $Descripcion;
    private $Precio;
    private $Imagen;
    private $idUsuario;
    private $idCategoria;
    private $Estado;

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
        }catch(PDOException $e){
            exit("Error al conectar a la base de datos");
        }
    }

    //crear el método para registrar las personas
    public function registerProduct(){
        //vamos a crear una variable que guardará la consulta
        $sql = "INSERT INTO productos(Nombre, Descripcion, Precio, Imagen, idUsuario, idCategoria, Estado) VALUES (?,?,?,?,?,?,?)";

        //Vamos a crear una variable para mandaar el estado activo por defecto
        $Estado = 1;

        //vamos a crear una variable para mantener lista siempre la consulta y poder enviarla o ejecutarla cada que sea llamada
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Nombre);
        $stm->bindParam(2, $this->Descripcion);
        $stm->bindParam(3, $this->Precio);
        $stm->bindParam(4, $this->Imagen);
        $stm->bindParam(5, $this->idUsuario);
        $stm->bindParam(6, $this->idCategoria);
        $stm->bindParam(7, $Estado);
        //respuesta
        $resultado = $stm->execute();
        return $resultado;
    }

    //Metodo para  registrar los usuarios
    public function productRegister(){
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

    //Metodo para obtener los datos de los productos
    public function getProduct(){
        //Consulta
        $sql = "SELECT P.*, C.Nombre AS Categoria, Person.Nombres AS Usuario FROM productos AS P
        INNER JOIN categorias AS C ON C.idCategoria = P.idCategoria
        INNER JOIN usuarios AS U ON P.idUsuario = U.idUsuario
        INNER JOIN personas AS Person ON Person.idPersona = U.idPersona";


        //Vamos a preparar la consulta y ejecutarla
        $stm = $this->db->prepare($sql);
        $stm->execute();
        //Vamos a crear la variable para retornar los datos
        $product = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $product;
    }

    //Metodo para filtrar, tomar,edita, eliminar y reclamar el ID de los usuarios 
    public function getProductByID($id){
        //Consulta
        $sql = "SELECT idProducto, Nombre, Descripcion, Precio, Imagen, idCategoria FROM productos WHERE idProducto = ?";

        //Preparacion y ejecucion de la consulta
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    //Metodo para filtrar productos por categoría
    public function getProductsByCategory($id){
        //Consulta o sentencia SQL
        // $sql = "SELECT idProducto, Nombre, Descripcion, Precio, Imagen, idCategoria FROM productos WHERE idCategoria = ?";
        $sql = "SELECT * FROM productos WHERE idCategoria = ?";

        //Preparacion y ejecucion de la consulta
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //Metodo para cambiar estados
    public function changeStatus($id){
        //Consulta
        $sql = "UPDATE productos SET Estado =(CASE WHEN Estado = 1 THEN 0 ELSE 1 END) WHERE idProducto = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

    //Metodo para eliminar el usuario
    public function deleteProduct($id){
        //Consulta
        $sql = "DELETE FROM productos WHERE idProducto = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1, $id);
        return $query->execute();
    }

    //Metodo para actualizar
    public function updateProduct(){
        //Consulta
        $sql = "UPDATE productos AS P SET P.Nombre = ?, P.Descripcion = ?, P.Precio = ?, P.idCategoria = ? WHERE P.idProducto = ?";

        //Preparar y enviar la consulta
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->Nombre);
        $stm->bindParam(2, $this->Descripcion);
        $stm->bindParam(3, $this->Precio);
        $stm->bindParam(4, $this->idCategoria);
        $stm->bindParam(5, $this->idProducto);

        //Respuesta
        $result = $stm->execute();
        return $result;
    }
}
?>