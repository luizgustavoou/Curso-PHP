<?php
    //ESCOPO DE VARIÁVEIS.
    //ESCOPO é a visibilidade dos membro.
    //Uma função possui o seu escopo restrito a mesma, isto é, dentro do bloco de instrução da função não é possível acessar variáveis globais diretamente, da mesma forma que não é possível acessar os membros contidos numa função. Nessa aula vamos estudar somente o escopo dentro de uma função.

    $a = 10;
    $b = 5;

    function estudoEscopo() {
        global $a; //nos da acesso a variável gloabal $a.
        echo $a; //aqui vai sair o valor 10 contido na variavel global $a.

        #ou

        echo $GLOBALS["a"];
    }
    estudoEscopo();

    print_r($GLOBALS);
?>