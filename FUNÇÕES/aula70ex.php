<?php
    //UM BOM EXEMPLO PARA ENTENDER REFERÊNCIA EM FUNÇÃO:
    function &func(){
        static $static = 0;
        $static++;
        return $static;
    }

    $var1 = &func();
    echo "var1:", $var1; // 1
    func();
    func();
    echo "var1:", $var1; // 3
    $var2 = func(); // assignment without the & (atribuição sem o &).
    echo "var2:", $var2; // 4
    func();
    func();
    echo "var1:", $var1; // 6
    echo "var2:", $var2; // still 4

?>