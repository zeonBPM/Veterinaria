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
 
<form action="http://localhost/ADVET/index.php" method="post">
<input type="submit" name="" value="Salir">
</form>
<H1>Turnos</H1>


<form action="" method="post">
<input type="submit" name="menu3" value="Agregar">


</form>


<form action="" method="post">
<input type="submit" name="menu3" value="Remover">


</form>





<form action="" method="post">
<input type="submit" name="menu3" value="Listar">


</form>



 

 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
 Dueño: <input type="text" name="dueño" value="<?php echo $dueño;?>">
 
 Mascota: <input type="text" name="mascota" value="<?php echo $mascota;?>">
 
 Telefono: <input type="text" name="fecha" value="<?php echo $fecha;?>">
 
 
   <input type="submit" name="Enviar" value="enviar">  
 </form>
 
 
 <form method="post" action="<?php
 
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
 ">
 <input type="submit" name="Enviar" value="enviar">  
 </form>




<?php
/*
echo"hola";



;








switch($page)
									{
										case '0':
											include('./index.php');
											break;

										case '1':
											include('./AgregarT.php');
											break;
											
										case '2':
											include('./BorrarT.php');
											break;
											
										case '3':
											include('./ListarT.php');
											break;

							
									}




*/?>
