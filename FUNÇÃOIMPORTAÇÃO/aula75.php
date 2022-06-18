<?php
    //Há disponível 2 funções para importarmos arquivos com código no PHP, a primeira função é a include() e a segunda e a função require(). Em suma, ambas desempenham a mesma tarefa, porém, cada uma possui a sua peculiaridade que a diferencia e a distingue das demais.

    #include(<filme_name>); irá continuar o código caso não tenha localizado o arquivo importado.

    #require(<filme_name>); se o arquivo nao for encontrado, sera feita uma exceção dizendo que o arquivo nao foi encontrado

    echo "_______________________________";

    #caso 1:
        //include("code.php");
        //echo "olá";
            //irá dar nenhum erro e o código será executado.
    #caso 2:
        //include("code1.php");
        //echo "olá";
            //irá dar um aviso e o código será executado.
    #caso 3:
        //require("code.php");
        //echo "olá";
            //irá dar nenhum erro e o código será executado.
    #caso 4:
        //require("code1.php");
        //echo "olá";
            //irá dar erro e o codigo NAO será executado.

    echo "_______________________________</br>";

    #include_once(<file name>);
    #require_once(<file name>);
    //as duas funções acima verificam se determinado aqruivo de codigo ja foi  importado, caso ja tenha sido ele nao sera colocado novamente.

    include("code.php");

    echo $teste . "</br>"; //100, a variavel está dentro de code.php, essa memoria vai pra aula75.php tambem.

    $teste = 5;
    //include("code.php"); //EH IMPORTADO NOVAMENTE. mais um include, deixando a variavel $teste com valor igual a 100 novamente.
    include_once("code.php"); //ele nao ira importar pois na LINHA 33 ja foi importado esse arquivo, assim a variavel $teste voltara a ser 5.

    echo $teste; //sem o include("code.php"); novamente depois de $teste = 5; ele ira imprimir 5. Se tiver MAIS UM include("code.php"); ele ira imprimir 100


?>