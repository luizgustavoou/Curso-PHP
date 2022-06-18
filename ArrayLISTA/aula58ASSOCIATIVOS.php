<?php
    ///ARRAYS Associativos

    $pontos = ["Zé"=> 11, "José"=> 4, "Zéca" => 22];
    //A chave de cada elemento é uma string, e essa está vinculada a um valor numérico.

    echo "Zé: " . $pontos["Zé"] . "</br>";
    echo "José: " . $pontos["José"] . "</br>";
    echo "Zéca: " . $pontos["Zéca"] . "</br>";

    #pra alterar o elemento de cada chave: 
    $pontos["Zéca"] += 1; // $pontos["Zéca"] = $pontos["Zéca"] + 1;
    echo "Zeca agora tem " .$pontos["Zéca"] . " pontos.";
?>