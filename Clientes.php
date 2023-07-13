<?php
 

?>



<form action="http://localhost/ADVET/index.php" method="post">

   	<input type="submit" name="" value="Salir">
</form>
<H1>Clientes</H1>
<form action="" method="post">

    <input type="submit" name="menu1" value="Agregar">
	<input type="submit" name="menu1" value="Remover">
	<input type="submit" name="menu1" value="Listar">


</form>



<?php

$menuC = $_POST["menu1"];


echo $menuC;



?>



<?php

$nombre = $apellido = $telefono = "";




  class Cliente
  {
  // Declaración de una propiedad
  public $nombre = "";
  public $apellido = "";
  public $telefono = "";
 
  // Declaración de un método
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

?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

					Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
											
					Apellido: <input type="text" name="apellido" value="<?php echo $apellido;?>">
											
					Telefono: <input type="text" name="telefono" value="<?php echo $telefono;?>">
											
											
<input type="submit" name="Enviar" value="enviar">  
											</form>


<?php

switch($menuC)
									{
										
										case 'Agregar':
											
										
											
											$cliente = new Cliente();

											$cliente->set_nombre($_POST["nombre"]);
											$cliente->set_apellido($_POST["apellido"]);
											$cliente->set_telefono($_POST["telefono"]);
											break;
											
										case 'Remover':
											unset($cliente);
											break;
											
										case 'Listar':
											echo "<h2>Datos Ingresados:</h2>";
											echo "Nombre: ";
											echo $cliente -> get_name();
											echo "<br>";
											echo "Apellido: ";
											echo $cliente -> get_apellido();
											echo "<br>";
											echo "Telefono: ";
											echo $cliente -> get_telefono();
											echo "<br>";
											
											break;

							
									}




?>
