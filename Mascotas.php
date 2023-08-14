
<?php



$nombre = $especie = $edad = "";








  class Mascota
  {
  // Declaración de una propiedad
  public $nombre = "";
  public $especie = "";
  public $edad = "";
 
  // Declaración de un método
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


?>
