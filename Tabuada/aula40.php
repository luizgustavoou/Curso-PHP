<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<?php
    if (isset($_POST["num"])) {
        $numero = $_POST["num"];
        if (!is_numeric($numero)) {
            $numero = 1;
        }
        $cont = 0;
        echo "<select name='tabela' id='tabela' size='10'>";
        do {
            $cont++;
            $resultado = $cont * $numero;
            echo "<option value='val$cont'>$numero x $cont = $resultado</option>";
        }while ($cont < 10);
        echo "</select>";

    }
?>
    <form method="POST">
        <input type="text" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>