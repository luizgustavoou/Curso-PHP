<?php
    //HERANÇA II.

    //Quando implementamos uma subclasse, ela irá receber TODOS OS MEMBROS NÃO PRIVADOS definidos na superclasse.

    class superClasse{
        public $a = 0;

        public function super() {
            echo $this -> a;
        }
    }

    class Subclasse extends SuperClasse{
        //public $a; MUDA NADA

        public function sub(int $x) {
            $this -> a = $x;
        }
    }

    $sub = new SubClasse();
    $sub -> sub(5);
    $sub -> super(); //sai o número 5 passado pelo parâmetro.

    //Variáveis de mesmo nome na Subclasse e Superclasse ambas as variáveis estarão apontando para o mesmo endereço de memória. Porém esse fenômeno só acontece com variáveis.

?>