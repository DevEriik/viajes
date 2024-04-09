<?php 
include_once 'Viaje.php';
include_once 'Persona.php';
include_once 'Responsable.php';


 /** 
 * ! *********************************************************
 * ! *******************OBJETO RESPONSABLE********************
 * ! *********************************************************
 */

 $objResponsable = new ResponsableV(255, 150, "Edgardo Suarez");
 //echo $objResponsable;

 /** 
  * ! *********************************************************
  * ! *******************COLECCIÓN PASAJEROS*******************
  * ! *********************************************************
  */
$objPersona = new Persona("Erick", "Gonzalez", 43372217, 2984781034);
$objPersona2 = new Persona("Eduardo", "Lopez", 29764364, 299234863);
$objPersona3 = new Persona("Roxana", "Caro", 26734285, 113432134);
$objPersona4 = new Persona("Ivan", "Ponso", 36752807, 2984665342);
$coleccionPasajeros = [
    $objPersona,
    $objPersona2,
    $objPersona3,
    $objPersona4
];

/** 
 * ! *********************************************************
 * ! *******************OBJETO VIAJE**************************
 * ! *********************************************************
 */

$objViaje = new Viaje(485, "Bariloche", 50, $coleccionPasajeros, $objResponsable);
//echo $objViaje;




