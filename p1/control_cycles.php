<?php
$txtTexto = '';
$intNum1 = 0;
$intNum2 = 0;
$txtResult = '';

if (isset($_POST["btnOpcion1"]) 
    || isset($_POST["btnOpcion2"])
    || isset($_POST["btnOpcion3"])
) {
    $txtTexto = $_POST["txtTexto"];
    $intNum1 = intval($_POST["intNum1"]);
    $intNum2 = intval($_POST["intNum2"]);

    if (isset($_POST["btnOpcion1"])) {
        $txtResult = $txtTexto . " - " . $intNum1 . " + " . $intNum2 . " = " . ($intNum1 + $intNum2);
    } elseif (isset($_POST["btnOpcion2"])) {
        $intDiferencia = ($intNum1 - $intNum2) >= 0 ? $intNum1 - $intNum2 : ($intNum1 - $intNum2) * -1; 
        for ($i = 0; $i < $intDiferencia; $i++ ) {
            $txtResult .= $txtTexto . " - " . $intNum1 . " * " . ($intNum2 - $i) . " = " . ($intNum1 * ($intNum2 - $i)) . "<br/>";
        }
    } else {
        $arrPrimos = array();
        $control = 1;
        $divisores = 0;
        while (($control * $control) <= $intNum1) {
            if ($intNum1 % ($control * $control) === 0 ) {
                $divisores ++;
            } else {
                $arrPrimos[] = $control;
            }
            $control ++;
        }
        if (count($arrPrimos) > 0) {
            $txtResult = "Los numeros primos de " . $intNum1 . " son: ";
            foreach($arrPrimos as $intPrimo) {
                $txtResult .= $intPrimo . ", ";
            }
        } else {
            $txtResult = "No se encontraron numeros primos";
        }
    }
}

/*

==  Se verifica el common casted value  0 == "0"   true  "123" == 123 true   false == 0  true

=== Se verifica tipo y valor "123" === 123  false   123 === 123  true  

*/

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos y Condicionales</title>
</head>
<body>
    <h1>Ciclos y Condicionales</h1>
    <form action="control_cycles.php" method="post" >
        <label for="txtTexto">Texto </label>
        <input type="text" name="txtTexto" id="txtTexto" value="<?php echo $txtTexto; ?>" placeholder="Texto" />
        <br/>
        <label for="intNum1">Numero 1 </label>
        <input type="number" name="intNum1" id="intNum1" value="<?php echo $intNum1; ?>" placeholder="Texto" />
        <br/>
        <label for="intNum2">Numero 2 </label>
        <input type="number" name="intNum2" id="intNum2" value="<?php echo $intNum2; ?>" placeholder="Texto" />
        <br/>
        <button type="submit" name="btnOpcion1">Opcion 1</button>
        <button type="submit" name="btnOpcion2">Opcion 2</button>
        <button type="submit" name="btnOpcion3">Opcion 3</button>
    </form>

    <section>
        <?php 
            echo $txtResult;
        ?>
    </section>
</body>
</html>