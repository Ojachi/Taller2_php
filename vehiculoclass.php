<?php
class Vehiculo
{
  public $marca;
  public $color;
  public $placa;
  public $modelo;

  public function __construct($marca, $color, $modelo, $placa)
  {
    $this->marca = $marca;
    $this->color = $color;
    $this->modelo = $modelo;
    $this->placa = $placa;
  }

  public function mostrarDatosV()
  {
    return '<div class="card">
                <div class="card-body">
                  <p class="card-text">Marca: ' . $this->marca . '</p>
                  <p class="card-text">Color: ' . $this->color . '</p>
                  <p class="card-text">Modelo: ' . $this->modelo . '</p>
                  <p class="card-text">Placa: ' . $this->placa . '</p>
                </div>
              </div>';
  }
}
