<?php 

namespace Modelos;

class CrTodoIncluido implements ICaracteristica {
    public function getName():string
    {
        return "Todo Incluido";
    }
    public function getPrice():float
    {
        return 100;
    }
    public function getDescription(): string
    {
        return "Todo Incluido, hospedaje, desayuno, almuerzo y cena, snacks y bebidas nacionales.";
    }
}

?>