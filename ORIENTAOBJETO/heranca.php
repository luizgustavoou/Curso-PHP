<?php
    abstract class Pessoa{  
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $endereco;

        abstract public function apresentar();

        final protected function getNome() : string {
            return $this -> nome;
        }

        final protected function getIdade() : int {
            return $this -> idade;
        }
    }

    final class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        function __construct(string $nome = null, int $idade = null, string $sexo = null, string $endereco = null, $matricula = null, string $curso = null) {
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> sexo = $sexo;
            $this -> endereco = $endereco;
            $this -> matricula = $matricula;
            $this -> curso = $curso;
        }

        protected function getCurso() {
            return $this -> curso;
        }


        public function apresentar() {
            echo "Olá, me chamo {$this -> getNome()}, tenho {$this -> getIdade()} anos e faço {$this -> getCurso()}";
        }

    }

    $a1 = new Aluno("Luiz Gustavo", 19, "Masculino", "Rua Aeroporto dos Navegantes", 20181144010015, "Informática");
    $a1 -> apresentar();
?>