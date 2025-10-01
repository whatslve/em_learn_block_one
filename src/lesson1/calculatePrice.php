<?php

function calculatePrice($basePrice, $discount, $tax) {
    return json_encode([
        $basePrice,
        $discount,
        $tax
    ]);
}

echo calculatePrice(basePrice: 1000, discount: 10, tax: 5); // ✅ 945
echo calculatePrice(tax: 5, discount: 10, basePrice: 2000); // ✅ 1890
