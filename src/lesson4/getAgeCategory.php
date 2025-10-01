<?php
function getAgeCategory(int $age) : string {
    return match (true) {
        $age <= 12 => 'Ребенок',
        $age > 12 && $age <= 17 => 'Подросток',
        $age >= 18 && $age <= 64 => 'Взрослый',
        $age >= 65 => 'Пожилой',

    };
}

echo getAgeCategory(8);   // ✅ "Ребенок"
echo getAgeCategory(15);  // ✅ "Подросток"
echo getAgeCategory(30);  // ✅ "Взрослый"
echo getAgeCategory(70);  // ✅ "Пожилой"
