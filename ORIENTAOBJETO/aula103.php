<?php
    //HERANÇA.
    //A herança talvez seja o recurso que mais chama a atenção na Orientação a Objetos, isto é, a capacidade que temos de reutilizar um mesmo código, como também, irmos especializando as funcionalidades e no fim, possuirmos uma estrutura hierárquicas das estruturas de dados abstratos que compõem o nosso módulo ou programa.

    //SUPERCLASSE - CLASSE PAI - BASE
    //SUBCLASSE - CLASSE FILHA - DERIVADA

    class SuperClasse{
        public $a = 'variável $a';

        public function ini() {
            echo "SuperClasse->ini()";
        }
    }

    class SubClasse extends SuperClasse{

    }

    $sub = new SubClasse();
    $sub -> ini();
    echo $sub -> a;
?>