<?php


// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024

//nesse código não foi usada nenhuma função ou blib que checasse data


function anoBissexto($year)
{
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    } else {
        return false;
    }
}


$year = 2023;
if (anoBissexto($year)) {
    echo "$year é um ano bissexto.";
} else {
    echo "$year não é um ano bissexto.";
}
?>