<?php
    //Construtores

    //Toda classe pode implementar uma função que é invocada quando uma nova instância está sendo criada. Por definição da linguagem PHP, o nome dessa função será: __construct() e a mesma é invocada automaticamente pelo interpretador do PHP.

    //Os CONSTRUTORES não são funções, mas são parecidos com os mesmos, pois os construtores tem: nome, corpo e podem receber parâmetros. Porém, o construtor de uma classe não pode ser invocado quando nós desejarmos. Melhor: o construtor é o bloco de código que será invocado só, e somente só, na criação de novas instâncias e o mesmo será invocado pelo PHP, ou seja, nós não invocamos o construtor diretamente.

    class Pessoa{
        public $idade = 0;
        public $nome;

        function __construct() {
            echo "teste" . "</br>";
            var_dump($this);
        }//Nós definimos o construtor da nossa classe Pessoa. A nomenclatura que utilizamos para o nosso construtor NÃO É FACULTATIVA. Ou seja, na construção de novas instâncias o PHP por padrão irá executar a função de nome __construct().
    }

        new Pessoa();
        new Pessoa(); //irá aparecer um Pessoa#1 outra vez, pois o PHP destruiu a primeira instância, por não ter atribuido a instância em NENHUMA VARIÁVEL.

        #Para aparecer Pessoa#2:

        $p1 = new Pessoa();
        $p2 = new Pessoa();

        #ORDEM DE CHEGADA QUANDO SE CRIA UMA INSTÂNCIA:
            // 1) Criada a nova instância;
            // 2) Membros são definidos;
            // 3) Variáveis inicializadas;
            // 4) Construtor invocado.
?>
