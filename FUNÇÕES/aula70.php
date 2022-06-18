<?php
     //PARÂMETROS POR REFERÊNCIA II.
     //Nessa aula, continuaremos o estudo sobre a passagem de parâmetros através de referência e também, aprenderemos como é possível retornar valores por referência.

     //$a = [1,2,3];
     function func(&$arg) { //a função irá receber a refêrencia, e nao a copia propriamente dita.
          $arg[1] = 5;
          print_r($arg);
     }
    //func($a);
    //print_r($a);

    #outro:

    function &func2() {
         $a = [1,2,3];
         print_r($a);
         return $a;
    }

    //$valor = &func2();
    //print_r($valor);
    
    #INTERNET

    //Retorno por referência é útil quando você precisa utilizar uma função para localizar variável cuja referência precisa ser obtida. Não use retorno por referência para aumentar performance, a engine é esperta o bastante para otimizar isto para você. Somente retorne referências quando você tem uma razão técnica para isso! Para retornar referências, use a sintaxe:

     class foo {
          public $value = 42;
      
          public function &getValue() {
              return $this->value;
          }
      }
      
      $obj = new foo;
      $myValue = &$obj->getValue(); // $myValue é uma referência a $obj->value, que é 42.
      $obj->value = 2;
      echo $myValue;                // imprime o valor valor de $obj->value, ou seja, 2.

      //Neste exemplo, a propriedade do objeto retornado pela função getValue precissa ser assimilada, não copiada, como acontecerá se não utilizar a sintaxe de referências.

      #Para utilizar a referência retornada, você precisa utilizar a atribuição por referência:

      function &collector() {
          static $collection = array();
          return $collection;
        }
        $collection = &collector();
        $collection[] = 'foo';
        print_r($collection);

               #pode ser assim tbm:
               //array_push(collector(), 'foo');
               //print_r($collection);

?>