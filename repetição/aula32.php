<?php
//do while executa primeiro o bloco antes de verificar a condição. Se for verdadeira essa laço será repetido.

$conta = 0;
do {
    $conta = $conta + 1;
    echo $conta;
}while ($conta < 10);