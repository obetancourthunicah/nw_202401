<?php 
require_once("Productos/Producto.php");
require_once("Productos/Carne.php");
require_once("Productos/Queso.php");

class Hamburguesa extends Producto {
    public function __construct(){
        parent::__construct("Hamburguesa", 140.5);
        $carne = new Carne();
        $carne->addExtra(new CarneDoble());
        $this->addExtra($carne);
        $this->addExtra(new Queso());
    }
}

?>