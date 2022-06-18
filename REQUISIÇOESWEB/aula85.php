<?php
    //REQUISIÇÃO WEB
    //As requisições WEB são a base de todas as páginas contidas na rede, até porque, todas as vezes em que navegarmos para uma nova página, precisaremos antes, fazer um requisição a um determinado servidor e por decorrência desse processo, enviaremos um conjunto de informações

    //Toda vez que o navegador envia uma requisição ao servidor web, o mesmo também envia um cabeçalho que contém as informações refentes a requisição. Todas as requisiçoes enviadas serão recebidas pelo servidor web. E este ira analisar o cabeçalho para ver o que se trata, e entao ira repassar o mesmo para o script contido nessa solicitação. Todas vezes que um servidor web invocar um script PHP sera passado para esse script o cabeçalho recebido da web e que contem todas as informações refentes a solicitação. TODAS AS VEZES QUE UM SCRIPT FOR EXECUTADO HAVERA UM CABEÇALHO QUE CONTEM AS INFORMAÇÕES DA REQUISIÇÃO

    //MÉTODOS DE REQUISIÇÃO
        #GET dados trafegam junto a URL: tem a principal característica o fato da URL conter além do endereço alguns parâmetros do tipo chave e valor que serão utilizados pelo servidor.,
        
        #POST dados trafegam no cabeçalho da requisição. As informações elas não irao trafegar junto a URL, assim as informações enviadas atraves do metodo POST elas estao contidas no cabeçalho da requisição, ou seja, o cabeçalho padrão pro envio e recebimento de dados da WEB.

    //revisão sobre o formato de uma URL:
        # protocol://hostname:port/path-and-file-name

            # protocol:// define o protocólo.

            # hostname o endereço do site, ou o ip do site mesmo

            # port definição da porta. Se a porta for omitida, será entendido que queremos fazer acesso a porta 80, ou seja, a porta padrao para comunicação web

            # path-and-file-name
        
    //exemplo de um caso real:
        # http://www.excript.com/script.php?var1=valor1&var2=valor2
            
            # http:// >>protocólo utilizado<<
            
            # www.excript.com >>host name, o endereço no caso<<

            # porta 80 >>pois foi omitido qual a porta<<

            # script.php >>nome do script<<

            # ? >>utilização de uma interrogação, responsavel por separar a parte da nossa URL com os parametros que estao sendo enviados numa requisição do tipo GET<<

        //Quando o script.php receber essa requisição, será passado para ele a URL e os parâmetros que foram enviados junto a URL. E esses valores serao acessados pelas variaves globais GET e POST. Ou seja, as variaveis que nos utilizamos para receber requisições do tipo GET e POST

?>
