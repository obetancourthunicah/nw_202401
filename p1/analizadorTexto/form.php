<?php 
require_once "lib.php";
$txtTexto = '';
$txtRegex = '';
if(isset($_POST["btnAnalizar"])){
    $txtTexto = $_POST["txtTexto"];
    $txtRegex = $_POST["txtRegex"];
    echo $txtTexto;
    echo '<hr/>';
    print_r(analizarTexto($txtTexto));
    echo '<hr/>';
    print_r(extraerPalabrasPorExpresionRegular($txtTexto, '/ /'));
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Texto</title>
</head>
<body>
    <h1>Analizador de Texto</h1>
    <form action="form.php" method="post">
        <label for="txtTexto">Texto a Analizar</label>
        <textarea name="txtTexto" id="txtTexto"><?php echo $txtTexto; ?></textarea>
        <br/>
        <label for="txtRegex">Expresion Regular</label>
        <input type="text" value="<?php echo $txtRegex; ?>" name="txtRegex" id="txtRegex" />
        <br/>
        <button type="submit" name="btnAnalizar">Analizar</button>
        <button type="submit" name="btnRegex">Analizar con Regex</button>
    </form>
</body>
</html>