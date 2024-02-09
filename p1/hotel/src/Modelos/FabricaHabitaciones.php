<?php 

namespace Modelos;

use \Error;

class FabricaHabitaciones {
    private function __construct()
    {
        // Hack para evitar instanciar esta clase
    }
    public static function getHabitacion(string $tipo) : Habitacion
    {
        switch ($tipo) {
            case 'STD':
                return new HabitacionStandard();
            case 'HTI':
                return new HabitacionTodoIncluido();
            case 'VIP':
                return new HabitacionVIP();
            default:
                throw new Error("Tipo de Habitacion debe ser STD, HTI, VIP");
        }
    }
}
