<?php
    $nums = range(0, 10);
    //print_r($nums);
    foreach ($nums as $chave => $elemento) {
        $nums[$chave] = $elemento * 10;
    }
    echo "JEITO1: </br>";
    print_r($nums);
    echo "</br>JEITO2: </br>";

    #de jeito mais simples.
    foreach ($nums as $chave => &$elemento) {
        $elemento *= 10;
    }
    print_r($nums);

    //o jeito 2 utiliza o "E" comercial &, fazendo com que ele peça o endereço da variavel, e nao o seu valor. Assim sera passado nao a copia do seu valor, mas sim sua referencia
?>
