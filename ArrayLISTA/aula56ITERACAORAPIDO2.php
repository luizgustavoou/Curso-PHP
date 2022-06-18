<?php
    //for (<array> as <chave> => <valor>) {} aki vamos definir o array, definimos a variavel que ira receber a chave e entao utilizaremos o operador SETA e vamos assim definir a variavel valor.
    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta"];
    foreach ($lista as $chave => $elemento) {
        echo "$chave: $elemento</br>";
    }


?>