<?php

$string = "Hello World";
$length = strlen($string);
echo $length; // Output: 11

$string = "Php is Server Side lungauge";
$wcount = str_word_count($string);
echo $wcount;

$string = "Php is Server Side lungauge";
$rev = strrev($string);
echo $rev;

$string = "Php is Server Side lungauge";
$pos = strpos($string, "Php lungauge");
echo $pos;

$string = "hello world";
$uppercase = strtoupper($string);
echo $uppercase; // Output: HELLO WORLD

$string = "HELLO WORLD";
$lowercase = strtolower($string);
echo $lowercase; // Output: hello world

$string = "hello world";
$capitalized = ucfirst($string);
echo $capitalized; // Output: Hello world

$string = "hello world";
$capitalized = ucwords($string);
echo $capitalized; // Output: Hello World

$string = "Hello, World!";
$replaced = str_replace("World", "Universe", $string);
echo $replaced; // Output: Hello, Universe!

$string = "Hello, World!";
$position = strpos($string, "World");
echo $position; // Output: 7

$string = "Hello, World!";
$substring = substr($string, 7, 5);
echo $substring; // Output: World

$string = "   Hello, World!   ";
$trimmed = trim($string);
echo $trimmed; // Output: Hello, World!

$string1 = "hello";
$string2 = "world";
$result = strcmp($string1, $string2);
echo $result; // Output: -1 (string1 is less than string2)

$name = "php";
$repeat = str_repeat($name, 5);
echo $repeat;


?>