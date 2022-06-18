<?php
    //Laço de repetição foreach. Essa estrutura é derivada da estrutura "for" normal e o seu objetivo é facilitar o manuseio de Arrays.

    //foreach (<array> as <valor>)

    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta"];

    foreach ($lista as $item) {
        echo $item . "</br>";
    }
?>