<?php
echo"indice




1 = clientes


2 = mascotas


3 = turnos


";
	



$menu = rand(1 , 3);
echo $menu;



switch($menu)
									{
										case '0':
											include('');
											break;

										case '1':
											include('./Clientes.php');
											break;
										case '2':
											include('./Mascotas.php');
											break;	
											
										case '3':
											
											include('./Turnos.php');
											break;
							
									}









?>
