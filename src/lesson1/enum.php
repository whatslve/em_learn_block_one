<?php
enum OrderStatus: string {
    case Pending = 'Заказ в ожидании';
    case Shipped = 'Заказ отправлен';
    case Delivered = 'Заказ доставлен';
}
function getDeliveryMessage(OrderStatus $enum) {
    return $enum->value;
}
echo getDeliveryMessage(OrderStatus::Pending);   // ✅ "Заказ в ожидании"
echo getDeliveryMessage(OrderStatus::Shipped);   // ✅ "Заказ отправлен"
echo getDeliveryMessage(OrderStatus::Delivered); // ✅ "Заказ доставлен"
