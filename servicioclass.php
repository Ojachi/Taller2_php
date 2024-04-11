<?php
class Servicios
{
  public $servicio;

  public function __construct($servicio)
  {
    $this->servicio = $servicio;
  }

  public function mostrarDatosS()
  {
    return '<li class="list-group-item">' . $this->servicio . '</li>';
  }
}
?>