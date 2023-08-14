<?php

require_once 'Clientes.php';
require_once 'Mascotas.php';


$menu = '0';
while($menu==0){
   echo ("\n");
   echo ("Menu principal\n"); 
   echo ("==============\n");
   echo ("0-Salir\n");
   echo ("1- Clientes\n");
   echo ("2- Mascotas\n");
   echo ("3- Turnos\n");
   echo ("==============\n");
   echo ("\n");
   $menu = trim(fgets(STDIN));
   echo ("\n");

switch($menu)
{

    case'1':
        while($menu == '1'){
        echo ("\n");
        echo ("Menu Clientes\n"); 
        echo ("==============\n");
        echo ("0-Volver al menu principal\n");
        echo ("1-Agregar Cliente\n");
        echo ("2-Listar Clientes\n");
        echo ("3-Remover Clientes\n");
        echo ("==============\n");
        $menuC = trim(fgets(STDIN));
        echo ("\n");

        switch($menuC)
        {
            case'0':
                $menu = 0;
                break;
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
        break;

    case'2':
        while($menu == '2'){
            echo ("\n");
            echo ("Menu Mascotas\n"); 
            echo ("==============\n");
            echo ("0-Volver al menu principal\n");
            echo ("1-Agregar Mascota\n");
            echo ("2-Listar Mascotas\n");
            echo ("3-Remover Mascota\n");
            echo ("==============\n");
            $menuM = trim(fgets(STDIN));
            echo ("\n");

            switch($menuM){

                case'0':
                    $menu = 0;
                    break;

                case'1':
                    $nmascota = new Mascota();
                    agregar_mascota($nmascota);
                    array_push($Mascotas, $nmascota);
                    break;

                case'2':
                    print_r($Mascotas);
                    break;

                case'3':
                    $borrar = null;
                    print_r($Mascotas);
                    echo "Seleccione mascota a eliminar: \n";
                    $borrar = trim(fgets(STDIN));
                    unset($Mascotas[$borrar]);
                    break;









            }









        }
        break;

    case'3':

        while($menu == '3'){
            echo ("\n");
            echo ("Menu Turnos\n"); 
            echo ("==============\n");
            echo ("0-Volver al menu principal\n");
            echo ("1-Agregar Turno\n");
            echo ("2-Listar Turnos\n");
            echo ("3-Remover Turnos\n");
            echo ("==============\n");
            $menuT = trim(fgets(STDIN));
            echo ("\n");


            switch($menuM){

                case'0':
                    $menu = 0;
                    break;

                case'1':

                    break;

                case'2':

                    break;

                case'3':

                    break;


                }
        }

        break;









}







}







?>


