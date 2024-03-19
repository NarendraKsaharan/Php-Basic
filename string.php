<?php

// String php

$name = "sonu";

echo strlen($name);

echo "<br>";

$name = "Ram is a good boy";

echo str_word_count($name);

echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "good");
echo "<br>";

echo str_replace("ram", "mohan", $name);
echo "<br>";

echo "<pre>";

echo rtrim("   Ram is a good boy   ");

echo "<br>";

echo ltrim("   $name   ");

echo "</pre>";

echo "<br>";

$name = "Ram";

echo str_repeat($name, 5);
?>