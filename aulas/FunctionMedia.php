<?php
function calcularMedia() {

    $numeros = func_get_args();
    

    if (count($numeros) == 0) {
        return 0;
    }


    $soma = array_sum($numeros);


    $quantidade = count($numeros);


    $media = $soma / $quantidade;

    return $media;
}

echo calcularMedia(10, 18, 12);
echo "<br>";
echo calcularMedia(15, 5, 6, 10, 8);
?>
