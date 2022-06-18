<?php
    //Arrays Indexados

    //Array Indexado é a estrutura que mais se assemelha a definição padrão de arrays, até porque, para cada elemento é associado um valor inteiro não negativo.

    #Primeira definição de Array indexado.

    $cores = array("Azul", "Amarelo", "Verde", "Branco"); //o que está entre parentes são os elementos definidos que farão parte do array. Array é uma função no PHP que irá retornar um Array com os elementos passados no parâmetro.
    //print_r($cores);

    #Segunda forma:
    $cores2[0] = "Azul";
    $cores2[1] = "Amarelo";
    $cores2[2] = "Verde";
    $cores2[3] = "Branco";
    //print_r($cores2);

    #Terceira forma:
        $cores3[] = "Azul";
        $cores3[] = "Amarelo";
        $cores3[] = "Verde";
        $cores3[] = "Branco";
        //é responsabilidade ao PHP associar uma chave a cada elemento quando não mencionamos um indice.
        //print_r($cores3);

    #Quarta forma (PADRÃO):
    $cores4 = ["Azul", "Amarelo", "Verde", "Branco"];
    print_r($cores4);

?>