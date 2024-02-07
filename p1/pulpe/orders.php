<?php
require_once "lib.php";

if (isset($_POST["btnReset"])) {
    resetOrdenes();
}

$ordenes = getOrdenesFromSession();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ordenes de la Pulpe</title>
    <style>
        table {
            width:100%;
        }
        table td, table th{
            border: 1px solid #222;
        }
        table tbody tr:nth-child(2n) {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <h1>Listado de Ordenes de la Pulpe</h1>
    <a href="form.php">Ir a Crear Orden</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Productos</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $contador = 1;
            $totalOrdenes = 0;
            foreach ($ordenes as $orden) {
            ?>
            <tr>
                <td><?php echo $contador; $contador ++; ?></td>
                <td><?php echo $orden["cliente"]; ?></td>
                <td>
                    <ol>
                        <li><?php echo $orden["churro"]["name"] 
                                    . " - " . $orden["churro"]["precio"]; 
                            ?></li>
                        <li><?php echo $orden["soda"]["name"] 
                                    . " - " . $orden["soda"]["precio"]; 
                            ?></li>
                        <li><?php echo $orden["pan"]["name"] 
                                    . " - " . $orden["pan"]["precio"]; 
                            ?></li>
                    </ol>
                </td>
                <td><?php 
                    echo $orden["total"]; 
                    $totalOrdenes += $orden["total"]; 
                ?></td>
            </tr>
            <?php } //foreach ordenes ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Total</td>
                <td><?php echo $totalOrdenes; ?></td>
            </tr>
        </tfoot>
    </table>
    <form action="orders.php" method="post">
        <button type="submit" name="btnReset">Limpiar Ordenes</button>
    </form>
</body>
</html>