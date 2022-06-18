<?php
    //Encapsulamento
    //Encapsulamento é a ocultação dos membros de classe que não possuem utilidade externa. Toda variável ou função que implementa funcionalidades internas a classe não pode ser acessada por uma instância. O encapsulamento garante coesão ao novo tipo de dado e ajuda a construir a interface de acesso da estrutura que está sendo implementada.

    class Pessoa{
        public $nome;

        function setNome($nome) {
            $this -> nome = $nome;
        }

        function getNome() {
            return $this -> nome;
        }
    }

    /* $p1 = new Pessoa();
    $p1 -> setNome("Luiz Gustavo");
    $p1 -> nome = "Lucas"; */

    //O problema é: temos uma função para setar o membro $nome, mas também podemos setar externamente por meio de $this -> nome = "Algum nome". Assim, não queremos que mude externamente, já que criamos uma função para tal. Para isso, temos que restringir a visibilidade da nossa variável $nome. Para isso passamos de public para private.

    #Exemplo:

    class Exemplo{
        private $nome;

        function setNome($nome) {
            $this -> nome = $nome;
        }

        function getNome() {
            return $this -> nome;
        }
    }

    $exemplo = new Exemplo();
    //$exemplo -> setNome("Luiz Gustavo de Oliveira Umbelino");
    $exemplo -> nome = "Luiz"; //Mudar externamente da erro pois o membro $nome é um atributo privado.
    echo $exemplo -> getNome();

    //A primeira ideia que devemos ter acerca do encapsulamento é que tudo que disser respeito a parte interna da classe, não poderá ser acessado externamente. Ou seja, quando criarmos o objeto só será possível acessar as variáveis e as funções que forem definidas como públicas a classe. 

    //ATÉ PORQUE SE NÓS PUDÊSSEMOS ALTERAR AS VARIÁVEIS DIRETAMENTE, NÓS PODEMOS FAZER COM QUE A CLASSE DEIXE DE FUNCIONAR CORRETAMENTE, POIS PODERÍAMOS ATRIBUIR UM VALOR INVÁLIDO QUE SERIA DETECTADO COM UMA FUNÇÃO QUE USASSEMOS PARA ESSE FIM.


?>