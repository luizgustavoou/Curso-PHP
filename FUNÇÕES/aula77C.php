<?php
    #alterando o valor da variável $num.

    $num = 1000;
    $num2 = 5000;

    $func = function() use($num, $num2) {
        //echo "Anônima: $num, $num2";
        $num = 1500;
    };

    $func();
    echo $num . "</br>"; //1000, continua 1000 pois o use() faz uma cópia das variáveis externas (mesmo nome e mesmo valor) e joga no escopo interno das funções, valendo so internamente. Para alterar de fato a variavel global é so usar o "E" comercial da seguinte forma >>>use(&$num, &$num2)<<< pegando assim a REFERÊNCIA e nao a CÓPIA.

    echo "___________MUDANDO VARIÁVEL DE ESCOPO EXTERNO, VARIÁVEL GLOBAL___________</br>";
    
    #Exemplo para entender:

    $variavel_global = 100;

    $funcao_anonima = function() use(&$variavel_global) {
        $variavel_global = 2;
    };
    
    echo "variavel_global = $variavel_global</br>";
    
    $funcao_anonima();

    echo "variavel_global = $variavel_global";
?>