<?php
    //Diferente do método GET, o método POST ele guarda as informações no cabeçalho do HTML. Ou seja, ele não expõe os valores que estão sendo enviados na URL, mas sim ele encapsula os dados do cabeçalho da requisição http que está sendo enviado ao servidor web

    //Quando estamos trabalhando com informações confidenciais o método POST será por sua definição e abstração mais seguro.
    //Quando trabalharmos com informações criptografadas, também trabalharemos com o método POST, então temos que a criptografação de informações ira ocorrer no cabeçalho da requisição que esta sendo enviado para o servidor

    #RESUMO: A DIFERENÇA ENTRE MÉTODO GET E POST é a forma como os dados são trafegados, a forma que são expostos.

    //var_dump($_POST);

    echo 'Nome: ' . ($_POST['nome'] ?? '') . "</br>";
    echo 'Email: ' . ($_POST['email'] ?? '') . "</br>";
    echo $_GET['xget'];

    

?>
