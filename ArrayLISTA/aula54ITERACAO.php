<?php
    //Agora, estudaremos a iteração dessa estrutura, até porque, de nada adiantaria uma estrutura de que contém elementos se não existe uma maneira para percorremos toda uma lista ou então, uma parte da mesma.

    #Iterando Arrays

    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta"];
    $qnt = count($lista); //retorna quantia de elementos contido em um ARRAY
    echo $qnt . "</br>";

    for($x = 0; $x < $qnt ; $x++) {
        echo $x . ": " . $lista[$x] . "</br>";
    }
?>