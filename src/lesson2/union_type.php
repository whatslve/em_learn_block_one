<?php
declare(strict_types=1);
function formatValue(float|int|string $val) : string {
    return (string)$val;
}

echo formatValue(100);      // ✅ "100"
echo formatValue(99.99);    // ✅ "99.99"
echo formatValue("hello");  // ✅ "hello"
echo formatValue(true);     // ❌ Должна быть ошибка TypeError
