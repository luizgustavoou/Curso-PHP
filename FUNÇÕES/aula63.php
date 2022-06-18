<?php
    //PARÂMETROS DEFAULT. Podemos declarar funções que contenham parâmetros que são inicializados na declaração, isto é, definimos uma valor por default a uma ou mais parâmetros que estão sendo definidos junto com a função.

    #function artigo($url, $coding="UTF-8", $idioma="pt-BR") {}

    function login ($user="root", $key="123") {
        echo "user = " . $user . " ";
        echo "key = " . $key . "</br>"; 
    }
    login();
    login("FireEmpere", "luizgustavo123@");
?>