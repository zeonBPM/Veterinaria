<?php

$dueño = $mascota = $fecha = "";




  class Turno
  {
  // Declaración de una propiedad
  public $dueño = "";
  public $mascota = "";
  public $fecha = "";
 
  // Declaración de un método
  function set_dueño($dueño) {
    $this->dueño = $dueño;
  }
  function get_dueño() {
    return $this->dueño;
  }

  function set_mascota($mascota) {
    $this->mascota = $mascota;
  }
  function get_mascota() {
    return $this->mascota;
  }
  function set_fecha($fecha) {
    $this->fecha = $fecha;
  }
  function get_fecha() {
    return $this->fecha;
  }



  


  }

?>
