<?php

namespace Reservas;

use DateInterval;
use Modelos\FabricaHabitaciones;
use Modelos\Habitacion;

class Reserva {
    private string $cliente;
    private int $noches;
    private string $fchDesde;
    private string $fchHasta;
    private Habitacion $habitacion;
    private int $personas;

    public function __construct(
        string $cliente,
        int $noches,
        int $personas,
        string $fchDesde,
        string $tipoHabitacion
    )
    {
        $this->cliente = $cliente;
        $this->noches = $noches;
        $this->personas = $personas;
        $this->fchDesde = $fchDesde;
        $this->fchHasta = $this->getFechaHasta($fchDesde, $noches);
        $this->habitacion = FabricaHabitaciones::getHabitacion($tipoHabitacion);
    }
    private function getFechaHasta (string $fchDesde, int $noches) : string 
    {
        $dInterval =  DateInterval::createFromDateString("$noches day");
        $fchDesde = date_add(date_create($fchDesde), $dInterval);
        return $fchDesde->format('Y-m-d');
    }
    public function getPrecio():float
    {
        return $this->noches * $this->personas * $this->habitacion->getTotalPrice();
    }
    public function toString():string
    {
        $diccionario = [
            "cliente" => $this->cliente,
            "desde" => $this->fchDesde,
            "hasta" => $this->fchHasta,
            "noches" => $this->noches,
            "habitacion" => json_decode($this->habitacion->toString()),
            "precio" => $this->getPrecio()
        ];

        return json_encode($diccionario, JSON_PRETTY_PRINT);
    }
}