<?php
    //FUNÇÕES ANÔNIMAS NA PRÁTICA.
    //Em suma, criaremos uma lista, uma função e uma função anônima, em seguida, daremos tratamentos ao itens da lista com o uso da função anônima enviando-a como parâmetro da função.

    $quadrado = function($item) {
        return $item**2;
    };
    /* $cubo = function($item, $anonima) {
        return $anonima($item) * $item;
    };
    echo $cubo(3, $quadrado); */
    $cubo = function($item)use($quadrado) {
        return $quadrado($item) * $item;
    };
    $soma = function($item){
        return $item + $item;
    };
    function processa_lista($lista, $func) {
        foreach($lista as &$item) {
            $item = $func($item); //cada item da nossa lista será passada como parametro da função anonima que estamos recebendo como parametro. A função pode ser implementada externamente, assim o tratamento de cada elemento sera implementado FORA da função processa_lista, ou seja, o tratamento será implementado como uma função anonima.
        }
        return $lista;
    }
    echo "QUADRADO: </br>";
    print_r(processa_lista(range(1,10), $quadrado));
    echo "</br>";
    echo "Cubo: </br>";
    print_r(processa_lista(range(1,10), $cubo));
    echo "</br>";
    echo "Soma: </br>";
    print_r(processa_lista(range(1,10), $soma));

    /* print_r(processa_lista(
        range(1,10),
        function($item) {
            return $item - 10;
    }); // nos estamos implementando a nossa função anonima no mesmo momento em que nos estamos invocando a função processa_lista. */
?>