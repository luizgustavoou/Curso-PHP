<?php
    //Pseudo-variável $this

    //O PHP disponibiliza uma pseudo-variável de nome $this de maneira automática para todas as classes. Assim, tudo que será feito dentro de um objeto será feito com o uso da pseudo-variável $this, até porque, a mesma receberá, no momento da criação de um novo objeto, a instância deste. Logo, todo objeto irá ter a sua própria variável $this que estará apontado para si mesma. Esse conceitos é comumente chamado de autorreferência.

    # $objeto -> atributo;
    # $objeto -> função();

    #EXEMPLO 2:
    class Pessoa1 {
        public $idade = 0;
    }

    $p1 = new Pessoa1();
    $p1 -> idade = 10;

    //No exemplo 1 estamos acessando a variável $idade de forma externa, ou seja,  nós acessamos a variável idade de fora da nossa classe, melhor: nós acessamos a variável idade através de uma instância que foi criada da classe Pessoa1.

    #EXEPLO 2:
    class Pessoa2{
        public $idade = 0;

        public function get_idade() {
            $this -> idade;
        }
    }

    //No exemplo 2, acessamos os membros de classe dentro de uma função contida numa classe, utilizamos a pseudo-variável $this. $this está dizendo que estamos fazendo referência a própria classe.

    //Com isso visualizamos melhor o que o OPERADOR DE SETA faz:
        # $objeto -> atributo ;
        # $objeto -> função() ;

            // isto é:
        # <instância> -> <membro> ;
        # <instância> -> <membro> ;

    // OPERADOR DE SETA INTERNAMENTE:
        # <var> -> <membro> ;
        # $objeto -> atributo or function() ;

    //OPERADOR DE SETA EXTERNAMENTEN:
        # <pseúdo-variável> -> atributo or function() ;
        # $this -> atributo or function() ;
?>