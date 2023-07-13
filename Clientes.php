<?php
 

?>



<form action="http://localhost/ADVET/index.php" method="get">

   	<input type="submit" name="" value="Salir">
</form>
<form action="" method="get">

    <input type="submit" name="menu1" value="Agregar">
	<input type="submit" name="menu1" value="Remover">
	<input type="submit" name="menu1" value="Listar">


</form>



<?php

$menuC = $_GET["menu1"];


echo $menuC;


switch($menuC)
									{
										
										case 'Agregar':
											include('./Clientes/AgregarC.php');
											break;
											
										case 'Remover':
											include('./Clientes/BorrarC.php');
											break;
											
										case 'Listar':
											include('./Clientes/ListarC.php');
											break;

							
									}









?>
