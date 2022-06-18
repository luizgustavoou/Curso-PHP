<?php
    //HEREDOC E NOWDOC
    //Sintaxe alternativa para definirmos strings que são longas.

    //HEREDOC: definir strings longas que serão INTERPRETADAS
    //NOWDOC: todos os valores serão impresso no seu valor literal

    #HEREDOC == ""
    $x = 50;
    $heredoc =
        <<<TESTE
        <div>O valor da variável x é: $x</div>
    TESTE;
    echo $heredoc;

    #NOWDOC = ''
    $nowdoc = <<<'EOT'
        class NowDoc {
            function_construct() {}
        }
    EOT;

    echo $nowdoc;



    
?>

