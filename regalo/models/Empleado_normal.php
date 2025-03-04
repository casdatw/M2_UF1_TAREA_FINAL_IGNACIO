<?php
    class Empleado_normal extends Empleado_nuevo {
        public function __construct($nombre, $apellido, $antiguedad) {
            parent::__construct($nombre, $apellido, $antiguedad); 
            $this->regalo = "jamón";
        }
    }


?>