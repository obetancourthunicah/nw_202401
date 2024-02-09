<?php 

namespace Modelos;
class HabitacionTodoIncluido extends Habitacion {
    public function __construct()
    {
        parent::__construct("Habitación Todo Incluido", 40);
        parent::addCaracteristica(new CrTodoIncluido());
    }
}