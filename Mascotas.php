



<form action="http://localhost/ADVET/index.php" method="post">

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
