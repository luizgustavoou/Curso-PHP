<?php
    class Mae{
        private $idade;
        private $sexo = 'Feminino';
        private $nome;
        private $filhos;

        function __construct(int $idade = null, string $nome = null, array $filhos = null) {
            echo "Instância criada. </br>";
            $this -> idade = $idade;
            $this -> nome = $nome;
            $this -> filhos = $filhos;
        }

        function __destruct() {
            echo "Instância apagada.";
        }

        public function definir(int $id, string $no, array $fil) {
            $this -> idade = $id;
            $this -> nome = $no;
            $this -> filhos = $fil;
        }

        private function retornarIdade() : int {
            return $this -> idade;
        }

        private function retornarNome() : string {
            return $this -> nome;
        }

        private function retornarFilhos() : string {
            $filhos = null;
            foreach($this -> filhos as $chave => $elemento) {
                if (!(array_key_last($this -> filhos) ==  $chave)) {
                    $filhos .= "$elemento, ";
                }else {
                    $filhos .= "$elemento";
                }
            }
            return $filhos;
        }

        private function algo() : array {
            $algo = ['você molhou o banheiro', 'você deixou a pia suja', 'você deixou chinelo jogado'];
            return $algo;
        }

        public function apresentar() : string {
            return 'Olá, me chamo ' . $this -> retornarNome() . ', tenho ' . $this -> retornarIdade() . ' anos' . ' e meus filhos são: ' . $this -> retornarFilhos() . '.';
        }

        public function reclamar() : string {
            $aleatorio = rand(0, array_key_last($this -> filhos));
            $algo_aleatorio = rand(0, array_key_last($this -> algo()));
            return $this -> filhos[$aleatorio] . ', ' . $this -> algo()[$algo_aleatorio] . '!!!';
        }

    }

    $claudia = new Mae(47, "Cláudia", ['Gustavo', 'Lucas', 'Bia']);
    //$claudia -> definir(47, 'Cláudia', ['Gustavo', 'Lucas', 'Bia']);
    echo $claudia -> apresentar() . "</br>";


    
?>