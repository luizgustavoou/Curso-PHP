<?php
    //MEMBROS DE CLASSE.

    //Uma classe em PHP irá conter variáveis, comumente chamadas de atributos ou propriedades e também, irá conter funções. Assim, todas as vezes em que falarmos em membros de classe, poderemos estar falando tanto de variáveis ou então de funções.

    class Pessoa{ //nome da classe em PHP é case-insensitive
        //$nome = 0; acusa erro pois quando declaramos uma variável em uma classe, temos que definir sua visibildiade: PÚBLICA, PRIVADA ou PROTEGIDA.
        public $nome;
        public $idade;
        var $teste; //forma antiga de declararmos variavel, nao eh aconselhavel usa-la. Funciona da mesma forma que a public, porem eh muito antiga e nao se deve utilizar.
    }
?>