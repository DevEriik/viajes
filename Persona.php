<?php

class Persona{
    // !ATRIBUTOS
    private $nombre;
    private $apellido;
    private $numeroDocumento;
    private $numeroTelefono;

    // !CONSTRUCTOR 
    public function __construct($nombre, $apellido, $numeroDocumento, $numeroTelefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDocumento = $numeroDocumento;
        $this->numeroTelefono = $numeroTelefono;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

     public function getNombre(){
        return $this->nombre;
     }

     public function getApellido(){
        return $this->apellido;
     }

     public function getNumeroDocumento(){
        return $this->numeroDocumento;
     }

     public function getNumeroTelefono(){
         return $this->numeroTelefono;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

     public function setNewNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
     }

     public function setNewApellido($nuevoApellido){
        $this->apellido = $nuevoApellido;
     }

     public function setNewNumeroDocumento($nuevoNumeroDocumento){
        $this->numeroDocumento = $nuevoNumeroDocumento;
     }

     public function setNewNumeroTelefono($nuevoNumTel){
         $this->numeroTelefono = $nuevoNumTel;
     }

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        return
                  "Nombre: " .$this->getNombre(). "\n" . 
                  "Apellido: " . $this->getApellido() . "\n" . 
                  "Numero DNI: " .$this->getNumeroDocumento() . "\n" . 
                  "Numero de Telefono: " . $this->getNumeroTelefono() . "\n" . 
               "--------------------------------------------------\n";
     }
}