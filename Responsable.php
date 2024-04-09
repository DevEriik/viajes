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
                "Numero de Empleado: " . $this->numEmpleado . "\n" . 
                "Numero de Licencia: " .$this->numLicencia . "\n" . 
                "Nombre y Apellido: " .$this->nombreYApellido . "\n" . 
                 "**********************************************************\n";
    }
}