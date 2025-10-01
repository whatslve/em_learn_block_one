<?php

function generatePassword($len = 8, $incNums = true, $incSpecChars = false) {
    $salt = time() * rand(1000, 9999);
    $result = hash('sha256', $salt);
    $result = substr($result, 0, $len);

    if ($incNums) {
        $pos = random_int(0, $len - 1);
        $digit = (string)random_int(0, 9);
        $result = substr($result, 0, $pos) . $digit . substr($result, $pos + 1);
    }
    if ($incSpecChars) {
        $specChars = ['@', '!', '^', '#', '&', '*'];
        $count = random_int(1, max(1, intdiv($len, 3)));

        for ($i = 0; $i < $count; $i++) {
            $char = $specChars[array_rand($specChars)];
            $pos  = random_int(0, strlen($result));
            $result = substr($result, 0, $pos) . $char . substr($result, $pos);
        }

        $result = substr($result, 0, $len);
    }

    return $result;
}

echo generatePassword();
// ✅ Должен быть 8-значный пароль с цифрами.
echo PHP_EOL;
echo generatePassword(len: 12, incSpecChars: true);
