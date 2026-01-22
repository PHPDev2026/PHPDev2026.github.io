<?php
/**
* Calculate total value
*
* @param float $price
* @param float $quantity
* @param float $tax
* @return float
*/
function calculateTotal(float $price, float $quantity, float $tax): float {
    return ($price * $quantity) + $tax;
}
$total = calculateTotal(2, 5, 3);
echo "Total: $total";
