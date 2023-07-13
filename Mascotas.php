



<form action="http://localhost/ADVET/index.php" method="get">

<input type="submit" name="" value="Salir">
</form>
<form action="" method="get">

<input type="submit" name="menu2" value="Agregar">
<input type="submit" name="menu2" value="Remover">
<input type="submit" name="menu2" value="Listar">


</form>



<?php

$menuM = $_GET["menu2"];


echo $menuM;


switch($menuM)
							 {
								 
								 case 'Agregar':
									 include('./Mascotas/AgregarM.php');
									 break;
									 
								 case 'Remover':
									 include('./Mascotas/BorrarM.php');
									 break;
									 
								 case 'Listar':
									 include('./Mascotas/ListarM.php');
									 break;

					 
							 }









?>
