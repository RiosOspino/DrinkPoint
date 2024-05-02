<?php
//Vamos a crear la clase de este modelo,por lo general se le da como nombre el mismo archivo mdlPersona

class mdlPersona{
    //agregar los atributos de esta clase
    public $idPersona;
    public $documento;
    public $idTipodocumento;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $direccion;
    public $email;
    public $fechaNacimiento;
    public $genero;
    public $db;

    //Crear el metodo para fijar los datos
    public function _SET($atributo,$valor){
        $this-> $atributo =$valor;
    }

    //Metodo para reclamar los datos cuando sean necesarios
    public function _GET($atributo){
        return $this-> $atributo;
    }

    //Vamos  a crear la conexion a la db
    public function _construct($db){
        //Intentar conectar.
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Eror al conectar a la base de datos");
        }
    }

    //Crear el metodo para registar las personas 
    public function registerPerson(){
        //Vamos a crear una variable que guardara una consulta
        $sql = "INSERT INTO personas(Documento, Nombres, Apellidos, Email, Telefono, Direccion, Genero, FechaNacimiento, idTipoDocumento) VALUES (?,?,?,?,?,?,?,?,?)";

        //Vamos a crear una variable para mantener lista siempre la consulta y poder enviarla o ejecutarla cada que sea llamada.
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->documento);
        $stm->bindParam(2, $this->nombres);
        $stm->bindParam(3, $this->apellidos);
        $stm->bindParam(4, $this->email);
        $stm->bindParam(5, $this->telefono);
        $stm->bindParam(6, $this->direccion);
        $stm->bindParam(7, $this->genero);
        $stm->bindParam(8, $this->fechaNacimiento);
        $stm->bindParam(9, $this->idTipodocumento);
        
        //Respuesta
        $resultado = $stm->execute();
        return $resultado;
    }

    //Metodo para retornar el id de la ultima persona registrada
    public function lastIdPerson(){
        $sql = "SELECT MAX(idPersona) AS lastIdPerson FROM personas";
        $query = $this->db->prepare($sql);
        $query->execute();
        //Respuesta
        $lastId = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $lastId;
    }

    //Metodo que nos va permitir ver el listado de los documentos
    public function getTypeDocument(){
        //Consulta 
        $sql = "SELECT idTipoDocumento, Descripcion AS doc FROM tiposdocumento";
        $query = $this->db->prepare($sql);
        $query->execute();
        $doc = $query-> fetchAll(PDO::FETCH_ASSOC);
        return  $doc;
    }
}
?>