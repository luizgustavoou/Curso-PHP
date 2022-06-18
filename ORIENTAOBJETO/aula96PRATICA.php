<?php
    class Pessoa{
        public $idade = 0;

        public function get_idade() {
            //do mesmo jeito que em funções fora da classe seu escopo não englboa as variáveis externas, precisando assim de um global, não é diferente com funções em classe (para acessarmos a variável idade da classe Pessoa).
            $idade = $this -> idade;
            return $idade;
        } 
    }

    $p1 = new Pessoa();
    echo $p1 -> get_idade();
?>
