<?php
/*
1) Installar Composer   ```composer --version```
2) Crear la Carpeta del Proyecto  ```oopComposer```
3) Crear el archivo composer.json !!!!psr-4 y carpeta src
4) ```composer install```  para crear el archivo vendor/autoload.php
5) Crear nuestras Clases de php en la carpeta src.

*/
require_once 'vendor/autoload.php';

$mainObj = new Main();

$habitacionMdl = new Modelos\Habitacion();
$habitacionPage = new Paginas\Habitacion();

echo $mainObj->SayHello();
