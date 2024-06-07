<?php
// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024

// CÓDIGO IMPLEMENTADO COM 1 RAIZ!
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

// Exemplo de uso
$a = 1;
$b = -2;
$c = 1;

$result = bhaskara($a, $b, $c);

// Exibe o resultado
print_r($result);
?>