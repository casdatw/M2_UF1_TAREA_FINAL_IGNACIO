<?php

class Empleado_nuevo {
    protected $nombre;
    protected $apellido;
    protected $antiguedad;
    protected $regalo;

    public function __construct($nombre, $apellido, $antiguedad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->antiguedad = $antiguedad;
        $this->regalo = "perfume";        
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getAntiguedad() {
        return $this->antiguedad;
    }
    public function getRegalo() {
        return $this->regalo;
    }
}
     
?>
