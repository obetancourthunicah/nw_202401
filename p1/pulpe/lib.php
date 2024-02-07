<?php 
session_start();
function getChurros() {
    return [
        [
            "sku" => "GA001",
            "name" => "Churos Diana",
            "precio" => 5.25
        ],
        [
            "sku" => "GA002",
            "name" => "Churos Zambos",
            "precio" => 8.25
        ],
        [
            "sku" => "GA003",
            "name" => "Churos Cappy",
            "precio" => 2.25
        ],
        [
            "sku" => "GA004",
            "name" => "Churos Munchies",
            "precio" => 20.25
        ],
        [
            "sku" => "GA005",
            "name" => "Churos Futbolitos",
            "precio" => 3.50
        ]
    ];
}
function getSodas() {
    return [
        [
            "sku" => "SD001",
            "name" => "Coca Cola",
            "precio" => 18
        ],
        [
            "sku" => "SD002",
            "name" => "Sprite",
            "precio" => 19
        ],
        [
            "sku" => "SD003",
            "name" => "Fanta",
            "precio" => 15
        ],
        [
            "sku" => "SD004",
            "name" => "Fresca",
            "precio" => 15
        ],
        [
            "sku" => "SD005",
            "name" => "Dr. Pepper",
            "precio" => 30
        ],
    ];
}
function getPan() {
    return [
        [
            "sku" => "PN001",
            "name" => "Semitas de yema",
            "precio" => 40
        ],
        [
            "sku" => "PN002",
            "name" => "Pan Blanco Monarca",
            "precio" => 60
        ],
        [
            "sku" => "PN003",
            "name" => "Polvorones",
            "precio" => 24
        ],
        [
            "sku" => "PN004",
            "name" => "Margaritas",
            "precio" => 10
        ],
        [
            "sku" => "PN005",
            "name" => "Pollitos",
            "precio" => 30
        ],
    ];
}
function getBySku ($prdArray, $sku) {
    $product = null;
    foreach ($prdArray as $crntProd) {
        if ( $crntProd["sku"] === $sku) {
            $product = $crntProd;
            break;
        }
    }
    return $product;
}
function getChurrosBySku( $sku ) {
    return getBySku(getChurros(), $sku);
}
function getSodasBySku( $sku ) {
    return getBySku(getSodas(), $sku);
}
function getPanBySku( $sku ) {
    return getBySku(getPan(), $sku);
}
function saveOrder($name, $skuChurro, $skuSoda, $skuPan) {
    $orden = [
        "cliente" => $name,
        "churro" => getChurrosBySku($skuChurro),
        "soda" => getSodasBySku($skuSoda),
        "pan" => getPanBySku($skuPan)
    ];

    $total = $orden["churro"]["precio"]
            + $orden["soda"]["precio"]
            + $orden["pan"]["precio"];

    $orden["total"] = $total;

    saveOrderToSession($orden);
}
function saveOrderToSession( $orden ) {
    $ordenes = getOrdenesFromSession();
    $ordenes[] = $orden;
    $_SESSION["ordenes"] = $ordenes;
}
function getOrdenesFromSession () {
    $ordenes = [];
    if (isset($_SESSION["ordenes"])) {
        $ordenes = $_SESSION["ordenes"];
    }
    return $ordenes;
}

function resetOrdenes () {
    $_SESSION["ordenes"] = [];
}
?>