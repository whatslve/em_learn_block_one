<?php

function filterEvenNumbers(array $numbers) : array {
    return array_filter($numbers, function($number) {
        return $number % 2 == 0;
    });
}

print_r(filterEvenNumbers([1, 2, 3, 4, 5, 6]));
// ✅ Ожидаемый результат: [2, 4, 6]

print_r(filterEvenNumbers([11, 15, 21]));
// ✅ Ожидаемый результат: []
