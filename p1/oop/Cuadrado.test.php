<?php
require_once('Cuadrado.php');
require_once('Circulo.php');
$cuadrado3;
$cuadrado3 = new Circulo();
$cuadrado1 = new Cuadrado();
$cuadrado2 = new Cuadrado(30,40);
$circulo1 = new Circulo();
$circulo1->setRadio(2);
$circulo2 = new Circulo();
$circulo2->setRadio(7);
$formas = [
    $cuadrado1,
    $circulo1,
    $cuadrado2
];
echo $cuadrado1->toString() . '<br/>';
$cuadrado1->setAncho(10);
$cuadrado1->setAlto(20);
echo $cuadrado1->toString() . '<br/>';
echo $cuadrado2->toString() . '<br/><hr/>';
foreach($formas as $forma) {
    echo $forma->toString() . '<br/>';
}
?>