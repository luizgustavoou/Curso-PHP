<?php
    //$_GET - superglobal de uso em requisições GET
    //$_POST - superglobal de uso em requisições POST
    //$_REQUEST - superglobal de uso geral (GET e POST). Irá conter todos os dados vindo da internet. Porém sua utilização pode ocasionar alguns problemas, sendo aconselhável não usá-la.
    var_dump($_POST);
    var_dump($_GET);
    
    //echo 'Nome: ' . ($_REQUEST['nome'] ?? '') . "</br>";
    //echo 'E-mail: ' . ($_REQUEST['email'] ?? '') . "</br>";
?>