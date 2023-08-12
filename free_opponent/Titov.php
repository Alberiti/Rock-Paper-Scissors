<?php

$jugadas = [];
$patrones = [];
$gana = [
    1 => 2, // Камень побеждает ножницы
    2 => 3, // Ножницы побеждают бумагу
    3 => 1, // Бумага побеждает камень
];

function You($o) {
    global $jugadas;
    global $patrones;
    global $gana;
    
    if ($o == 0) {
        $jugadas = [];
        $patrones = [];
        $gana = [
            1 => 2, // Камень побеждает ножницы
            2 => 3, // Ножницы побеждают бумагу
            3 => 1, // Бумага побеждает камень
        ];
        return rand(1,3);
        
    } else {
        $jugadas[] = $o;
        $pattern = array_slice($jugadas, -5);
        $patternKey = implode('', $pattern);
        
        if (!isset($patrones[$patternKey])) {
            $patrones[$patternKey] = [
                1 => 0, // Количество выборов камня
                2 => 0, // Количество выборов ножниц
                3 => 0, // Количество выборов бумаги
            ];
        }
        
        $patrones[$patternKey][$o]++;
        
        if (count($jugadas) > 5) {
            array_shift($jugadas);
        }
        
        $k = 5; // Начальное значение k
        
        while ($k >= 1 && !isset($patrones[implode('', array_slice($jugadas, -$k))])) {
            $k--;
        }
        
        if ($k == 0) {
            $output = rand(1, 3);
        } else {
            $prediction = $patrones[implode('', array_slice($jugadas, -$k))];
            $output = array_search(max($prediction), $prediction);
        }
        
        return $output;
    }
}
?>