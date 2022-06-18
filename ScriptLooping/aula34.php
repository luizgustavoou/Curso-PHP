<?php
    //Diz-se que um programa está "em looping" quando este fica "congelado", isto é, deixa de responder

    //O programa fica repetindo um laço de repetição infinita (quando a condição de parar não é feita).

    //É um fenomeno típico da programação, pois são infinitos casos que um programa pode parar,isto é, nao pode ser previsto pelo programador.

    //Existe diversos métodos pra saber que um programa entrou "em looping".

    #Exemplo de Looping:
    $num = 0;
    while ($num < 100) {
        $num = $num - 1;
        echo $num;
    }

//O servidor para se proteger, ele determina que cada script deve ser executado por um tempo limite. Se ele passar esse limite, o servidor derruba a execução do Script.
?>