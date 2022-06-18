<?php
    //PARÂMETROS TIPADOS.
    //Nesta aula estudaremos como passar parâmetro de um determinado tipo por parâmetro. Esse recurso foi adicionado a versão 7 do PHP e faz com que tenhamos certeza o tipo de informação que receberemos como parâmetro.

    #FUNÇÕES COM PARÂMETROS TIPADOS:

    declare(strict_types=1); //irá dizer ao PHP para nao converter uma string para int, nao ter excecao, dando assim erro quando isso acontecer.

    #ex 1:
    function getArea(int $x, int $y) {
        return $x * $y;
    }
    echo getArea(10,5); //Caso tenha uma STRING, tipo "10" ou "5", o PHP irá converter automaticamente em inteiro (str pra int). >>>OBS: Com o  declare(strict_types=1); irá dar erro.<<<

    #ex 2:
    function getSum (int ...$valores) {
        return array_sum($valores);
    }
    echo getSum(1,2,3,4,5,6, 100); //Caso tenha uma STRING o PHP irá converter automaticamente em inteiro (str pra int). >>>OBS: Com o  declare(strict_types=1); irá dar erro.<<<
    

?>