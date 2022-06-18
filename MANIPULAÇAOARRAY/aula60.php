<?php
    #VERIFICA SE A ESTRUTURA É UMA ARRAY:
    echo "FUNÇÃO: is_array()" . "</br>";
    echo "Valor = [] - " . is_array([]) . "</br>";
    echo "Valor = array() - " . is_array(array()) . "</br>";
    echo "Valor = [1,2,3] - " . is_array([1,2,3]) . "</br>";
    echo "Valor = 1 - " . is_array(1) . "</br>";
    echo "</br>";

    #RETORNA A QUANTIDADE DE ELEMNTOS DE UM ARRAY:
    echo "Função: count()" . "</br>";
    echo "Valor = [1,2,3,4] - " . count([1,2,3,4]) . "</br>";
    echo "Valor = range(0,1000) - " . count(range(0,1000)) . "</br>";
    echo "</br>";

    #VERIFICA SE UM ELEMENTO ESTÁ CONTIDO:
    echo "FUNÇÃO: in_array(valor, array)" . "</br>";
    echo "Valor = in_array(2, [1,2,3,4,5]) - " . in_array(2, [1,2,3,4,5]) . "</br>";
    echo "Valor = in_array(6, [1,2,3,5]) - " . in_array(6, [1,2,3,4,5]) . "</br>";
    echo "</br>";

    #ORDENAÇÃO:
    echo "FUNÇÃO: sort()</br>";
    echo "sem sort()</br>";
    $arr = ["c", "b", "a", "F"];
    foreach ($arr as $chave => $elemento) {
        echo "$chave -> $elemento</br>";
    }
    sort($arr);
    echo "com sort()</br>";
    foreach ($arr as $chave => $elemento) {
        echo "$chave -> $elemento</br>";
    }
    echo "</br>";

    #INVERSÃO:
    echo "FUNÇÃO: array_reverse</br>";
    $arr = [1,2,3,4];
    echo "sem array_reverse()</br>";
    foreach ($arr as $chave => $elemento) {
        echo "$chave -> $elemento</br>";
    }
    echo "com array_reverse()</br>";
    $arr = array_reverse($arr);
    foreach ($arr as $chave => $elemento) {
        echo "$chave -> $elemento</br>";
    }
    echo "</br>";

    #SOMA:
    echo "FUNÇÃO: array_sum()</br>";
    $arr = [1,2,3,4];
    echo "[1,2,3,4]</br>";
    echo "A soma é: " . array_sum($arr) . "</br>";
    echo "</br>";

    #JUNÇÃO DE ARRAYS:
    echo "FUNÇÃO: array_merge()</br>";
    $arr1 = [1,2];
    $arr2 = ["a", "b"];
    $arr3 = array_merge($arr1, $arr2);
    foreach ($arr3 as $chave => $elemento) {
        echo "$chave -> $elemento</br>";
    }

    

?>