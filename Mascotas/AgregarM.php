
<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body> 
Agregar M
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





  function get_input($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
      }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">

Especie: <input type="text" name="especie" value="<?php echo $especie;?>">

Edad: <input type="text" name="edad" value="<?php echo $edad;?>">


  <input type="submit" name="Enviar" value="enviar">  
</form>

<?php

$mascota = new Mascota();

$Mascota->set_nombre(get_input($_POST["nombre"]));
$Mascota->set_especie(get_input($_POST["especie"]));
$Mascota->set_edad(get_input($_POST["edad"]));

echo "<h2>Datos Ingresados:</h2>";
echo "Nombre: ";
echo $mascota -> get_name();
echo "<br>";
echo "Especie: ";
echo $mascota -> get_especie();
echo "<br>";
echo "Edad: ";
echo $mascota -> get_edad();
echo "<br>";


?>





</body>
</html>