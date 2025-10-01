<?php
function factorial(int $num) : int {
    $factorial = 1;
    for ($i = 2; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo factorial(5);  // ✅ 120

echo factorial(3);  // ✅ 6

echo factorial(1);  // ✅ 1

echo factorial(0);  // ✅ 1
