<?php
    //Constantes são valores que alocamos na memória e que podem ser acessados através de uma referência que o identifica.
    //São valores atribuídos a referências que não podem ter o seu valor alterado em tempo de execução.

    /*
    define("TESTE", 10); //o nome dessa constante é TESTE, e tem valor 10.
    //define ("TESTE", 5); vai dar erro pq nao é possivel atribuir outro valor da constante
    echo TESTE;
    */

    #outra forma de definir constante:
    /*
    const VALOR = 1000;
    echo VALOR;
    */

    //A diferença do DEFINE e CONST é que construção CONST nos declaramos constantes em tempo de compilação, enquanto que uma função DEFINE podemos declarar constantes em tempos de execução.

    for ($x = 0; $x < 5 ; $x++){
        define("CONSTANTE". $x, $x);
    }
    echo CONSTANTE0 . "</br>";
    echo CONSTANTE4;
?>