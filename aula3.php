<?php
//Comandos de Repetição (looping)
/*
    indice: De onde começa a repetição
    Teste Lógico: Lógica para
    Incremento: O que acontece com o índice após cada repetição
*/
    for ($i=10; $i > -1 ; $i--) { 
        echo "$i <br>";
    }
    
    echo "<hr>";
    
    for ($i=0; $i <= 20 ; $i+=2) { 
        echo "$i <br>";
    }

    echo "<hr>";
    $bebidas =["Suco", "Refrigerante", "Água", "Cerveja", "Vinho", "Vodka", "Energético"];

    $quantidade = count($bebidas);
    
    for ($i=0; $i < $quantidade; $i++) {
        echo $bebidas[$i] . "<br>";
    }

    $nomeCompleto = "Lucas";
    $nomeCompleto .= " Oliveira";
    
    echo "<h1> $nomeCompleto </h1>";
    $lista = "<ul>";
    for ($i=0; $i < $quantidade; $i++) {
        $lista .= "<li>" . $bebidas[$i] . "</li>"; 
    }

    $lista .= "</ul>";
    
    //WHILE
    $i =  1;
    while($i <=10){
        echo "$i - ";
        $i++; 
    }

    echo "<hr>";
    $i = 0;
    while ($i < $quantidade) {
        echo $bebidas[$i] . "<hr>";
        $i++;
    }    
    
    $letras = range('A', 'Z');
    for ($i=0; $i < count($letras); $i++) {
        echo strtoupper($letras[$i]) . ", ";
    }
    
    echo "<hr>";

    //Foreach - perfeito para se utilizar com Arrays 
    foreach ($bebidas as $bebida) {
        echo $bebida . "<br>";
    }

    $produtos = array(
        [   
            "nome" => "Teclado",
            "modelo" => "ABC",
            "preco" => "R$ 49,90"
        ],
        [
            "nome" => "Mouse",
            "modelo" => "G403",
            "preco" => "R$ 199,90"
        ],
        [
            "nome" => "Monitor",
            "modelo" => "Samsung Odyssey G3",
            "preco" => "R$ 700,00"
        ]
    
    );

    //echo $produtos[2]["nome"];
    foreach ($produtos as $produto){
        echo "<p>O Produto ".$produto['nome']. " do modelo ". $produto['modelo'] . " está custando " .$produto['preco'] . "</p>";    
    };   
?>