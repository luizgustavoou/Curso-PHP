<?php
    //Implementado Funcionalidades em Classe.

    //Nesse episódio estudaremos como podemos implementar funcionalidades às nossas classes. Para isso, vamos escrever uma classe e então, vamos implementar funções que poderão manipular as variáveis ou invocar outros funções.

    //As funções na maioria irão manipular os atributos de um objeto, isto é, suas propriedades, características.

    #VARIÁVEIS são as propriedades de um objeto.
    #FUNÇÕES ações que os objetos fazem.

    class Teste{
        public function imprimeTeste() {
            echo "Função imprimeTeste() da classe de nome Teste";
        }
    }

    $t1 = new Teste();
    $t1 -> imprimeTeste();
?>