<?php
    //Modificadores de Acesso

    //Modificadores de Acesso são instruções da linguagem para restringir ou dar acesso aos membros de classe, por exemplo, há funções definidas numa classe que possuem uso exclusivo interno, logo, devemos definir que esses membros tenham visibilidade restrita e para isso, iremos utilizar os modificadores de acesso das classes

    #public (omissão) o membro pode ser acessado de qualquer parte.

    #protected o membro SÓ poderá ser acessado pela subclasse.

    #private o membro é de uso interno de quem o declarou. Com este, o acesso será restrito à Classe onde o mesmo foi definido, então um membro definido na Classe A como sendo private só estará acessível dentro da classe A. Se tiver uma subclasse B que extende a classe A, a classe B não terá acesso do membro definido como private.

    //De forma mais fácil: o que é PÚBLICO, é de todos. Isto é um membro público poderá ser acessado em qualquer lugar do nosso código, seja através de uma instância de classe ou então dentro de uma classe derivada. Já um membro PRIVADO é de uso exclusivo, NINGUÉM deve ter acesso, apenas a classe com esse membro privado.

    //PROTECTED: o que é protegido, pode ser acessado por algumas ressalvas, algumas regras. Essa regra é que o membro só pode ser acessado pelas classes derivadas.
    
    class SuperClasse{
        public $publico = 0;
        private $privada = 0;
        protected $protegido = 0;

        public function super() {
            echo $this -> publico;
            echo $this -> privada;
            echo $this -> protegido;
        }
        
    }

    class SubClasse extends SuperClasse{
        public $publico;
        private $privada;
        protected $protegido;

        public function sub(int $x) {
            $this -> publico = $x;
            $this -> privada = $x;
            $this -> protegido = $x;
        }
    }

    $sub = new SubClasse();
    $sub -> sub(1);
    $sub -> super(); //101 (alteramos o valor da $public e $protegido para 1, mas o valor da $privada não foi alterada. Todas as variáveis PÚBLICAS e PROTEGIDAS elas podem ser redefinidas na subclasse, e quando fazemos uso das mesmas na subclasse, os valores são alteraedos na SUPERCLASSE.)
?>