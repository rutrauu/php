<?php 

$lanche = "Pizza";
echo $lanche;
echo "<hr>";

echo "Hoje no café da manhã comi $lanche";
echo "<hr>";
// O símbolo do ponto (.) contena textos
echo "Vou comer " . $lanche . " hoje a noite!";

//Array simples
$lanches = array("Pizza", "Pastel" , "Xis" , "Batata Frita" , "Hamburguer");
print_r($lanches);
echo "<hr>";

echo $lanches[3] . "<br>";
echo "<h1>" . $lanches[1] . "</h1>";

//Array Associativo
$aluno = array(
    "nome" => "Vitor de Almeida",
    "curso" => "ADS",
    "height" => 1.75,
    "cidade" => "Porto Alegre"
);

print_r($aluno);
echo "<hr>";
echo $aluno["nome"];

//A partir do PHP 5.4 - podemos criar arrays com []
$frutas = ["laranja", "limão", "Morango"];

//Array MultiDimensional
$alunos = array(
    [
        "nome" => "Ricardo",
        "curso" => "ADS",
        "cidade" => "Poa"
    ],
    [
        "nome" => "Sara",
        "curso" => ["PMM","ADS"],
        "cidade" => "Canoas"
    ],
    [
        "nome" => "Eddie",
        "curso" => "Canoas",
        "cidade" => "Esteio"
    ]
);
echo "<hr>";
echo $alunos[2]["curso"];
echo $alunos[1]["curso"][0];


echo "<hr>";
echo "<pre>";
print_r($alunos);
echo "</pre>";

//Constante
define("ALUNO", "Luis Felipe");
echo ALUNO;
define("ALUNO", "Fernando");


?>