<?php
function printNumbers(int $num) : void {
    for ($i = 1; $i <= $num; $i++) {
        echo $i. PHP_EOL;
    }
}


printNumbers(5);
// ✅ Ожидаемый результат:
// 1
// 2
// 3
// 4
// 5
