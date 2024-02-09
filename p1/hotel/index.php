<?php
require_once 'vendor/autoload.php';

use \Reservas\Reserva;

$reserva = new Reserva(
    "Orlando",
    2,
    3,
    '2024-03-01',
    'VIP'
);

echo $reserva->toString();