/** 
 * ! *********************************************************
 * ! *******************MENÚ DE OPCIONES**********************
 * ! *********************************************************
 */

 do {
    echo "1. Cargar informacion del viaje.\n";
    echo "2. Modificar.\n";
    echo "3. Ver Datos.\n";
    echo "4. Salir. \n";
    $opcion = readline("Ingrese la opción que requiera: ");

    switch ($opcion) {
        case '1': //TODO: Carga la informacion del viaje. 
            do {
                echo "Ingrese la información que quiere cargar: \n";
                echo "1. Cargar información del viaje. \n";
                echo "2. Cargar información de pasajero. \n";
                echo "3. Cargar información del responsable. \n";
                echo "4. Salir. \n";
                $opcion2 = readline("Ingrese la opcion que requiera: ");
            
                switch ($opcion2) {
                    case '1':
                        $codigoViaje = readline("Ingrese código de viaje: \n");
                        $destinoViaje = readline("Ingrese el destino: \n");
                        $cantMaximaPasaj = readline("Ingrese la cantidad maxima de pasajeros: \n");
                        $objViaje->setNewCodigoDeViaje($codigoViaje);
                        $objViaje->setNewDestino($destinoViaje);
                        $objViaje->setNewCantMaxPasajeros($cantMaximaPasaj);
                        echo "Informacion ingresada exitosamente. \n";
                        break;
                    case '2':
                        $nombrePasajero = readline("Ingrese el nombre del pasajero: \n");
                        $apellidoPasajero = readline("Ingrese el apellido del pasajero: \n");
                        $dniPasajero = readline("Ingrese el DNI del pasajero: \n");
                        $telPasajero = readline("Ingrese celular del pasajero: \n");

                        if ($objViaje->verificarPasajero($dniPasajero)) {
                            echo "El pasajero ya esta cargado en sistema. \n";
                            break;
                        }else{
                            $nuevoPasajero = new Persona($nombrePasajero, $apellidoPasajero, $dniPasajero, $telPasajero);
                            $objViaje->setNewPasajero($nuevoPasajero);
                            echo "Usuario ingresado correctamente. \n";
                        }
                        break;
                    case '3':
                        $numEmpleado = readline("Ingrese numero de empleado: \n");
                        $numLicencia = readline("Ingrese numero de licencia: \n");
                        $nomYApelli = readline("Ingrese el nombre y apellido: \n");
                        $numEmple = $objViaje->getObjResponsableVia()->getNumEmpleado();
                        if ($numEmpleado == $numEmple) {
                            echo "El empleado ya existe. \n";
                            break;
                        }else {
                            $nuevoEmpleado = new ResponsableV($numEmpleado, $numLicencia, $nomYApelli);
                            $objViaje->setNewObjResponsable($nuevoEmpleado);
                            echo "Empleado cargado exitosamente. \n";
                        }
                        break;
                    case '4':
                        echo "Saliendo... \n";
                        break;
                    default:
                        echo "La opcion ingresada es incorrecta, ingrese un digito del 1 al 4. \n";
                        break;
                }
                
            } while ($opcion2 != 4);
            break;
        case '2': //TODO: Modifica lo que el usuario quiera.
            do {
                echo "1. Viaje. \n";
                echo "2. Pasajero. \n";
                echo "3. Responsable. \n";
                echo "4. Salir. \n";
                $opcion3 = readline("Ingrese que quiere modificar: ");
                switch ($opcion3) {
                    case '1':
                        $nuevoNumViaje = readline("Ingrese el nuevo numero de viaje: \n");
                        $nuevoDestino = readline("Ingrese el nuevo destino: \n");
                        $nuevaCantMaximaPasaj = readline("Ingrese nueva cantidad de pasajeros: \n");
                        $objViaje->setNewCodigoDeViaje($nuevoNumViaje);
                        $objViaje->setNewDestino($nuevoDestino);
                        $objViaje->setNewCantMaxPasajeros($nuevaCantMaximaPasaj);
                        echo "Modificados exitosamente. \n";
                        break;
                    case '2':
                        $veriDNI = readline("Ingrese el DNI del usuario que quiere modificar: \n");
                            if ($objViaje->verificarPasajero($verifDNI)) {
                                $nuevoNombre = readline("Ingrese el nuevo nombre: \n");
                                $nuevoApellido = readline("Ingrese el nuevo apellido: \n");
                                $nuevoDNI = readline("Ingrese el nuevo numero de DNI: \n");
                                $nuevoTel = readline("Ingrese el nuevo numero de telefono: \n");
                                $pasajero = $objViaje->obtenerPasajero($veriDNI);
                                $pasajero->setNewNombre($nuevoNombre);
                                $pasajero->setNewApellido($nuevoApellido);
                                $pasajero->setNewNumeroDocumento($nuevoDNI);
                                $pasajero->setNewNumeroTelefono($nuevoTel);
                                break;
                            }
                            echo "El DNI del pasajero ingresado no se encuentra. \n";  
                        break;
                    case '3':
                        $nuevoNumEmpleado = readline("Ingrese el nuevo numero de empleado: \n");
                        $nuevoNumLicencia = readline("Ingrese el nuevo numero de licencia: \n");
                        $nuevoNomYApell = readline("Ingrese el nuevo nombre y apellido: \n");
                        $empleado = $objViaje->getObjResponsableVia();
                        $empleado->setNewNumEmpleado($nuevoNumEmpleado);
                        $empleado->setNewNumLicencia($nuevoNumLicencia);
                        $empleado->setNewNombreYApellido($nuevoNomYApell);
                        break;
                    case '4':
                        echo "Saliendo... \n";
                        break;
                    default:
                        echo "La opcion ingresada es incorrecta, ingrese un digito del 1 al 4. \n";
                        break;
                }
            } while ($opcion3 != 4);
            break;
        case '3': //TODO: Muestra los datos al usuario.
            do {
                echo "1.Datos Viaje. \n";
                echo "2.Datos Pasajero. \n";
                echo "3.Datos Responsable. \n";
                echo "4.Salir. \n";
                $opcion4 = readline("Ingrese que dato quiere ver: \n");
                
                switch ($opcion4) {
                    case '1':
                        $datosCodigoViaje = $objViaje->getCodigoDeViaje();
                        $datoDestinoViaje = $objViaje->getDestino();
                        $datoCantPasajero = $objViaje->getCantMaxPasajero();
                        echo "////////////////////////////////////////////// \n";
                        echo "Codigo de viaje: " . $datosCodigoViaje . "\n";
                        echo "Destino del viaje: " . $datoDestinoViaje . "\n";
                        echo "Dato de la cantidad de pasajeros maximos: " . $datoCantPasajero . "\n";
                        echo "////////////////////////////////////////////// \n";
                        break;
                    case '2':
                            //!FALTA SOLO ESTA PARTE...
                        break;
                    case '3':
                        
                        break;
                    case '4':
                        echo "Saliendo...";
                        break;    
                    default:
                        echo "La opcion ingresada es incorrecta, ingrese un digito del 1 al 4. \n";
                        break;
                }
            } while ($opcion4 != 4);
            break;
        case '4':
            echo "Saliendo...\n";
            break;
        default:
            echo "La opcion ingresada es incorrecta, ingrese un digito del 1 al 4. \n";
            break;
     }
 } while ($opcion != 4);