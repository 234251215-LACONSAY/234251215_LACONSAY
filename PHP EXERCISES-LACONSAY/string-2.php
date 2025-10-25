<?php
$sentence = "Hello, how are you doing today?";

$length = strlen($sentence);
$word_count = str_word_count($sentence);
$uppercase = strtoupper($sentence);
$lowercase = strtolower($sentence);

echo "Number of characters: $length<br>";
echo "Number of words: $word_count<br>";
echo "Uppercase: $uppercase<br>";
echo "Lowercase: $lowercase<br>";
?>
