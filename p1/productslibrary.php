<?php 
$arrNewProducts = array();
// Listas
$arrRetiredProducts = [
    'SKU001', // 0
    'SKU002', // 1
    'SKU003' // 2
];

echo $arrRetiredProducts[0];
// Diccionario
$arrSalesProducts = [
    "SKU003" => "Producto A",
    "SKU004" => "Producto B"
];

echo $arrSalesProducts["SKU004"];

/////////////////
$productoA = array(
    "sku"=>"SKU0001",
    "description" => "Producto 0001",
    "price" => 100.99,
    "isEnabled" => true,
    "tags" => ['A Rate', 'Lacteo', 'Oferta']
);

$productoB = array(
    "sku"=>"SKU0002",
    "description" => "Producto 0002",
    "price" => 49.99,
    "isEnabled" => true,
    "tags" => ['C Rate', 'Lacteo', 'Remate']
);

$arrProductos = [
    $productoA,
    $productoB
];

$arrProducos["abc"] = $productoC;


$arrFrankenstein = [
    "Primer Dato", //0
    "Segundo Dato", //1
    100, // 2
    true, // 3
    "isEnabled" => true, 
    "Adios", // 5,
    6 => "Adios 2",
    "Adios 3"
];

?>