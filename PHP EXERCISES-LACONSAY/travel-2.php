<?php
$distance = 150;         // km
$fuel_consumption = 12;  // km per liter
$fuel_price = 1.5;       // price per liter

$liters_needed = $distance / $fuel_consumption;
$travel_cost = $liters_needed * $fuel_price;

echo "Estimated travel cost for $distance km is: " . number_format($travel_cost, 2);
?>
