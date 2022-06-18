<?php
    //Null Coalescing Operator - Null Coalesce.
    //O Null Coalescing Operator ou então, apenas Null Coalesce,  permite-nos verificar se uma referência existe, do contrário, a estrutura do operador, possibilita-nos definir um valor padrão. Esse é mais um dos recursos da versão 7 do PHP.

    echo $x ?? "Não tem essa variável"; //operador null coealescing usa ISSET.
    echo "</br>";


    $ddd = $_GET["ddd"] ?? "00";
    $telefone = $_GET["telefone"] ?? $_GET["celular"] ?? "0000-0000";

    echo "Tel: ($ddd) $telefone";


?>