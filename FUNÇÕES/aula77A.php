<?php
    //Escopo de nomes das funções anônimas.
    //O escopo de nome das funções anônimas funcionam da mesma forma que o escopo de nome de qualquer função, isto é, os membros declarados dentro desta possuem escopo restrito ao local em que foram declaradas e também, para acessar membros externos, faz-se necessário declará-los explicitamente no cabeça-lho da função.

    $num = 100;
    $func = function() {
        $num = 5;
    };
    $func();

    echo $num; //100
?>