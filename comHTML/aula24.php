<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente para estudo</title>
</head>
<body>
    <?php
        if (isset($_POST["valor1"])) {
            if ($_POST["valor1"] % 2 == 0) {
                echo "é par";
            }else {
                echo "é ímpar";
            }
        }
    ?>
    <form method="POST">
        <input type="text" name="valor1" id="valor1">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>