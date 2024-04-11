<?php
 require_once 'operarioclass.php';
 require_once 'vehiculoclass.php';
 require_once 'servicioclass.php';
session_start();
 $operario = $_SESSION['operario'];
 $vehiculo = $_SESSION['vehiculo'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los servicios seleccionados del formulario
  $servicios_elegidos = isset($_POST['servicios']) ? $_POST['servicios'] : [];

  // Obtener el servicio personalizado, si se ha proporcionado
  $servicio_adicional = isset($_POST['servicio_adicional']) ? $_POST['servicio_adicional'] : null;

  // Crear instancias de la clase Servicio para los servicios seleccionados
  $servicios_instanciados = [];
  foreach ($servicios_elegidos as $servicio_elegido) {
    $servicio_instanciado = new Servicios($servicio_elegido);
    $servicios_instanciados[] = $servicio_instanciado;
  }

  // Si se proporcionó un servicio personalizado, agregarlo también
  if (!empty($servicio_adicional)) {
    $servicio_adicional_instanciado = new Servicios($servicio_adicional);
    $servicios_instanciados[] = $servicio_adicional_instanciado;
  }

  // Almacenar los servicios instanciados en la sesión
  $_SESSION['servicios'] = $servicios_instanciados;

  // Redirigir al usuario al informe
  header("Location: informe.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleccion servicios</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1>Confirme los datos</h1>
<div class="h3">
        <div class="h4">
            <h5 class="h5">Operario encargado</h5>
            <p class="h6"><?php echo $operario->mostrarDatosO(); ?></p>
        </div>
    </div>
    <div class="h2">
        <div class="h4">
            <h5 class="h5">Vehículo</h5>
            <p class="h6"><?php echo $vehiculo->mostrarDatosV(); ?></p>
        </div>
    </div>
    <h1>Seleccione sus servicios</h1>
      <ul class="list-group">
        <li class="list-group-item">
          <input type="checkbox" name="servicios[]" value="Lavado completo del vehículo"> Lavado completo del vehículo
        </li>
        <li class="list-group-item">
          <input type="checkbox" name="servicios[]" value="Cambio de aceite y filtro"> Cambio de aceite y filtro
        </li>
        <li class="list-group-item">
          <input type="checkbox" name="servicios[]" value="Rotación de llantas y balanceo"> Rotación de llantas y balanceo
        </li>
        <li class="list-group-item">
          <input type="checkbox" name="servicios[]" value="Alineación de la dirección"> Alineación de la dirección
        </li>
        <li class="list-group-item">
          <label for="servicio_adicional">Otro servicio:</label>
          <input type="text" name="servicio_adicional" id="servicio_adicional" class="form-control">
        </li>
      </ul>
      <input type="submit" value="Confirmar">

    </form>
  </div>

</body>

</html>