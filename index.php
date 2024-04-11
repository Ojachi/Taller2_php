<?php
require_once 'operarioclass.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $operario = new Operario($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['correo'],$_POST['cedula'],$_POST['direccion']);
  $_SESSION['operario'] = $operario;
  header("Location: vehiculo.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Operario</title>
  <link rel="stylesheet" type="text/css" href="../Taller2_Parcial/style.css">
</head>
<body>
  <div id="contenedor">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1 >Ingrese los datos del Operario</h1>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br><br>
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required><br><br>
      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" required><br><br>
      <label for="cedula">Cédula:</label>
      <input type="number" id="cedula" name="cedula" required><br><br>
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" required><br><br>
      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required><br><br>
      <input type="submit" value="Siguiente">
    </form>
  </div>
</body>
</html>