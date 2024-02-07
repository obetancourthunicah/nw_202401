<?php 

abstract class Producto {
    private float $precio = 0;
    private string $nombre = "";
    private array $extras = [];

    public function __construct(string $nombre = "", float $precio = 0)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function addExtra (Producto $extra ) {
        $this->extras[] = $extra;
    }
    public function getTotalPrice () {
        $precioTotal = 0;
        foreach ($this->extras as $extra) {
            $precioTotal += $extra->getTotalPrice();
        }
        $precioTotal += $this->precio;
        return $precioTotal;
    }
    public function toString(){
        $buffer = [];
        $buffer[] = "<div><strong>" . $this->nombre . "</strong><span>"
            . $this->getTotalPrice() . "</span>";
        foreach ($this->extras as $extra){
            $buffer[] = $extra->toString();
        }
        $buffer[] = '</div>';
        return implode("", $buffer);
    }
}

?>