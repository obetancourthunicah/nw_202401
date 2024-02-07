<?php
$intEdadMaxima = 21;
$strEdadMaxima = "Ventiuno ($intEdadMaxima)";
$isOk = true;
$dblPrecio = 10.4;


$txtNombre = "";
$intEdad = 0;

if (isset($_POST["btnEnviar"])) {
    // Todo lo que viene de html por un formulario ES TEXTO
    $txtNombre = $_POST["txtNombre"];
    $intEdad = intval($_POST["intEdad"]);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scripts</title>
</head>

<body>
    <h1>Hola Mundo</h1>
    <table>
        <tr>
            <td>Entero</td>
            <td><?php echo $intEdadMaxima;  ?></td>
        </tr>
        <tr>
            <td>Cadena</td>
            <td><?php echo $strEdadMaxima;  ?></td>
        </tr>
        <tr>
            <td>Boleano</td>
            <td><?php echo $isOk;  ?></td>
        </tr>
        <tr>
            <td>Punto Flotante</td>
            <td><?php echo $dblPrecio;  ?></td>
        </tr>
    </table>
    <hr/>
    <section>
        <form action="index.php" method="POST">
            <label for="txtNombre">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Nombre" />
            <br />
            <label for="intEdad">Edad</label>
            <input type="number" min="0" max="150" name="intEdad" id="intEdad" value="" />
            <br />
            <button type="submit" name="btnEnviar">Enviar</button>
        </form>
    </section>
    <hr/>
    <?php
    if ($intEdad > 0) {
        for ( $i = 0; $i < $intEdad; $i++) {
            echo '<div class="hola">' . $txtNombre . ' ' . ($i + 1) . '</div>';
        }
    }
    ?>

</body>

</html>