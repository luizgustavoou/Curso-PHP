<?php
    #tem 3 jeitos abaixo que eu demonstrei para acessar variáveis global.
    $num = 1000;
    $func = function() use($num){
        //global $num;
        echo "Anônima: $num"; //. $GLOBALS["num"];
    };

    $func();
?>