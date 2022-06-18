
<?php
// a instrução "continue", a instrução que será utilizada todas as vezes em que desejarmos finalizar um único ciclo e não o laço de repetição inteiro.
    for ($i = 0 ; $i < 100 ; $i++) {
        if ($i % 2 == 0 ) {
            continue;
            //echo "$i ";
        }
        echo "$i ";
    }
?>