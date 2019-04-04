<?php
/**
 * Jugador
 */
class Jugador
{
  //Ejemplo de propiedad publica
  private $id;
  private $nombre;
  private $apellido;
  private $curso;
  function __construct()
  {
  }
  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellido"])||!isset($post["curso"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido el id";
    }elseif($post["nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["apellido"]==""){
      $error="No has introducido el Apellido";
    }elseif($post["curso"]==""){
        $error="No has introducido el Curso";
    }
    
    else{
      $error=false;
      $this->id=$post["id"];
      $this->nombre=$post["nombre"];
      $this->apellido=$post["apellido"];
      $this->curso=$post["curso"];
    }
    return $error;
  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarJugador(){
    $consulta="INSERT INTO usuarios  (id, nombre, apellidos, edad, curso, puntuacion)
                VALUES ($this->id, $this->nombre, $this->apellidos, NULL, $this->curso, NULL)";
    $this->conexion->query($consulta);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
