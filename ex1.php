<?php

// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024




//função para receber os troféus

function uniqueNames($list1, $list2)
{

    $combined = array_merge($list1, $list2);


    $unique = array_unique($combined);


    sort($unique);

    return $unique;
}

// declarando as listas

$list1 = ['Ava', 'Emma', 'Olivia'];
$list2 = ['Olivia', 'Sophia', 'Emma'];

$result = uniqueNames($list1, $list2);


print_r($result);

?>