<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $mensagem = "";
        $gerar_matriz = function($menor, $maior) {
            return range($menor, $maior);
        };
        function retornar_matriz(int $menor, int $maior, $gerar_matriz): array {
            return $gerar_matriz($menor, $maior);
        }
        $printar_matriz = function($menor, $maior) use($gerar_matriz, &$mensagem) {
            $mensagem = "";
            $quant = count(retornar_matriz($menor, $maior, $gerar_matriz));
            $mensagem .= "<select name='select' id='select' size='$quant'>";
            foreach(retornar_matriz($menor, $maior, $gerar_matriz) as $chave => $elemento ) {
                $mensagem .= "
                    <option value='num$chave'>$elemento</option>
                ";
            }
        };
        
        if (isset($_POST["maior"]) && isset($_POST["menor"])) {
            $maior = $_POST["maior"];
            $menor = $_POST["menor"];
            if (is_numeric($menor) && is_numeric($maior)) {
                $printar_matriz($maior, $menor);
            }else {
                $mensagem = "Digite numero";
            }
        }
    ?>
    <form action="" method="post">
        <div class="div1">
            <h1>Gerador de Lista</h1>
            <label for="">
                <p>Maior número: <input type="text" name="maior" id="maior"></p>
            </label>
            <label for="">
                <p>Menor número: <input type="text" name="menor" id="menor"></p>
            </label>
            <label for="">
                <p><input type="submit" value="Gerar Lista"></p>
                <p><?=$mensagem;?></p>
            </label>
        </div>
    </form>
</body>
</html>