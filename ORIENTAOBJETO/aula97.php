<?php
    //Gerenciando Atributos de Classe.
    //Os atributos de classe, ou então, as variáveis que estão definidas em nossas classes devem ser manipuladas de maneira a não permitir que o seu valor seja alterado externamente. E também, é necessário as vezes controlar qual o valor que será atribuído a um determinado atributo. Por essa razão, temos de aprender alguns conceitos a respeito da manipulação de atributos de classe.

    class Pessoa{
        public $idade = 0;

        public function get_idade() {
            return $this -> idade;
        }

        public function set_idade($idade) {
            if($idade > 0) {
                $this -> idade = $idade;
            }else {
                echo "A idade é inválida.";
            }
        }
    }

    $p1 = new Pessoa();

    //$p1 -> set_idade(22);
    $p1 -> set_idade(-5);
    echo "A idade é : {$p1 -> get_idade()}";

    // get - pegar
    // set - definir, atribuir a, setar
?>