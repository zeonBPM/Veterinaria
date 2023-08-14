<?php

$Mascotas = array();


  class Mascota
  {
  public $dueño = "";
  public $nombre = "";
  public $especie = "";
  public $edad = "";
 

  function set_dueño($dueño){
    $this->dueño = $dueño;
  }
 
  function get_dueño() {
    return $this->dueño;
  }
  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  function get_name() {
    return $this->nombre;
  }

  function set_especie($especie) {
    $this->especie = $especie;
  }
  function get_especie() {
    return $this->especie;
  }
  function set_edad($edad) {
    $this->edad = $edad;
  }
  function get_edad() {
    return $this->edad;
  }









  }
  function agregar_mascota($mascota){
    $dueño = $nombre = $especie = $edad = null;
    echo "\n";
    echo "dueño: ";
    $dueño =  trim(fgets(STDIN));
    echo "nombre:  ";
    $nombre = trim(fgets(STDIN));
    echo "especie:  ";
    $especie = trim(fgets(STDIN));
    echo "edad:  ";
    $edad = trim(fgets(STDIN));

    $mascota->set_dueño($dueño);
    $mascota->set_nombre($nombre);
    $mascota->set_especie($especie);
    $mascota->set_edad($edad);
  
  
  }
  function borrar_mascota($mascota){
    unset($Mascotas[$mascota]);
    }
?>
