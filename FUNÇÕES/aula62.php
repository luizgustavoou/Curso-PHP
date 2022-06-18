<?php
    //PARÂMETROS são variáveis definidas no cabeçalho da função para o envio de informações.

    //PARÂMETROS versus ARGUMENTOS >> Fazem referência aos valores que são passados através do cabeçalho de uma função.  Parâmetros são as variáveis que estão declaradas no cabeçalho de uma função EX: function soma ($a, $b) {} o $a e $b são parâmetros. Os argumentos são na invocação da função, ex: soma(5,10); o 5 e 10 são argumentos.

    function soma ($num1 = 0, $num2 = 0) {
        $soma = $num1 + $num2;
        echo $soma;
    }

    soma(10, 20);
?>