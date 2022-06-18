<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo "do while"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (isset($_POST["dep"])) {
            $dependentes = $_POST["dep"];
            if (!is_numeric($dependentes)) {
                $dependentes = 1;
                echo "nao numerico";
            } 
            $conta = 0;
            echo "<table>
        <tr>
            <td></td>
            <td>Nome</td>
            <td>Nascimento</td>
        </tr>
        ";
            do {
                $conta++;
                echo "
                <tr>
                    <td>Dependente $conta</td>
                    <td><input type='text' name='nome' id='nome'></td>
                    <td><input type='text' name='nascimento' id='nascimento'></td>
                </tr>";
            }while ($conta < $dependentes);
            
            echo "</table>";
        }
    ?>
    <form method="POST">
        <input type="number" name="dep" id="dep">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>