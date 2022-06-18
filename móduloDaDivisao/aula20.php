<?php
    $num1 = 9;
    $num2 = 2;

    echo "A divisão entre " . $num1 . " e " . $num2 . " é igual a: " . $num1/$num2;
    if ($num1%$num2 == 0){
        echo "</br>é par</br>";
    }
    else {
        echo "</br>é impar</br>";
    }
    echo fmod(7, 3.3); //eh um x%y  com x ou y sendo float 
    echo "</br>";
    echo 7%3; //% é para numeros inteiros com inteiros
?>