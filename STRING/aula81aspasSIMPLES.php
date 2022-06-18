<?php
    //ASPAS DUPLAS vs ASPAS SIMPLES.
    //Aspas Duplas e Aspas Simples  possuem tratamento diferenciado em PHP, ou seja, quando um conjunto de caracteres estiver definido e delimitado por aspas duplas estes receberão um tratamento diferenciado pelo PHP do que os caracteres que estiverem delimitados por aspas simples.

    #ASPAS SIMPLES
    echo 'excript' . "</br>"; //será reconhecido pelo PHP como uma string na sua forma mais primitiva. Então, faz com que o PHP reconheça todos os caracteres em sua forma mais simples, implicando que o PHP não irá verificar se nós temos alguma expressão contida na nossa string. A definição de aspas simples é: qualquer caracter delimitado por aspas simples será reconhecida como literal, um caracterer propriamente dito.

    //echo 'ex'cript'; //errado pois todas as vezes q abrirmos uma aspa, temos que fechá-la com a mesma

    echo 'ex\'cript' . "</br>"; // ex'cript >> para imprirmos uma aspa simples dentro de uma string temos que preceder com uma barra. Ou seja, temos que escpar essa string, isso se chama caracteres de escape, que são caracteres que serão ignorados pelo interpretador do PHP.

    echo 'excrip\\\'t' . "</br>"; //excrip\'t >> todas as vezes que nos quisermos imprimir uma barra, nos temos que fazer uso de 2 barras.

    #exemplo clássico que ocorre:

    echo 'Vá para o diretório c:\\';

?>