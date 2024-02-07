<?php 
require_once("Productos/Producto.php");

class Carne extends Producto {
    public function __construct() {
        parent::__construct("Carne", 30);
    }
}

class CarneDoble extends Producto {
    public function __construct() {
        parent::__construct("Carne", 30);
    }
}

class TripleCarne extends Producto {
    public function __construct() {
        parent::__construct("Carne", 30);
    }
}
?>