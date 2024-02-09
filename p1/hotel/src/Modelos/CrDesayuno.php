<?php 

namespace Modelos;

class CrDesayuno implements ICaracteristica {
    public function getName():string
    {
        return "Desayuno Incluido";
    }
    public function getPrice():float
    {
        return 30;
    }
    public function getDescription(): string
    {
        return "Desayuno Continental Variado incluido";
    }
}

?>