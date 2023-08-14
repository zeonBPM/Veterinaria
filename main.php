<?php

require_once 'Clientes.php';


$menu = 'null';
while($menu != '0'){
    echo ("\n");
   echo ("Menu principal\n"); 
   echo ("==============\n");
   echo ("0-Salir\n");
   echo ("1-Agregar Cliente\n");
   echo ("2-Listar Clientes\n");
   echo ("3-Remover Clientes\n");
   echo ("\n");
   $menu = trim(fgets(STDIN));
   echo ("\n");
switch($menu)
{
                    case '1':
                        $ncliente = new Cliente();
                        agregar_cliente($ncliente);
                        array_push($Clientes, $ncliente);
                        break;
                    case '2':
                        print_r($Clientes);
                        break;
                    case'3':
                        $borrar = null;
                        print_r($Clientes);
                        echo "Seleccione cliente a eliminar: \n";
                        $borrar = trim(fgets(STDIN));
                        unset($Clientes[$borrar]);
                       
                        break;
  }


}







?>


