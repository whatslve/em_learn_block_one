<?php
function getStatusMessage(string $status) : string {
    return match($status) {
        'success' => 'Операция выполнена успешно',
        'error' => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default => 'Неизвестный статус',
    };
}

echo getStatusMessage('success'); // ✅ "Операция выполнена успешно"
echo getStatusMessage('error');   // ✅ "Произошла ошибка"
echo getStatusMessage('pending'); // ✅ "Операция в ожидании"
echo getStatusMessage('unknown'); // ❌ "Неизвестный статус"
