<?php
    //LISTA DE PARÂMETROS I

    //Vamos estudar como passar uma lista de argumentos para dentro de uma função e também, aprenderemos como ler esse Array, e também, como podemos manipula-lo para extrairmos os valores de que precisamos.
    //so eh usado quando nao sabemos quais parametros que serao passados em uma função.

    #func_get_arg(<indice>); utilizada nas situações que queremos accesar um parametro pelo seu indice. So podemos utilizar quando temos certeza que uma lista de parametros esta sendo enviada e quando soubemos em que posição o parametor foi passado.

    #func_get_args(); ira retornar o array que contem os parametros que foi passado.

    #func_num_args(); nos retorna a quantidade de parametros que foram passados.

    //implementação da func_get_arg();
    function soma () {
        $total = func_get_arg(0) + func_get_arg(1);
        echo $total;
    }
    soma(10,2);
?>