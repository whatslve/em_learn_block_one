<?php

function orderPizza($size = 'medium', $crust = 'thin', $toppings = ['cheese']) {
    $toppingsList = '';
    foreach ($toppings as $k => $topping) {
        if(!$k) $toppingsList .= $topping;

        else $toppingsList .= ', ' . $topping;
    }
    return 'Заказ: ' . $size . ' пицца на ' . $crust . ' тесте с ' . $toppingsList;
}

echo orderPizza();
// ✅ "Заказ: medium пицца на тонком тесте с cheese"

echo orderPizza(size: "large", toppings: ["cheese", "pepperoni"]);
// ✅ "Заказ: large пицца на тонком тесте с cheese, pepperoni"
