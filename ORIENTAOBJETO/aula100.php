<?php
    //DESTRUTORES.
    //Destrutores são funções que são invocadas no momento em que um objetos está sendo destruído.  Da mesma forma em que o PHP nos fornece funções que são invocadas quando um novo objeto está sendo criado, existe funções que são invocadas quando o mesmo está sendo destruído.

    //Assim como podemos gerenciar a CONSTRUÇÃO de uma instância, podemos fazer o mesmo com a sua DESTRUIÇÃO. O destrutor é INVOCADO quando nenhuma variável estiver referenciando-o ou quando a função unset() for usada passando como parâmetro a instância de onde a função destrutora está presente.

    //Toda vez que estivermos estudando a remoção de valores na memória, estamos dizendo que a instância está sendo ENVIADA (ou as informações estão sendo enviadas) para o GARBAGE COLLECTOR, o qual se trata de uma entidade que gerencia a utilização de memória.

    class Pessoa{
        
        function __construct() {
            echo "Função construtora invocada.";
        }

        function __destruct() {
            echo "Função destrutora invocada.";
        }
    }

    $p1 = new Pessoa; //É possível criar sem o uso de parênteses pois não há parâmetros no construtor.
    unset($p1);

    //A função DESTRUTORA não é muito utilizada, pois não é de responsabilidade do programador liberar o espaço de memória. As duas principais utilizações que iremos utilizar o __destruct() será para 1) fecharmos o banco de dados ou 2) para finalizarmos uma conexão socket (finalizar uma conexão com outro computador).


?>