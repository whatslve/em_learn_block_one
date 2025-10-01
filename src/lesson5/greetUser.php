<?php
function greetUser(string $name, string $lang = 'ru') : string {
    $greetingEn = 'Hello';
    if($lang == 'en') return $greetingEn . ', ' . $name;
    return 'Привет, ' . $name;
}

echo greetUser("Иван");      // ✅ "Привет, Иван!"
echo greetUser("John", "en"); // ✅ "Hello, John!"
