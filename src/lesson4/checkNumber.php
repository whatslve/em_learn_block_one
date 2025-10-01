<?php
function checkNumber(int $num) : string {
    if (!$num) return 'Ноль';
    return $num > 0 ? 'Положительное' : 'Отрицательное';
}

echo checkNumber(10);   // ✅ "Положительное"
echo checkNumber(-5);   // ✅ "Отрицательное"
echo checkNumber(0);    // ✅ "Ноль"
