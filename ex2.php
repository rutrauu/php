<?php

    $alunos = array(
        [
            "nome" => "Artur",
            "curso" => "ADS",
            "nota" => 6
        ],
        [
            "nome" => "Pedro",
            "curso" => "PMM",
            "nota" => 5
        ],
        [
            "nome" => "Pablo",
            "curso" => "Psicologia",
            "nota" => 9
        ],
        [
            "nome" => "Paula",
            "curso" => "P&P",
            "nota" => 9.5
        ],
        [
            "nome" => "Joana",
            "curso" => "Psicanálise",
            "nota" => 10
        ]
    );
    
    foreach ($alunos as $aluno) {
        echo "<p>Aluno " . $aluno["nome"] . ", do curso " . $aluno["curso"] .
        ", tirou a nota " . $aluno["nota"] . "</p>";
    }


?>