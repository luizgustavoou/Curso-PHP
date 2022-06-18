<?php
    //declare(strict_types = 1);
    //Valores ed retornos ed funções tipados.

    function cubo(float $num) : float {
        return $num**3;
    }
    //echo cubo(10.5);

    //definimos q a função pode receber, temos que definir tbm q ele ira retornar valores do tipo flutuante. Do contrario nos teriamos que forçar uma conversao ou deixar que o PHP faça essa conversao, mas so ira fazer se nao estiver trabalhando de forma estrita, do contrario o mesmo levara uma exceção.

    function teste(): array {
        return [10, "eXcript", 5.1];
    }
    //var_dump(teste());

    function x() : int {
        return "1";
    }
    echo x(); //vai dar erro pq estamos trabalhando de forma estrito, definimos q o retorno eh um INT e estamos retornando uma string.
?>