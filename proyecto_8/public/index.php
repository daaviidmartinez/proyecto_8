<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios where id = 1 ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php include "./assets/navSup.php"; ?>
    <?php include "./assets/footer.php"; ?>
<div>
    <?php
    foreach ($resultado as $usuario) {
      echo "Usuario conectado: "."<span style=color:blue;font-size:20px;>".$usuario['nombre']."</span>"."<br>";
          echo "Puntuación: "."<span style=color:blue;font-size:20px;>".$usuario['puntuacion']."</span>"."<br>";
    } ?>

    </div>
    Siguiente Fila:
      <input type="text" id="fila" value="">
    Siguiente Columna:
      <input type="text" id="columna" value="">
      <br>
      <br>
    <button class="mano" onclick="comprobar()">Comprobar movimiento</button>
      <br>
      <br>

    Movimientos realizados:
      <input class="botonrojo" type="text" disabled="disabled" id="movimientos" value="">

    Num Movs:
      <input class="botonrojo" type="text" disabled="disabled" id="nMovimientos" value="">
      <br>
      <br>

    Mensajes:
      <input class="botonrojo" type="text" disabled="disabled" id="mensajes" value="">
      <br>
      <br>
      
      <script type="text/javascript" src="js/codigo.js"></script>
      <p id="comprobacion"></p>

</body>
</html>