<?php

    $soma = 49.90;
    if($soma >= 50){
        echo "Frete Grátis!";
    }else{
        echo "Frete R$ 19,90";
    }

    echo "<hr>";

    $idade = 14;
    if ($idade < 18) {
        echo "Site somente para maiores de idade!";
    } else{
        echo "Entrada Permitida.";
    }

    echo "<hr>";

    $funcionario = "Henrique";
    $cod = 10;

    if ($funcionario != "Henrique"){
        echo "Acesso Liberado!";
    }else{
        echo "Acesso Negado!";
    }

    echo "<hr>";

    $setor = "Gerência";
    if ($setor == "Financeiro" or $setor == "Gerencia"){
        echo "Acesso liberado!";
    }else{
        echo "Acesso bloqueado!";
    }

    echo "<hr>";
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 5;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    if ($media >= 7) {
        printf("Aprovado: média %.2f.", $media);
    } elseif($media <= 5){
        printf("Reprovado: média %.2f.", $media);
    } 
    else {
        printf("Recuperação: média %.2f.", $media);
    }

    echo "<hr>";
    
    $lado1 = 9;
    $lado2 = 9;
    $lado3 = 8;

    if ($lado1 == $lado2 and $lado1 == $lado3){
        echo "Triângulo Equilátero!";
    }elseif($lado1 != $lado2 and $lado1 != $lado3 and $lado2 != $lado3){
        echo "Triângulo Escaleno";
    }else{
        echo "Triângulo Isósceles!";
    }

    echo "<hr>";

    $day = "Quarta";
    switch ($day) {
        case "Domingo":
            $resultado = "Dia de folga";
            break;
        case "Segunda":
            $resultado = "Dia de trabalho";
            break;
        case "Terça":
            $resultado = "Dia de trabalho";
            break;
        case "Quarta":
            $resultado = "Dia de Descanso";
            break;
        case "Quinta":
            $resultado = "Dia de trabalho";
            break;
        case "Sexta":
            $resultado = "Dia de trabalho";
            break;
        case "Sábado":
            $resultado = "Dia de folga";
            break;
        default:
            $resultado = "Valor não encontrado!";
            break;
    }
    echo "$day é $resultado";

    echo "<hr>";
    
    $idade = 15;
    switch ($idade) {
        case $idade < 18:
            $result = "You´re a minor!";
            break;
        case $idade < 40:
            $result = "Você é adulto.";
            break;
        case $idade < 60;
            $result = "Você está na meia-idade";
            break;
        case $idade < 80;
            $result = "Você está ficando velho";
            break;
        case $idade < 100;
            $result = "Você tem certa maturidade!";
            break;
        case $idade >= 100;
            $result = "Você esta com os dias contados...";
            break;
        default:
            echo "Valor não encontrado!";
            break;
    }
    echo $result;

    echo "<hr>";
    
    $setor = "Financeiro";
    echo $setor == "Marketing" ? "Acesso liberado" : "Bloqueado";
    
    echo "<hr>";

    $media = 8;
    $resultado = $media >= 7 ? "Aprovado" : "Reprovado";
    echo $resultado;