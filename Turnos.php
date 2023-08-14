<?php

$Turnos = array();




  class Turno
  {
  // Declaración de una propiedad
  public $dueño = "";
  public $mascota = "";
  public $fecha = "";

  public $hora = "";
 
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

  function set_hora($hora) {
    $this->hora = $hora;
  }
  function get_hora() {
    return $this->hora;
  }

  


  }
  function agregar_turno($turno){
    $dueño = $mascota = $fecha = $hora = null;
    echo "Agregar nuevo turno \n";
    echo "dueño: ";
    $dueño =  trim(fgets(STDIN));
    echo "mascota:  ";
    $mascota = trim(fgets(STDIN));
    echo "fecha:  ";
    $fecha = trim(fgets(STDIN));
    echo "hora:  ";
    $hora = trim(fgets(STDIN));

    $turno->set_dueño($dueño);
    $turno->set_mascota($mascota);
    $turno->set_fecha($fecha);
    $turno->set_hora($hora);
  
  }
  function borrar_turno($turno){
    unset($Turnos[$turno]);
  }
?>
