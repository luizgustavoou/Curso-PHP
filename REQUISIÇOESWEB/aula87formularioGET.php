<?php
    #FORMULÁRIO HTML
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML - CURSO PHP - eXcript</title>
</head>
<body>
    <form action="aula87metodoget.php" method="GET">
        <fieldset>
            <legend>Formulário HTML</legend>

            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </p>

            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </p>

            <p>
                <input type="submit" value="Enviar" id="enviar">
            </p>
        </fieldset>
    </form>
</body>
</html>