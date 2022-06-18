<?php
    //todas as vezes que estivemos trabalhando com banco de dados vamos trabalhar com ARRAYS BIDEMENSIONAIS. Quando consultamos o banco de dados, retorna uma estrutura do tipo ARRAY.

    # | ID | NOME | PONTOS |
    # | 1  | Zé   | 11     |
    # | 2  | José | 4      |
    # | 3  | Zéca | 22     |

    $jogo = array(
        array(1, "Zé", 11), 
        array(2, "José", 4), 
        array(3, "Zéca", 22)
    );
    //print_r($jogo);
    //echo $jogo[1][1];

    #definição de uma estrutura mais semelhante daquela que é retornada de uma estrutura MYSQL:

    $jogo = array(
        array("ID" => 1, "NOME" => "Zé", "PONTOS" => 11), 
        array("ID" => 2, "NOME" => "José", "PONTOS" => 4), 
        array("ID" => 3, "NOME" => "Zéca", "PONTOS" => 22)
    );
    //print_r($jogo);
    //echo $jogo[1]["NOME"]

    #por colchetes:
    $jogo = [
        ["ID" => 1, "NOME" => "Zé", "PONTOS" => 11], 
        ["ID" => 2, "NOME" => "José", "PONTOS" => 4], 
        ["ID" => 3, "NOME" => "Zéca", "PONTOS" => 22]
    ];
    print_r($jogo);
    echo $jogo[1]["NOME"];
?>