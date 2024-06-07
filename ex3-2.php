<?php


// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024



// CÓDIGO IMPLEMENTADO COM DUAS RAIZES REAIS!

//função para achar as raizes da equação


function bhaskara($a, $b, $c)
{

    $delta = $b * $b - 4 * $a * $c;


    if ($delta >= 0) {
        $sqrtDelta = sqrt($delta);
        $x1 = (-$b + $sqrtDelta) / (2 * $a);
        $x2 = (-$b - $sqrtDelta) / (2 * $a);


        if ($delta == 0) {
            return [$x1, $x1];
        } else {
            return [$x1, $x2];
        }
    } else {

        return [];
    }
}


$a = 1;
$b = -3;
$c = 2;

$result = bhaskara($a, $b, $c);


print_r($result);

?>