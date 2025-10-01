<?php

function calculatePrice(float $basePrice, float $discount, float $tax) : float {
    $discountValue = ($basePrice * $discount) / 100;
    $priceAfterDiscount = $basePrice - $discountValue;
    $taxValue = ($priceAfterDiscount * $tax) / 100;
    return $priceAfterDiscount + $taxValue;
}

echo calculatePrice(basePrice: 1000, discount: 10, tax: 5); // ✅ 945
echo calculatePrice(tax: 5, discount: 10, basePrice: 2000); // ✅ 1890
