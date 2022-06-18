<?php
    //A operação ternária é uma estrutura para simplificarmos a escolha de um valor dentre 2 opções. Em suma, temos que a utilização da operação ternária se dá da mesma forma que a instrução "if", porém, com o uso dessa estrutura utilizamos um única linha e também, somos obrigados a retornar um valor.

    /*
    $x = 0;
    if (x == 0) {
        $x = 10;
    }else {
        $x = 20;
    }
    */

    #Com condição ternária:

    $media = 6;
    $x = ($media < 7) ? "Aprovado" : "Reprovado";
    echo $x;
?>