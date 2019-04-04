<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}elseif ((!empty($_POST["id"])&&(!empty($_POST["nombre"]))&&(!empty($_POST["apellidos"]))&&(!empty($_POST["curso"])))) {

$consulta="INSERT INTO usuarios (id, nombre, apellidos, curso) VALUES ('$id', '$nombre', '$apellidos', '$curso')";
$resultado = $conexion->query($consulta);
$resultado = $conexion->query("SELECT * FROM usuarios");
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
  </head>
  <body>

    <?php include "./assets/navSup.php"; ?>
    
    <div>
      <table>

        <tr>
          <td style="background-color:#498150; text-align:center;"><b>ID</b></td>
          <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
          <td style="background-color:#498150; text-align:center;"><b>Apellidos</b></td>
          <td style="background-color:#498150;text-align:center;"><b>curso</b></td>
          <td style="background-color:#498150; text-align:center;"><b>puntuacion</b></td>
         </tr>
      <?php foreach ($resultado as $usuario) {
          echo "<tr>";
          echo "<td style='text-align:center'>".$usuario["id"]."</td>";
          echo "<td style='text-align:center'>".$usuario["nombre"]."</td>";
          echo "<td style='text-align:center'>".$usuario["apellidos"]."</td>";
          echo "<td style='text-align:center'>".$usuario["curso"]."</td>";
          echo "<td style='text-align:center'>".$usuario["puntuacion"]."</td>";
        }
        ?>
</tr>
</table>

  </body>
</html>