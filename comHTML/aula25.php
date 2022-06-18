<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente para estudo</title>
</head>
<body>
    <?php
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];
        if ($idade < 18) {
            echo "a idade  eh de um jovem";
        }else if ($idade < 60) {
            echo "a idade eh de um adulto";
        }else {
            echo "a idade eh de um idoso";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="idade" id="idade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>