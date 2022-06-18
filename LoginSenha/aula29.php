<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin e Senha</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    $login = "FireEmpere";
    $senha = "luizgustavo123@";
        if (isset($_POST["login"])) {
            if ($_POST["login"] == $login && $_POST["senha"] == $senha) {
                echo "<p>Login efetuado com sucesso.</p>";
            }else {
                echo "<p>Login ou senha inválidos.</p>";
            }
        }
    ?>
    <header>
        <h1>Sistema de Login</h1>
    </header>
    <div id="msg">
        <form method="POST">
            <input type="text" name="login" id="login"></br>
            <input type="password" name="senha" id="senha"></br>
            <input type="submit" value="Entrar" id= "teste" onclick="clicar()">
        </form>
    </div>
</body>
</html>