<?php
 
$Clientes = array();


  class Cliente
  {

  public $nombre = "";
  public $apellido = "";
  public $telefono = "";
 

  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  function get_name() {
    return $this->nombre;
  }

  function set_apellido($apellido) {
    $this->apellido = $apellido;
  }
  function get_apellido() {
    return $this->apellido;
  }
  function set_telefono($telefono) {
    $this->telefono = $telefono;
  }
  function get_telefono() {
    return $this->telefono;
  }



  }
function agregar_cliente($cliente){
  $nombre = $apellido = $telefono = '';
  echo "nombre:  ";
  $nombre = trim(fgets(STDIN));
  echo "apellido:  ";
  $apellido = trim(fgets(STDIN));
  echo "telefono:  ";
  $telefono = trim(fgets(STDIN));

  $cliente->set_nombre($nombre);
  $cliente->set_apellido($apellido);
  $cliente->set_telefono($telefono);


}

function borrar_cliente($cliente){
  unset($Clientes[$cliente]);
  }












?>




											



