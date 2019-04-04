<?php
require "./../src/jugador.php";
  $j=new Jugador();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarJugador();
      }
  }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <!-- Menu navegacion-->
   <?php include "./assets/navSup.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <form class="" action="listadoUsuarios.php" method="post">
        <label for="id">Id</label>
        <br>
        <input type="text" name="id" id="id" value="">
        <br><br>
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="">
        <br><br>
        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos" id="apellidos" value="">
        <br><br>
        <label for="curso">Curso</label>
        <br>
        <input type="text" name="curso" id="curso" value="">
        <br><br>
        <input type="submit" value="ENVIAR">
  </body>
</html>