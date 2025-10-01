<?php
declare(strict_types=1);
function multiply(int|float $a, int|float $b) : int|float {
    return $a * $b;
}

echo multiply(3, 2);     // ✅ Ожидаемый результат: 6
echo multiply(3.5, 2);   // ✅ Ожидаемый результат: 7.0
echo multiply('3', 2);   // ❌ Должна быть ошибка TypeError
