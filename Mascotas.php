



<form action="http://localhost/ADVET/index.php" method="post">

<input type="submit" name="" value="Salir">
</form>

<H1>Mascotas</H1>
<form action="" method="post">

<input type="submit" name="menu2" value="Agregar">
<input type="submit" name="menu2" value="Remover">
<input type="submit" name="menu2" value="Listar">


</form>



<?php

$menuM = $_POST["menu2"];


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
