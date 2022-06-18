<?php
    //Funções para Manipulação de Strings

    #FUNÇÃO - strlen() - QUANTIDADE DE CARACTERES
    $len = strlen('123456abc');
    echo "Quantidade de caracteres: $len </br>";

    #FUNÇÃO - substr(<str>, <indice>, <len>) - RETORNA UM PEDAÇO DA STRING

    $str = 'aaabbbccc';
    $sub = substr($str, 3, 3);
    echo "A parte retornada é: $sub </br>";
    $sub = substr($str, 3);
    echo "A parte retornada sem o <len> é: $sub </br>";

    #FUNÇÃO - strtoupper(<str>) - CONVERTE PARA LETRAS MAIÚSCULAS
    $str = "Luiz Gustavo";
    $up = strtoupper($str);
    echo "Maiúsculo: $up </br>";

    #FUNÇÃO - strtolower(<str>) - CONVERTE PARA LETRAS MINÚSCULOS
    $low = strtolower($str);
    echo "Minúsculo: $low </br>";

    #FUNÇÃO - str_replace(<conjuntodecaracteres>, <novastr>, <str>) - SUBSTITUI UMA STRING PRA OUTRA
    $str = "aaabbbccc";
    $nova = str_replace('bbb', 'ddd', $str);
    echo "De $str para $nova </br>";



    

?>