<?php
    //CONSTRUTORES PERSONALIZADOS.

    //A função construtora da classe pode ser personalizada conforme a necessidade, isto é, a mesma pode conter um conjunto de parâmetros que deverão ser definidos todas as vezes em que uma nova instância for criada. Essa é uma maneira de inicializarmos as variáveis e obrigar a definição dos valores mais importantes.

    class A{

    }

    class Pessoa{
        public $nome;
        public $idade = 0;
        //public $a = new A(); vai dar erro, porque para nós inicializarmos uma variável que está contida na definição de uma classe só é possivel se o valor da mesma é literal, isto é, um valor do tipo primitivo do PHP. Se nós precisarmos definir um membro e inicializr este com uma instância de uma classe, somos obrigados a fazer essa implementação no CONSTRUTOR da classe.

        function __construct($nome, $idade) {
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> a = new A(); //aqui vai dar certo.
        }

        public function retornar() {
            return $this -> nome . $this -> idade;
        }
    }

    $p1 = new Pessoa("Gustavo", 19);
    echo $p1 -> retornar();
?>