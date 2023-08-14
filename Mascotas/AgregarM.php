
 Agregar M






?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">

Especie: <input type="text" name="especie" value="<?php echo $especie;?>">

Edad: <input type="text" name="edad" value="<?php echo $edad;?>">


  <input type="submit" name="Enviar" value="enviar">  
</form>

<?php

$mascota = new Mascota();

$mascota->set_nombre($_POST["nombre"]);
$mascota->set_especie($_POST["especie"]);
$mascota->set_edad($_POST["edad"]);

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


