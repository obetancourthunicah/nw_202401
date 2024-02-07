<?php 
require_once("lib.php");
$churros = getChurros();
$sodas = getSodas();
$panes = getPan();

$cmbChurros = 'GA001';
$cmbSodas = 'SD001';
$cmbPanes = 'PN001';

$txtCliente = '';

if (isset($_POST["btnOrdenar"])){
    $cmbChurros = $_POST["cmbChurros"];
    $cmbSodas = $_POST["cmbSodas"];
    $cmbPanes = $_POST["cmbPanes"];
    $txtCliente = $_POST["txtCliente"];
    saveOrder($txtCliente, $cmbChurros, $cmbSodas, $cmbPanes);
    $cmbChurros = 'GA001';
    $cmbSodas = 'SD001';
    $cmbPanes = 'PN001';
    $txtCliente = '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La pulpe</title>
</head>
<body>
    <h1>La Pulpe Orden</h1>
    <a href="orders.php">Ir a ver ordenes registradas</a>
    <form action="form.php" method="post">
        <label for="txtCliente">Nombre</label>
        <input type="text" value="<?php echo $txtCliente; ?>" name="txtCliente"
        id="txtCliente" placeholder="Nombre del Cliente" />
        <br/>
        <label for="cmbChurros">Churros</label>
        <select id="cmbChurros" name="cmbChurros">
            <?php 
                foreach ($churros as $churro) {
                    echo '<option value="'
                        .$churro["sku"]
                        .'" '
                        . (($cmbChurros === $churro["sku"]) ? 'selected' : '') 
                        .'>'
                        . $churro["name"] . ' (' . $churro["precio"] . ')' 
                        .'</option>';
                }
            ?>
        </select><br/>
        <label for="cmbSodas">Sodas</label>
        <select id="cmbSodas" name="cmbSodas">
            <?php 
                foreach ($sodas as $soda) {
                    echo '<option value="'
                        .$soda["sku"]
                        .'" '
                        . (($cmbSodas === $soda["sku"]) ? 'selected' : '') 
                        .'>'
                        . $soda["name"] . ' (' . $soda["precio"] . ')' 
                        .'</option>';
                }
            ?>
        </select><br/>
        <label for="cmbPanes">Panes</label>
        <select id="cmbPanes" name="cmbPanes">
            <?php 
                foreach ($panes as $pan) {
                    echo '<option value="'
                        .$pan["sku"]
                        .'" '
                        . (($cmbPanes === $pan["sku"]) ? 'selected' : '') 
                        .'>'
                        . $pan["name"] . ' (' . $pan["precio"] . ')' 
                        .'</option>';
                }
            ?>
        </select><br/>
        <button name="btnOrdenar">Ordenar</button>
    </form>
</body>
</html>