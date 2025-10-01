<?php
function getUserEmail(object $user) : string {
    $email = $user->profile?->email;
    if(!$email) return 'Email не найден';
    return $email;
}


$user = (object)[
    'profile' => (object)[
        'email' => 'test@example.com'
    ]
];
echo getUserEmail($user); // ✅ "test@example.com"

$user = (object)[
    'profile' => null
];
echo getUserEmail($user); // ✅ "Email не найден"
