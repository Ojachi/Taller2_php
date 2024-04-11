<?php
class Operario
{
  public $nombre;
  public $apellido;
  public $edad;
  public $cedula;
  public $direccion;
  public $correo;

  public function __construct($nombre, $apellido, $edad, $cedula, $direccion, $correo)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->cedula = $cedula;
    $this->direccion = $direccion;
    $this->correo = $correo;
  }

  public function mostrarDatosO()
  {
    return '<div class="card">
              <div class="card-body">
                <p class="card-text">Nombre: ' . $this->nombre . '</p>
                <p class="card-text">Apellido: ' . $this->apellido . '</p>
                <p class="card-text">Edad: ' . $this->edad . '</p>
                <p class="card-text">Correo: ' . $this->correo . '</p>
                <p class="card-text">Cédula: ' . $this->cedula . '</p>
                <p class="card-text">Dirección: ' . $this->direccion . '</p>
              </div>
            </div>';
  }
}
