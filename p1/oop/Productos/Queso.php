<?php 
require_once("Productos/Producto.php");

class Queso extends Producto{
    public function __construct()
    {
        parent::__construct("Queso", 15);
    }
}

?>