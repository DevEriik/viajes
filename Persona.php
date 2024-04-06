<?php

class Persona{
    // !ATRIBUTOS
    private $nombre;
    private $apellido;
    private $numeroDocumento;

    // !CONSTRUCTOR 
    public function __construct($nombre, $apellido, $numeroDocumento){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDocumento = $numeroDocumento;
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

     /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

     public function __toString(){
        return "Nombre: " .$this->nombre. "\n" . 
                "Apellido: " . $this->apellido . "\n" . 
                "Numero DNI: " .$this->numeroDocumento . "\n";
     }
}