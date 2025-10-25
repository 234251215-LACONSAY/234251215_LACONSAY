<?php
$php_amount = 5000;

$usd_rate = 0.018; // Example: 1 PHP = 0.018 USD
$eur_rate = 0.016; // Example: 1 PHP = 0.016 EUR
$jpy_rate = 2.40;  // Example: 1 PHP = 2.40 JPY

$usd = $php_amount * $usd_rate;
$eur = $php_amount * $eur_rate;
$jpy = $php_amount * $jpy_rate;

echo "PHP $php_amount = USD " . number_format($usd, 2) . "<br>";
echo "PHP $php_amount = EUR " . number_format($eur, 2) . "<br>";
echo "PHP $php_amount = JPY " . number_format($jpy, 2) . "<br>";
?>
