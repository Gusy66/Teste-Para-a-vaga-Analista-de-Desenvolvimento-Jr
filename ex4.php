<?php

// Teste Para a vaga Analista de Desenvolvimento Jr

// Gustavo Bocci Pimentel 

// 06/06/2024



function robotNamesGen($numRobos)
{
    $gen = [];
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $nums = '0123456789';

    for ($i = 0; $i < $numRobos; $i++) {
        do {
            $name = '';
            for ($j = 0; $j < 2; $j++) {
                $name .= $chars[rand(0, strlen($chars) - 1)];
            }
            for ($j = 0; $j < 3; $j++) {
                $name .= $nums[rand(0, strlen($nums) - 1)];
            }
        } while (in_array($name, $gen));

        $gen[] = $name;
    }

    return $gen;
}

$numRobos = 10;
$roboName = robotNamesGen($numRobos);


print_r($roboName);

?>