<?php
    class Empleado_honor extends Empleado_nuevo {
    public function __construct($nombre, $apellido, $antiguedad) {
        parent::__construct($nombre, $apellido, $antiguedad); 
        $this->regalo = "viaje";
        
    }
}
?>