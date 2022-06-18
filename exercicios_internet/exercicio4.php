<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <?php
        $resultado = "";
        if (isset($_POST["num1"]) and isset($_POST["num2"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if (is_numeric($num1) && is_numeric($num2)) {
                $operador = $_POST["seletor"];
                switch ($operador) {
                    case "+":
                        $resultado = $num1 + $num2;
                    break;
                    case "-":
                        $resultado = $num1 - $num2;
                    break;
                    case "*":
                        $resultado = $num1 * $num2;
                    break;
                    case "/":
                        $resultado = $num1 / $num2;
                    break;
                }
            }else {
                $resultado = "Digite números.";
            }
        }
    ?>
    <h1><?=$resultado;?></h1>
    <form method="POST">
        <label>Número 1: <input type="text" name="num1" id="num1"></label></br>
        <label>Número 2: <input type="text" name="num2" id="num2"></label></br>
        <label>Operador: 
            <select name="seletor" id="seletor">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label></br>
        <label><input type="submit" value="Calcular"></label>
    </form>
</body>
</html>