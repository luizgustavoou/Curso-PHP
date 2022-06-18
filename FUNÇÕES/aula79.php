<?php
    //FUNÇÕES ANÔNIMAS e ARRAYS.
    //O PHP disponibiliza um conjunto de função anônimas para manipularmos as estruturas de dados Arrays. As funções que temos são muito utilizadas na programação funcional e nos proporcionam formas de escrevermos lógicas complexas em poucas linhas de código.
    
    #array_map(<array>, <f.anonima>) -> ela irá percorrer todos os elementos do array e pra cada elemento a mesma irá invocar a função anônima passando como parâmetro o elemento que está endo manipulado.
    echo "...array_map();..." . "</br>";

    $lista = [1,2,3,4,5];

    $f = function($x) {
        return $x**2;
    };

    $lista_processada = array_map($f, $lista);
    print_r($lista_processada);

    #array_filter(<array>, <f.anonima>) -> proporciona uma maneira de filtrar elementos de um array se baseando na condição implementada na condição anônima que é passada como parâmetro, assim a função anônima deverá retornar um valor booleano. Se for TRUE, o elemento fará parte do novo array, do contrario o elemento nao sera adicionado.
    echo "</br>...array_filter();..." . "</br>";

    $filtro = function($x) {
        return $x < 3;
    };

    $lista_filtro = array_filter($lista, $filtro);

    print_r($lista_filtro);

    echo "</br>";




?>