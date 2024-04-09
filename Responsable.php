<?php 

class ResponsableV{
    //! ATRIBUTOS
    private $numEmpleado;
    private $numLicencia;
    private $nombreYApellido;

    //!CONSTRUCTOR 
    public function __construct($numEmpleado, $numLicencia, $nombreYApellido){
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this-> nombreYApellido = $nombreYApellido;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO GETTER ****************************
     * ! **********************************************************************
     */

    public function getNumEmpleado(){
        return $this->numEmpleado;
    }

    public function getNumLicencia(){
        return $this->numLicencia;
    }

    public function getNombreYApellido(){
        return $this->nombreYApellido;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO SETTER ****************************
     * ! **********************************************************************
     */

    public function setNewNumEmpleado($nuevoNumEmpleado){
        $this->numEmpleado = $nuevoNumEmpleado;
    }

    public function setNewNumLicencia($nuevoNumLicencia){
        $this->numLicencia = $nuevoNumLicencia;
    }

    public function setNewNombreYApellido($nuevoNomYApell){
        $this->nombreYApellido = $nuevoNomYApell;
    }

    /** 
     * ! **********************************************************************
     * ! *************************** METODO __toString ************************
     * ! **********************************************************************
     */

    public function __toString(){
        return   "*****************RESPONSABLE******************************\n" .
                "Numero de Empleado: " . $this->getNumEmpleado() . "\n" . 
                "Numero de Licencia: " .$this->getNumLicencia() . "\n" . 
                "Nombre y Apellido: " .$this->getNombreYApellido() . "\n" . 
                 "**********************************************************\n";
    }
}