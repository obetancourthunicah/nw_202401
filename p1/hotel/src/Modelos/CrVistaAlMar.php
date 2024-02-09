<?php 

namespace Modelos;

class CrVistaAlMar implements ICaracteristica {
    public function getName():string
    {
        return "Con vista al mar";
    }
    public function getPrice():float
    {
        return 50;
    }
    public function getDescription(): string
    {
        return "Hermosa vista al mar desde un lugar seguro.";
    }
}

?>