<?php
    //LISTA DE PARÂMETROS II

    #implementação da func_get_args();

    function somaTudo () {
        $lista = func_get_args();
        $total = 0;
        //for ($x = 0 ; $x < $qntd ; $x++) {
        //    $total += $lista[$x];
        //}
        foreach ($lista as $elemento) {
            $total += $elemento;
        }
        echo "A soma de todos os parâmetros é: " . $total;
    }
    somaTudo(1,2,3);
?>