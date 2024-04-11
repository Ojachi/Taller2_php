<?php
require_once 'vehiculoclass.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vehiculo = new Vehiculo($_POST['Marca'], $_POST['Color'],$_POST['Modelo'], $_POST['Placa'] );
  $_SESSION['vehiculo'] = $vehiculo;
  header("Location: servicios.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Vehiculo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1>Ingrese los datos del vehiculo</h1>
      <label for="Marca">Marca:</label>
      <input type="text" id="Marca" name="Marca" required><br><br>
      <label for="Color">Color:</label>
      <input type="text" id="Color" name="Color" required><br><br>
      <label for="Modelo">Modelo:</label>
      <input type="text" id="Modelo" name="Modelo" required><br><br>
      <label for="Placa">Placa:</label>
      <input type="text" id="Placa" name="Placa" required><br><br>
      <input type="submit" value="Siguiente">
  
    </form>
  </div>

  
</body>
</html>