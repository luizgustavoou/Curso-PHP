<?php
    //ASPAS DUPLAS.
    //String em PHP podem estar delimitadas por aspas simples e aspas duplas, a diferença no uso das notações, ocorre no modo como a String será interpretada. Quando utilizamos aspas duplas, podemos interpolar valores de forma simples, como também, a concatenação também  é facilitada.
    
    //Aspas duplas e simples são do mesmo tipo e possuem a mesma estrutura. No entanto, uma string delimitada por aspas duplas ela tem a capacidade de ser interpretada, podendo concatenar e interpolar valor utilizando uma definição bastante simples.

    #concatenar --> juntar 2 strings: a+b
    #interpolar --> colocamos uma string no meio de outra.

    $num = 55;
    echo "O valor da variável num é: " . $num . "</br>"; //de forma concatenada.

    echo "O valor da variável num é: $num </br>"; //nós conseguimos fazer referência da variável num diretamente, nao precisando fazer uma concatenação. Isso acontece porque é uma STRING DE ASPAS DUPLAS, então estamos dizendo ao PHP que dentro dessa STRING pode haver INTERPOLAÇÃO.

    #INTERPOLAÇÃO com um elemento ARRAY:

    $arr = ["Preto", "Azul", "Amarelo"];

    echo "A cor da bola é: $arr[1] </br>";

    $a = 10;
    $$a = 50;
    echo "O valor de a é: $a e o valor de aa é: $a </br>";
    echo "O valor de a é: $a e o valor de aa é: ${$a} </br>"; //uso de anotação para expressões complexas como váriavel-variável é diferente.

    # $$arr[2] = "Marrom"; //da erro pois tentamos definir uma variavel-variavel diretamente, nao podemos fazer isso. o certo é abaixo:
    ${$arr[2]} = 'Marrom';

    echo "Var: $arr[2] , ${$arr[2]}";
?>