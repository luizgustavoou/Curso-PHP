<?php
    //Acessando Memberos de Classe.

    //Nessa aula vamos aprender como acessar os membros que estão definidos dentro de uma classe, ou seja, vamos aprender como que podemos atribuir um valor a uma variável declarada dentro da classe como também, como que podemos invocar uma função.

    #Para fazermos acesso aos MEMBROS DE CLASSE(variável ou função) de um OBJETO, temos que utilizar o OPERADOR DE SETA.
        
        // $objeto -> atributo;
        // $objeto -> função();
    
    class Pessoa {
        public $idade = 0;
    }

    $p1 = new Pessoa();
    $p2 = new Pessoa();

    $p1 -> idade = 19;
    $p2 -> idade = 18;

    echo $p1 -> idade . "</br>";
    echo $p2 -> idade . "</br>";



?>