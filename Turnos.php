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
											include('./AgregarT.php');
											break;
											
										case '2':
											include('./BorrarT.php');
											break;
											
										case '3':
											include('./ListarT.php');
											break;

							
									}




?>
