<?php

namespace Modelos;
abstract class Habitacion {
    private array $caracteristicas;
    private string $name;
    private float $basePrice;

    public function __construct(string $name, float $basePrice)
    {
        $this->name = $name;
        $this->basePrice = $basePrice;
    }
    public function addCaracteristica(ICaracteristica $caracteristica):void {
        $this->caracteristicas[] = $caracteristica;
    }
    public function getTotalPrice(): float {
        $precioTotal = 0;
        foreach ($this->caracteristicas as $caracteristica) {
            $precioTotal += $caracteristica->getPrice();
        }
        return $precioTotal + $this->basePrice;
    }
    public function toString(): string
    {
        $caracteristicas = [];
        foreach($this->caracteristicas as $car) {
            $caracteristicas[] = $car->getName() . " - " . $car->getPrice();
        }
        $diccionario = [
            "tipo"=> $this->name,
            "precioBase"=>$this->basePrice,
            "caracteristicas" => $caracteristicas,
            "precioXNocheXPersona" => $this->getTotalPrice() 
        ];

        return json_encode($diccionario);
    }

}