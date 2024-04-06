<?php 
include_once 'Viaje.php';
include_once 'Persona.php';

// $objViaje = new Viaje(485, "Bariloche", 50, 38);
// echo $objViaje;

// $objPersona = new Persona("Erick", "Gonzalez", 43372217);
// echo $objPersona;  

/** 
 * ! *********************************************************
 * ! *******************MENÚ DE OPCIONES**********************
 * ! *********************************************************
 */

 echo "1. Cargar informacion del viaje.\n";
 echo "2. Modificar.\n";
 echo "3. Ver Datos.\n";
 $opcion = readline("Ingrese la opción que requiera: ");

 switch ($opcion) {
    case '1':
        # code...
        break;
    case '2':
        # code...
        break;
    case '3':
        # code...
        break;
    default:
        # code...
        break;
 }