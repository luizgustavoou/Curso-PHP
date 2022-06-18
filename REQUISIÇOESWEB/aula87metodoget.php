<?php
    //var_dump($_GET);

    //if (count($_GET)) { //não precisa colocar count($_GET) > 0, pois se for 0 será false e se for maior do que 0 será igual a TRUE
        echo 'Nome: ' . ($_GET['nome'] ?? '') . "</br>";
        echo 'E-mail: '. ($_GET['email'] ?? '') . "</br>";
    //}
?>