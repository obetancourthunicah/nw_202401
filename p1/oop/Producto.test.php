<?php 
require_once("Productos/Hamburguesa.php");
require_once("Productos/Queso.php");

$hamburgues = new Hamburguesa();
$hamburgues->addExtra(new Queso());
echo $hamburgues->toString();

?>