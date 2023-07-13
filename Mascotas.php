<?php
echo"hola";
	
echo "ingresa tu nombre: ";


echo "\n";








switch($page)
									{
										case '0':
											include('./index.php');
											break;

										case '1':
											include('./AgregarM.php');
											break;
											
										case '2':
											include('./BorrarM.php');
											break;
											
										case '3':
											include('./ListarM.php');
											break;

							
									}






?>
