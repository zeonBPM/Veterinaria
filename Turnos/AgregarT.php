 Agregar T



 

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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

Dueño: <input type="text" name="dueño" value="<?php echo $dueño;?>">

Mascota: <input type="text" name="mascota" value="<?php echo $mascota;?>">

Fecha: <input type="text" name="fecha" value="<?php echo $fecha;?>">


  <input type="submit" name="Enviar" value="enviar">  
</form>


<?php

$turno = new Turno();

$turno->set_dueño($_POST["dueño"]);
$turno->set_mascota($_POST["mascota"]);
$turno->set_fecha($_POST["fecha"]);

echo "<h2>Datos Ingresados:</h2>";
echo "Dueño: ";
echo $turno -> get_dueño();
echo "<br>";
echo "Mascota: ";
echo $turno -> get_mascota();
echo "<br>";
echo "Fecha: ";
echo $turno -> get_fecha();
echo "<br>";


?>


