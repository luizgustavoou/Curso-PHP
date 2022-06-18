<?php
    //Sobrescrita de Funções.

    // Sobrescrita de função permite-nos utilizar uma mesma assinatura de um método definido na superclasse definindo um novo comportamento. Essa é uma das formas que temos para trabalharmos com polimorfismo no PHP. A sobrescrita de função é um recurso intrínsico da orientação a objetos que além de fazer o encapsulamento da lógica, também nos proporciona o trabalho com o polimorfismo.

    //Acontece muito com o método __construct()

    class Pessoa{
        private $nome;
        private $sobrenome;

        public function getNome() : string {
            return $this -> nome;
        }

        public function setNome(string $nome) {
            $this -> nome = $nome;
        }

        public function getSobrenome() : string {
            return $this -> sobrenome;
        }

        public function setSobrenome(string $sobrenome) {
            $this -> sobrenome = $sobrenome;
        }

        public function getNomeCompleto() : string {
            return "{$this -> getNome()} {$this -> getSobrenome()}";
        }
    }

    $p1 = new Pessoa();
    $p1 -> setNome("Luiz Gustavo");
    $p1 -> setSobrenome("Umbelino");
    
    echo "Seu nome é {$p1 -> getNome()} </br>";
    echo "Seu sobrenome é {$p1 -> getSobrenome()} </br>";
    echo "Seu nome completo é {$p1 -> getNomeCompleto()}";
?>