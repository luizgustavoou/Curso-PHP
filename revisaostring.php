<?php
    # ""

    #ex1
    $nome = "Luiz Gustavo";
    echo "Isso aki é aspas duplas, podemos interpolar ela $nome </br>";
    #ex2
    $$nome = 19;
    echo "Para variavel-variavel eh assim que se faz $nome, vc tem ${$nome} anos </br>";
    //echo "Para variavel-variavel eh assim que se faz $nome, vc tem ${'Luiz Gustavo'} anos"; pode ser assim também

    #ex3
    $dados = ["Luiz Gustavo", 19, "Masculino"];
    echo "Isso é aspas duplas, $dados[0], vc tem $dados[1] anos e é do sexo $dados[2] </br>";

    #ex4
    ${$dados[0]} = "jovem";
    echo "Com variavel-variavel de array é assim ${$dados[0]} </br>";
    //echo "Com variavel-variavel de array é assim ${'Luiz Gustavo'} </br>"; pode ser assim tambem

    #''

    $simples = 'Está no doc C:\\';
    echo $simples . '</br>';
    echo 'curso do excri\'\\pt </br>';

    #heredoc
    $x = 19;
    $heredoc = <<<PADRAO
        AQUI FICA O TEXTO HEREDOC $x</br>
        PADRAO;
    echo $heredoc;

    #nowdoc
    $nowdoc = <<<'PADRAO'
        AQUI FICA O TEXTO NOWDOC
    PADRAO;
    echo $nowdoc;
?>
