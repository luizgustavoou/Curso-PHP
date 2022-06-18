<?php
    //Nesta aula, aprenderemos como gerar rapidamente uma sequência numérica, num determinado intervalo, e também, o espaçamento que deve haver entre cada elemento da sequência.

    //range ($low, $high, $step=NULL);
    //range (0,5,2);
    //      >>>[0,2,4]

    $x = range(11, 1,4);

    $y = range("a", "e", 2);
    print_r($y);

?>