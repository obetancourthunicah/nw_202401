<?php 

require_once('Coches.php');

$coche1 = new Coches(1984,'Toyota');

$coche2 = new Coches(1984, 'Nissan', 'Pickup');

$coche3 = new Coches(1983, 'Suzuki', 'Xyz','trasera');

echo $coche1->toString() . '<br/>';
echo $coche2->toString() . '<br/>';
echo $coche3->toString() . '<br/>';
