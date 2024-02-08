<?php

class Coches
{
    private string $transmicion = 'delantera';
    private string $marca = '';
    private string $modelo = '';
    private int $anio = 0;
    public function __construct(
        int $anio,
        string $marca,
        string $modelo = 'Turismo',
        string $transmicion = 'delantera'
    ) {
        $this->anio = $anio;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->transmicion = $transmicion;
    }
    public function toString(){
        return sprintf(
            "Coche: %s - %d - %s - %s",
            $this->marca,
            $this->anio,
            $this->modelo,
            $this->transmicion
        );
    }
}
