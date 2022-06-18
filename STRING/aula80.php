<?php
    //STRING é um array de caracteres, isto é, uma lista de caracteres.

    $str = "abc";

    echo $str[2] . "123</br>"; //c123
    echo $str{0} . "</br>"; //a. pode ser por chave também.

    $len = strlen($str);
    for ($i = 0 ; $i < $len ; $i++) {
        echo $str[$i] . "</br>";
    }

?>