<?php
    //Variáveis variáveis é uma notação da linguagem PHP que permite-nos associar um valor qualquer a referência que será formada através do valor contido numa variável. A definição conceitual é bastante complicada, porém, é bastante simples a forma de trabalho e como utilizar o conceito de variáveis variáveis da melhor maneira.

    $varvar = "Teste";
    $$varvar = 10; //o nome da variavel $$varvar é Teste
    echo $Teste. "</br>";
    echo $varvar. " " . $$varvar . "</br>";
    
    //
    $num = 10;
    $$num = 1000;
    echo $num . " " . $$num;

    //ERRO abaixo, tentando com ARRAY:

    $arr = [1,2,3];
    $$arr = 9;
    echo $$arr;


?>