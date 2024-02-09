<?php 

namespace Modelos;
class HabitacionStandard extends Habitacion {
    public function __construct()
    {
        parent::__construct("Habitación Estandar", 40);
        parent::addCaracteristica(new CrDesayuno());
    }
}