<?php
    //Operador Spaceshift
    //Com o operador Spaceshift verificamos 3 situações numa mesma condição, caso o valor seja menor, então, o valor retornado será 1, caso o valor seja igual, o valor retornado será igual a 0, senão o valor retornado será igual a 1. Essa é uma maneira simples para verificarmos 3 condições e decidirmos o que deve acontecer.

    #1 <=> 1; //0
    #1 <=> 2; //-1
    #2 <=> 1; //1

    #[] <=> [];             //0
    #[1,2,3] <=> [1,2,3];   //0
    #[1,2,3] <=> [];        //1
    #[1,2,3] <=> [1,2,0];   //1
    #[1,2,3] <=> [1,4,4];   //-1

    #"x" <=> "x";   //0
    #"x" <=> "y"    //-1
    #"y" <=> "x"    //1

    foreach(range(0,9) as $chave => $elemento) {
        $x = rand(0,9);
        $rel = $elemento <=> $x;

        echo "valor=$elemento <=> x=$x é $rel</br>";
    }
?>