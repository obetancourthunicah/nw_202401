<?php 

namespace Modelos;
class HabitacionVIP extends Habitacion {
    public function __construct()
    {
        parent::__construct("Habitación VIP", 40);
        parent::addCaracteristica(new CrTodoIncluido());
        parent::addCaracteristica(new CrVistaAlMar());
    }
}