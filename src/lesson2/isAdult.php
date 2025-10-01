<?php
declare(strict_types=1);
function isAdult(int $age) : bool {
    return ($age >= 18);
}

echo isAdult(20);  // ✅ true
echo isAdult(17);  // ✅ false
echo isAdult('20'); // ❌ Должна быть ошибка TypeError
