<?php
    class Triangulo{
        public $base;
        public $altura;
        public $lado;

        public function mudar_lado_altura(int $base = 1, int $altura = 1, int $lado = 1){
            $this -> base = $base;
            $this -> altura = $altura;
            $this -> lado = $lado;
        }

        public function retornar_altura_base_lado() : array {
            return ['altura' => $this -> altura, 'base' => $this -> base, 'lado' => $this -> lado];
        }

        public function area() {
            $altura = null;
            $base = null;
            foreach ($this -> retornar_altura_base_lado() as $chave => $elemento) {
                switch($chave) {
                    case "altura":
                        $altura = $elemento;
                    break;
                    case "base":
                        $base = $elemento;
                    break;

                }
            }
            return ($altura * $base) / 2;
        }

        public function tipoTriangulo(){
            $altura = null;
            $base = null;
            $lado = null;
            foreach($this -> retornar_altura_base_lado() as $chave => $elemento) {
                switch($chave) {
                    case "altura":
                        $altura = $elemento;
                    break;
                    case "base":
                        $base = $elemento;
                    break;
                    case "lado":
                        $lado = $elemento;
                    break;
                }
            }
            if($altura == $base and $altura == $lado) {
                return "Equilátero";
            }elseif($altura == $base and $altura = $lado or $altura == $lado and $altura != $base or $base == $altura and $base != $lado or $base == $lado and $base != $altura or $lado == $altura and $lado != $base or $lado == $base and $lado != $altura ) {
                return "Isósceles";
            }else {
                return "Escaleno";
            }
        }
    }

    $t1 = new Triangulo;
    $t1 -> mudar_lado_altura(6,5,5);

    echo $t1 -> area();
    echo $t1 -> tipoTriangulo();


?>