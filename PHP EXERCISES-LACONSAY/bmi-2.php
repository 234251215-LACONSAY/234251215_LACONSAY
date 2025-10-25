<?php
$weight = 70; // kg
$height = 1.75; // meters

$bmi = $weight / ($height * $height);

echo "BMI: " . number_format($bmi, 2);
?>
