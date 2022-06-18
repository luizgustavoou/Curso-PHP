<?php
    $arr = ["zero", "um", "dois", "três", "quatro"];

    //Adicionando elementos:
    #Forma 1 de adicionar (mais simples):
    $arr[] = "cinco";
    #Outra forma:
    $arr[6] = "seis";

    //Alterando elementos:
    $arr[1] = "ummm";
    $arr[4] = "quatrooo";

    //Excluindo elementos:
    unset($arr[3]);  //função UNSET que deleta um objeto na memória. Ai ele tá removendo o elemento da chave 3, que é o "três". Porém as chaves não são reindexadas, sendo de nossa responsabilidade. 


    print_r($arr);

?> 