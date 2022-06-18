<?php
    //FUNÇÕES ANÔNIMAS.
    //Funções anônimas são funções que não possuem nome, isto é, blocos de instruções que podem receber parâmetros, podem retornar valores porém, não podem ser invocados diretamente.
    
    //Função de primeira ordem é um bloco de código que pode:
        //ser invocado indiretamente;
        //receber parâmetros;
        //retornar valores;
        //ser passada como parâmetro;
    //mas não possui uma refêrência que a identifica.
    //Sinôminos: FUNÇÕES ANÔNIMAS, FUNÇÕES DE PRIMEIRA ORDEM, FUNÇÕES DE ORDEM SUPERIOR, CLOSURES, FUNÇÕES LAMBDA.

    $func = function($nome) {
        echo "Isso é uma função anônima, e o nome enviado como parâmetro é: $nome";
    }; //é obrigatório o uso de ponto e vírgula para funções anônimas.

    function teste($f) {
        $f("Cláudio");
    }
    $func("eXcript</br>");
    
    teste($func);


?>