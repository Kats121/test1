<?php

function Treygolnik(float $a, float $b, float $c): string
{
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        return "Ошибка: Все стороны должны быть положительными.";
    }
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return " Такого Треугольник не существует.";
    }

    if ($a === $b && $b === $c) {
        return "Равносторонний треугольник.";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Равнобедренный треугольник.";
    } else {
        return "Разносторонний треугольник.";
    }
}


$a = readline("Введите длину стороны");

$b = readline("Введите длину стороны");


$c = readline("Введите длину стороны");

$result = Treygolnik($a, $b, $c);
echo $result . "\n";