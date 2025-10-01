<?php

function formatText(string $text, bool $upcase = false): string {
    return $upcase ? strtoupper($text) : $text;
}

echo formatText("hello");       // ✅ "hello"
echo formatText("hello", true); // ✅ "HELLO"
