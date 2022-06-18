<?php
/*     declare(strict_types = 0);
    include("code.php");
    //include_once();
    //require();
    //require_once();

    $variavel_global = 10;

    function printar_parametros(... $variaveis) {
        //echo $variaveis; //da erro pois é um array.
        foreach($variaveis as $chave => $elemento) {
            echo "[$chave] -> $elemento" . "</br>";
        }

    }

    function retorno($ddd, $telefone) : string {
        return "($ddd) $telefone"; //com declare(strict_types= 1); da erro caso retorne "1" definido para retornar int na função
    }

    $funcao_anonima = function($nome) use(&$variavel_global) {
        echo "Isso é uma função anônima que recebeu o parâmetro $nome." . "</br>";
        $variavel_global = 5;
    };

    function invocacao($funcao) {
        $funcao("Luiz Gustavo");
    }

    printar_parametros("Olá", "Oi", "Hello", "Eai");
    echo retorno(84, 92292549) . "</br>"; //com declare(strict_types= 1); da erro caso retorne "1" definido para retornar int na função
    echo "variavel_global antes: $variavel_global" . "</br>";
    invocacao($funcao_anonima);
    echo "variavel_global depois: $variavel_global" . "</br>";

    $ddd = $_GET["ddd"] ?? "00";
    $numero = $_GET["telefone"] ?? $_GET["celular"] ?? "0000-0000";

    echo "($ddd) $numero" . "</br>";
    
    echo $variavel_code; */

    function processa_lista($lista, $func) {
        foreach($lista as &$item) {
            $item = $func($item);
        }
        return $lista;
    }
    $quadrado = function($item) {
        return $item**2;
    };
    print_r(processa_lista(
        range(1,10,2),
        function($item) use($quadrado) {
            return $quadrado($item) * $item;
    }));

?>