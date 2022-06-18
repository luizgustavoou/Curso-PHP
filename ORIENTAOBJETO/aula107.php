<?php
    //Funções Modificadora.

    //Funções modificadoras, ou então, funções Getter e Setter são as responsáveis por definir a interface de acesso das nossas classes.

    //As funções modificadoras são as responsáveis pelo recebimento e envio de mensagens para classe.  E estas trabalham diretamente com os atributos privados. Os conjuntos das funções GETTER e SETTER irão compor a maior parte da interface pública de uma classe e serão estas que garantirão o encapsulamento da informação.

    # FUNÇÕES DE ACESSO

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

        public function getNomeCompleto() {
            return "Seu nome completo é {$this -> getNome()} {$this -> getSobrenome()}";
        }
    }

    $p1 = new Pessoa();
    $p1 -> setNome("Luiz Gustavo");
    $p1 -> setSobrenome("Umbelino");
    
    echo "Seu nome é {$p1 -> getNome()} </br>";
    echo "Seu sobrenome é {$p1 -> getSobrenome()} </br>";
    echo $p1 -> getNomeCompleto();
?>