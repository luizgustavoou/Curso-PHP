<?php
    //FUNÇÕES VARIÁDICAS
    //São todas as funções capazes de receber uma lista de parâmetros.

    function media (...$valores) {
        $total = array_sum($valores) / count($valores);
        return $total;
    }
    echo media(5,5,6);

    //pode fazer isso:
    function mediaa ($primeiraPA, $segundoPA, ...$resto) {
        echo "Teste.";
    }

?>