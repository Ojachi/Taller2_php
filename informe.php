<?php
require_once 'operarioclass.php';
require_once 'vehiculoclass.php';
require_once 'servicioclass.php';
session_start();


$operario = $_SESSION['operario'];
$vehiculo = $_SESSION['vehiculo'];
$servicios = $_SESSION['servicios'];

if (!isset($_SESSION['operario']) || !isset($_SESSION['vehiculo']) || !isset($_SESSION['servicios'])) {
  echo "<div class='alert alert-danger' role='alert'>Error: No se encontraron datos válidos en la sesión.</div>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>INFORME</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Operario encargado:</h5>
                <p class="card-text"><?php echo $operario->mostrarDatosO(); ?></p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Vehículo:</h5>
                <p class="card-text"><?php echo $vehiculo->mostrarDatosV(); ?></p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Servicios requeridos:</h5>
                <ul class="list-group list-group-flush">
                    <?php foreach ($servicios as $servicio) : ?>
                        <?php echo $servicio->mostrarDatosS(); ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
