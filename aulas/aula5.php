<?php

$churrasco = ["Picanha", "Salsichão", "Cerveja", "Pão de Alho", "Coração de Frango" ];
print_r($churrasco);

echo "<hr>";

//$array[] = Adiciona elemento no array
$churrasco[] = "Maminha";
print_r($churrasco);

echo"<hr>";

//array_pop() - extrai e retorna o último elemento de array, diminundo array em um elemento
$last = array_pop($churrasco);
echo"<h2>$last</h2>";
print_r($churrasco);

$first = array_shift($churrasco);
echo "<hr>";
echo "<h2>$first</h2>";
print_r($churrasco);

array_push($churrasco, "Abacaxi", "Farofa", "Maionese");
echo "<hr>";
print_r($churrasco);

$dados = ["aluno" => "Fulano", "cidade" => "Butiá", "curso" => "PMM", "nascimento" => "25/09/1985"];
$dados['estado civil'] = "Casado";
echo"<hr>";
print_r($dados);

$chaves = array_keys($dados); 
echo"<hr>";
print_r($chaves);

$total = [14, "1teste0", 12.5, 25, 32, 56];
$soma = array_sum($total);
echo "<hr>";
print_r($soma);




?>