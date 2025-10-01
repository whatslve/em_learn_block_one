<?php

function getUserEmails(array $users) : array {
    $emails = [];
    foreach ($users as $user) {
        $emails[] = $user['email'];
    }
    return $emails;
}

$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
];

print_r(getUserEmails($users));
// ✅ Ожидаемый результат: ["alice@example.com", "bob@example.com"]
