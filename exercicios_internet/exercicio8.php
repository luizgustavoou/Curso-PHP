<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8.</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>
    <?php
        $resultado = "";
        if (isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"])) {
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
                $notas[] = $nota1;
                $notas[] = $nota2;
                $notas[] = $nota3;
                $somatotal = 0;
                $quant = count($notas);
                foreach ($notas as $nota) {
                    $somatotal += $nota;

                }
                $media = $somatotal / $quant;
                if ($media >= 6) {
                    $resultado = "Média: $media (APROVADO)";
                }else {
                    $resultado = "Média: $media (REPROVADO)";
                }
            }else {
                $resultado = "Digite números.";
            }
        }
    ?>
    <h1 style="color: white"><?=$resultado;?></h1>
    <form method="POST">
        <label>Nota 1: <input type="text" name="nota1" id="nota1"></label></br>
        <label>Nota 2: <input type="text" name="nota2" id="nota2"></label></br>
        <label>Nota 3: <input type="text" name="nota3" id="nota3"></label></br>
        <label><input type="submit" value="Calcular"></label>
    </form>
</body>
</html>