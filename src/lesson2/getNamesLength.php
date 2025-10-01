<?php
declare(strict_types=1);
function countSymbs(string $str) : int {
    return mb_strlen($str);
}

function getNamesLength(array $arr) : array {
    $counts = [];
    foreach ($arr as $k => $str) {

        $counts[] = countSymbs($str);
    }
    return $counts;
}

print_r(getNamesLength(["Alice", "Bob", "Charlie"]));
// ✅ Ожидаемый результат: [5, 3, 7]

print_r(getNamesLength([123, "Bob", "Charlie"]));
// ❌ Должна быть ошибка TypeError (только строки разрешены)
