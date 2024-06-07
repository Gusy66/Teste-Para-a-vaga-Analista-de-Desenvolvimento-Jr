<?php


// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024



//é primo
function isCousin($num)
{

    if ($num <= 1) {
        return false;
    }

    if ($num <= 3) {
        return true;
    }

    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }

    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
    }

    return true;
}

$num = 132;
if (isCousin($num)) {
    echo "$num é um número primo.";
} else {
    echo "$num não é um número primo.";
}

?>