<?php


?>



<form action="http://localhost/ADVET/index1.php" method="post">

   	<input type="submit" name="menu" value="Salir">
</form>
<form action="" method="post">

    <input type="submit" name="menu" value="Agregar">
	<input type="submit" name="menu" value="Remover">
	<input type="submit" name="menu" value="Listar">


</form>



<?php

$menuC = $_POST["menu"];




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
