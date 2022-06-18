<?php
    //CRIAÇÃO DE OBJETOS
    //Nessa aula vamos programar uma classe e em seguida, vamos criar objetos a partir da definição contida na classe. É importante lembrar que todo objeto é construído conforme está programado na classe, assim, temos que lembrar que a classe é o projeto, enquanto que o objeto ou instância, é a execução do projeto (execução da classe).

    class Classe{
        public $a = 1;
        public $b = 2;
        public $c = 3;
    }

    $objetoA = new Classe;
    $objetoB = new Classe;
    $objetoC = new Classe;

    var_dump($objetoA);
    //var_dump($objetoB);
    //var_dump($objetoC);

    unset($objetoA); //remove o objetoA.
    var_dump($objetoA); //da erro.
