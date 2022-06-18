<?php
    //PARÂMETROS POR REFERÊNCIA.
    //Quando precisamos passar um grande objeto, ou então, um Array que contém muito elementos como parâmetro de uma função, a melhor solução não será simplesmente "passá-lo", até porque, se assim for, o mesmo será copiado para a variável-parâmetro o que pode ocasionar numa lentidão.

    //Nessas situações, ao invés de passarmos uma cópia do objeto, podemos passar somente a referência do mesmo, fazendo com que o processo seja executado mais rapidamente e fazendo uso de uma menor quantidade de memória e processamento.

    $a = [1,2,3];
    $b = &$a;

    $a[1] = 5;

    print_r($a);
    print_r($b);
?>