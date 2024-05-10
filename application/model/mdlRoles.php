<?php
//Crear la clase
class mdlRoles{
    //crear el método para fijar los datos
    public function __SET($atributo,$valor){
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

    //Metodo para traer los datos de los roles
    public function getRoles(){
        //Crear consulta
        $sql = "SELECT * FROM roles ORDER BY Descripcion ASC";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm-> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>