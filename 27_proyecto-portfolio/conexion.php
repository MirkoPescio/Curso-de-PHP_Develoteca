<?php 

  class conexion{

    private $servidor="localhost:3307";
    private $usuario="root";
    private $password="";
    private $conexion;

    public function __construct(){

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch( PDOException $error ){
            return "Falla de conexión <br/>".$error;
        }
    }

    public function ejecutar($sql){
      $this->conexion->exec($sql);
      return $this->conexion->lastInsertId(); // Instrucción que ejecuta un sql para generar un ID
    }

    public function consultar($sql){
      $sentencia= $this->conexion->prepare($sql);
      $sentencia->execute();
      return $sentencia->fetchAll(); // retorna todos los registros con la sentencia sql
    }
  }

?>