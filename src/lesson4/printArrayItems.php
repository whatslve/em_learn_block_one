<?php
function printArrayItems(array $items) : void {
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
}

printArrayItems(["apple", "banana", "cherry"]);
// ✅ Ожидаемый результат:
// apple
// banana
// cherry
