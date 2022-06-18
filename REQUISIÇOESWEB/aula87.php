<?php
    //FORMULÁRIOS HTML.
    //O envio de requisições WEB, muitas vezes, ocorre com o uso de um formulário WEB. Com este, somos capazes de especificar os campos que estarão contidos da requisição, bem como, podemos associar um valor a cada campo, ou seja, conseguimos manipular uma requisição como for necessário. Uma requisição WEB feita através de um formulário WEB pode ser to tipo GET como também, do tipo POST. A diferença estará no formato em que a requisição será feita ao servidor.

    //A forma mais comum pro envio de dados é através do uso de formulários do HTML, através da tag FORM. No FORM é definido o script para onde o formulário deve ser enviado através do atributo action e também o método que as inforamções devem ser submetidas no caso, GET ou POST atráves do method da tag FORM.

    //Quando não definimos o atributo ACTION, ele enviará os dados para si mesmo. (Se for script.php, quando enviado o formulário, o mesmo enviará para script.php)

    #Exemplo:

        //<form method="GET">
        //</form>

        #É o mesmo que (se o nome do php for script.php no caso):

        //<form action="script.php" method="GET">
        //</form>

    //Todos os campos definidos no formulário (todos os inputs) serão passados como parâmetros pela URL, se for no método GET no exemplo acima.Mas podemos enviar esse formulário pelo método POST.


?>