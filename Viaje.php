<?php 
/** 
 * *La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. 
 * * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
-------------------------------------------------------------------------------------------------------------------------------------
    * *Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase
    * * (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información correspondiente a los 
    * *pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.
-------------------------------------------------------------------------------------------------------------------------------------
    * *Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar 
    * *la información del viaje, modificar y ver sus datos.
-------------------------------------------------------------------------------------------------------------------------------------
    * *Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, 
    * *numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
    * *También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV 
    * *que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al 
    * *responsable de realizar el viaje.
-------------------------------------------------------------------------------------------------------------------------------------
    * *Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar 
    * *la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el 
    * *pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */

class Viaje{
    // !ATRIBUTOS
    private $codigoDeViaje;
    private $destino;
    private $cantMaxPasajero; //Cantidad Maxima de pasajeros. 
    private $objPasajerosViaje; // Coleccion de personas. 

    // !CONSTRUCTOR 
    public function __construct($codigoDeViaje, $destino, $cantMaxPasajero, $objPasajerosViaje){
        $this->codigoDeViaje = $codigoDeViaje;
        $this->destino = $destino;
        $this->cantMaxPasajero = $cantMaxPasajero;
        $this->objPasajerosViaje = $objPasajerosViaje;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function getCodigoDeViaje(){
        return $this->codigoDeViaje;
     }

     public function getDestino(){
        return $this->destino;
     }

     public function getCantMaxPasajero(){
        return $this->cantMaxPasajero;
     }

     public function getObjPasajerosDelViaje(){
        return $this->objPasajerosViaje;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function setNewCodigoDeViaje($nuevoCodigoViaje){
        $this->codigoDeViaje = $nuevoCodigoViaje;
     }

     public function setNewDestino($nuevoDestino){
        $this->destino = $nuevoDestino;
     }

     public function setNewCantMaxPasajeros($nuevaCantMaxPasajeros){
        $this->cantMaxPasajero = $nuevaCantMaxPasajeros;
     }

     public function setNewPasajerosDelViaje($nuevoPasajerosDelViaje){
        $this->objPasajerosViaje = $nuevoPasajerosDelViaje;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */
    
     public function __toString(){
        return "Codigo de viaje: " .$this->codigoDeViaje . "\n" . 
                "Destino: " . $this->destino . "\n" . 
                "Cantidad maxima de pasajeros: " .$this->cantMaxPasajero . "\n" . 
                "Pasajeros del viaje: " . $this->objPasajerosViaje . "\n" ;
     }


}