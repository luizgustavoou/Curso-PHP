<?php
    function &teste() {
        static $a = 1;
        $a++;
        return $a;
    }
    $variavel = &teste();
    teste();
    teste();
    var_dump($variavel);

    echo "________________</br>";

    $teste = 10;
    $$teste = 50;

    echo "variável: $teste , variável-variável: ${$teste} </br>";
    
    echo "________________</br>";
    $variavel = "oi";
    $$variavel = "variavel-variavel";

    echo "variável: $variavel , variável-variável: asdasdasds${$variavel} </br>";

    
?>