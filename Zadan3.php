<?php

function Days(int $Number): int|string
{

    if ($Number < 1 || $Number > 12) {
        return "Ошибка: Некорректный номер месяца. Введите число от 1 до 12.";
    }


    $daysInMonth = [
        31,
        28,
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31
    ];


    return $daysInMonth[$Number - 1];
}



$Number = readline("Номер месяца");


$result = Days($Number);
echo "Количество дней в этом месяце: " . $result . "\n";