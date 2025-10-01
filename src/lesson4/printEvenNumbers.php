<?php

function printEvenNumbers(int $num) : void {
    $counter = 1;
    while ($counter <= $num) {
        $counter++;
        if($counter % 2 !== 0) continue;
        echo $counter . PHP_EOL;
    }
}

printEvenNumbers(10);
// ✅ Ожидаемый результат:
// 2
// 4
// 6
// 8
// 10
