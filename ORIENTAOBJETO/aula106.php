<?php
    //VISIBILIDADE DAS FUNÇÕES
    
    //Numa classe podemos definir a visibilidade de funções e assim, construir a interface da nossa classe. Nessa aula, estudaremos como podemos alterar a visibilidade de membros de classe.

    // Ausência de modificador de acesso da função será PUBLIC. Porém, podemos usar além do PUBLIC, o PRIVATE e PROTECTED.
    // As funções __construct() e __destruct() também podem ter um moedificador de acesso.

    class SuperClasse{
        public function funcPublica() {
            echo "funcPublica </br>";
        }

        protected function funcProtegida() {
            echo "funcProtegida </br>";
        }

        private function funcPrivada() {
            echo "funcPrivada </br>";
        }

        function super() {
            $this -> funcPublica();
            $this -> funcProtegida();
            $this -> funcPrivada();
        }
    }
    $super = new SuperClasse();
    $super -> super();
    $super -> funcPublica();
    // $super -> funcProtegida(); //Da erro pois o membro que foi definido como protegido SÓ pode ser utilizado dentro do escopo da classe onde o mesmo está implementado ou dentro do escopo da subclasse.
    // $super -> funcPrivada(); //Da erro pois os membros de classe definidos como privada só pode ser utilizado no escopo da classe onde os mesmos estão sendo implementado. Ou seja, membros definidos como private não podeem ser utilizados nem pelas classes derivadas.

    #O ÚNICO NÍVEL DE ACESSO QUE PODE SER ACESSADO ATRAVÉS DE UMA INSTÂNCIA DE CLASSE  SÃO OS MEMBROS QUE FORAM DEFINIDOS COMO PUBLIC. Já os membros definidos como PRIVATE e PROTECTED tem um acesso restrito.
    echo "_________________________ </br>";
    class SubClasse extends SuperClasse{
        function __construct() {
            $this -> funcPublica();
            $this -> funcProtegida();
            // $this -> funcPrivada(); //da erro pois as funções privadas possuem o seu escopo restrito as classe onde a mesma foi definida
        }
    }

    $sub = new SubClasse();
    // $sub -> funcProtegida(); //da erro pois tentamos acessar uma função protegida pela instância.
    
    $sub -> funcPublica(); //somente as funções públicas estarão disponíveis para uso numa instância de classe, seja ela uma instância de classe derivada ou uma instância de classe onde ela foi definida.


?>