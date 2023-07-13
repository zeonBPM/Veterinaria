<?php
echo"Clientes



0 = salir


1 = agregar

2 = borrar

3 = listar


";





$menuC = rand(1 , 3);
echo $menuC;


switch($menuC)
									{
										case '0':
											include('./index.php');
											break;

										case '1':
											include('./Clientes/AgregarC.php');
											break;
											
										case '2':
											include('./Clientes/BorrarC.php');
											break;
											
										case '3':
											include('./Clientes/ListarC.php');
											break;

							
									}









?>
