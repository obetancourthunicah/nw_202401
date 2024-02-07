<?php 
require_once("IForma.php");
class Cuadrado implements IForma {
    private $ancho = null;
    private $alto = null;

    public function __construct($ancho = null, $alto = null)
    {
        if ($ancho) {
            if( intval($ancho) <= 0) {
                throw new Error("Ancho > 0");
            }
            $this->ancho = $ancho;
        }
        if ($alto) {
            if( intval($alto) <= 0) {
                throw new Error("Alto > 0");
            }
            $this->alto = $alto;
        }
    }
    public function setAncho($ancho) {
        if (intval($ancho) <= 0) {
            throw new Error("Ancho no puede ser 0 o negativo");
        }
        $this->ancho = intVal($ancho);
    }

    public function setAlto($alto) {
        if (intval($alto) <= 0) {
            throw new Error("Alto no puede ser 0 o negativo");
        }
        $this->alto = intVal($alto);
    }

    public function toString() {
        return 'Cuadrado >> ancho:' . $this->ancho  . ',  alto:' . $this->alto;
    }
    public function perimetro(){
        return ($this->ancho * 2) + ($this->alto * 2);
    }
    public function area(){
        return $this->ancho * $this->alto;
    }
}


?>