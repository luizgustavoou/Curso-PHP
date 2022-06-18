<?php
    //Nessa aula daremos início ao estudo da estrutura de seleção múltipla, a instrução Switch. É verdade que conseguimos fazer tudo que a instrução switch faz com a instrução "if", porém, perdemos legibilidade do nosso código e utilizamos uma grande quantidade de linhas - por essa razão existe a instrução switch.

    $num = 1;
    switch ($num) {
        case 1:
            echo "O valor é igual a 1.";
            break;
        case 2:
            echo "O valor é igual a 2.";
            break;
        default:
            echo "Estrutura default executada";
            //não precisa do break em DEFAULT
            

        
    }

?>