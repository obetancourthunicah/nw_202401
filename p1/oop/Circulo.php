<?php 
require_once("IForma.php");
class Circulo implements IForma{
    private $radio = null;

    public function setRadio($radio){
        $this->radio = $radio;
    }

    public function toString(){
        return 'Circulo >> radio: ' . $this->radio;
    }

    public function perimetro(){
        return 2 * pi() * $this->radio;
    }

    public function area() {
        return pi() * pow($this->radio,2);
    }


}

?>