<?php

    //OPERAÇÃO TERNÁRIA II

    //Nessa aula realizaremos um exemplo prático com o uso da operação ternária. Nosso objetivo é analisar o quão útil essa estrutura pode ser e também, como é possível desenvolvermos um código mais legível se valendo das operações ternárias.

    $txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave não existe";

    //if (isset($_GET["texto1"])) {
    //    $txt = $_GET["texto1"];
    //}else {
    //    $txt = "A chave não existe.";
    //}
    
    echo $txt;