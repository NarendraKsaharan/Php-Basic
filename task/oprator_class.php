<?php
echo "<h3>Operators</h3>";
// 1.Arithmetic operators
// 2.Assignment operators
// 3.Comparison operators
// 4.Increment/Decrement operators
// 5.Logical operators
// 6.String operators
// 7.Array operators
// 8.Conditional assignment operators

// 1.Arithmetic Operator
//+,-,*,/,%,**

$a = 18;
$b = 4;

echo "Sum of A & B is:  ".$a + $b;
echo "<br>";
echo "<br>";
//---------------------------------

echo "sub of A & B is:  ".$a - $b;
echo "<br>";
echo "<br>";
//---------------------------------

echo "Mult. of A & B is =  ".$a * $b;
echo "<br>";
echo "<br>";
//---------------------------------

echo "Div of A & B is:  ".$a / $b;
echo "<br>";
echo "<br>";
//---------------------------------

echo "Module of A & B is  =".$a % $b;
echo "<br>";
echo "<br>";
//---------------------------------

echo "Exp of A<sup>B</sup> is:  ".$a ** $b;
echo "<br>";
echo "<br>";
echo "Exp of 18<sup>4</sup> is:  ".$a ** $b;
//---------------------------------

//=====================================================

// 2.Assignment operators

// assignopretor
// =, +=, -=, /=, *=, **=

$a = 10;
$b = 5;

// Assignment
$c = $a; // $c is assigned the value of $a (10)

// Addition assignment
$a += $b; // $a is now 15 ($a + $b)

// Subtraction assignment
$a -= $b; // $a is now 10 ($a - $b)

// Multiplication assignment
$a *= $b; // $a is now 50 ($a * $b)

// Division assignment
$a /= $b; // $a is now 10 ($a / $b)

// Modulo assignment
$a %= $b; // $a is now 0 ($a % $b)

// Concatenation assignment
$string = "Hello";
$string .= " World"; // $string is now "Hello World" ($string + " World")

echo "Assignment: " . $c . "<br>";
echo "Addition assignment: " . $a . "<br>";
echo "Subtraction assignment: " . $a . "<br>";
echo "Multiplication assignment: " . $a . "<br>";
echo "Division assignment: " . $a . "<br>";
echo "Modulo assignment: " . $a . "<br>";
echo "Concatenation assignment: " . $string . "<br>";

//=======================================================================

// 3.Comparison operators

// Comparision Operator -> bool
// ==, ===, !=, !==, >, >=, <, <=, <=>
$a = 10;
$b = 5;
$c = 10;

// Equal to
$result1 = ($a == $b); // false

// Not equal to
$result2 = ($a != $b); // true

// Identical
$result3 = ($a === $c); // true

// Not identical
$result4 = ($a !== $b); // true

// Greater than
$result5 = ($a > $b); // true

// Less than
$result6 = ($a < $b); // false

// Greater than or equal to
$result7 = ($a >= $c); // true

// Less than or equal to
$result8 = ($a <= $b); // false

// Spaceship (Combined comparison)
$result9 = ($a <=> $b); // 1 (returns -1 if $a < $b, 0 if $a == $b, and 1 if $a > $b)

// Null coalescing
$result10 = ($a ?? $b); // 10 (returns $a if it is not null, otherwise returns $b)

//============================================================================================


// 4.increment/Decrement Operator
// ++ (pre/post increment), --(pre/post decrement)

$a = 5;
$b = 10;

// Post-increment
$result1 = $a++; // $result1 = 5 (original value of $a), $a is now 6
$result2 = $b--; // $result2 = 10 (original value of $b), $b is now 9

// Pre-increment
$result3 = ++$a; // $result3 = 7 ($a is incremented first, then assigned to $result3)
$result4 = --$b; // $result4 = 8 ($b is decremented first, then assigned to $result4)

// Increment/Decrement in expressions
$result5 = $a++ + ++$b; // $result5 = 7 + 9 = 16, $a is now 8, $b is now 9
$result6 = --$a - $b--; // $result6 = 7 - 9 = -2, $a is now 7, $b is now 8

echo "Post-increment: " . $result1 . "<br>";
echo "Post-decrement: " . $result2 . "<br>";
echo "Pre-increment: " . $result3 . "<br>";
echo "Pre-decrement: " . $result4 . "<br>";

$x = 10;
$x = $y = 20;
++$x;
$x++;
--$y;
--$y;
++$y;
$x++;
$x++;
++$x;
$y++;
$y++;
echo $x; // 15 25 
echo $y; // 20 22

//-----------------------------------

// Example
$a = 5;
$b = ++$a + $a++;
// $b = 6 + 6 = 12
echo $b; // Output: 12

//---------------------------------------

$x = 10;
$y = --$x - $x--;
// $y = 9 - 9 = 0
echo $y; // Output: 0

//----------------------------

$p = 3;
$q = ++$p * $p++ + $p--;
// $q = 4 * 4 + 4 = 20
echo $q; // Output: 20

//---------------------------------

$m = 2;
$n = --$m * $m++ - ++$m;
// $n = 1 * 1 - 3 = -2
echo $n; // Output: -2

//------------------------------

$i = 5;
$j = $i-- + ++$i - $i++ + --$i;
// $j = 5 + 5 - 5 + 4 = 9
echo $j; // Output: 9

//----------------------------------

$a = 3;
$b = --$a + ++$a * $a-- - $a++;
// $b = 2 + 4 * 4 - 3 = 15
echo $b; // Output: 15

//----------------------------------

$x = 5;
$y = ++$x - --$x + $x++ * $x--;
// $y = 6 - 5 + 5 * 5 = 31
echo $y; // Output: 31

//--------------------------------------

$p = 2;
$q = $p-- - --$p * ++$p + $p++;
// $q = 2 - 0 * 1 + 1 = 3
echo $q; // Output: 3

//----------------------------------------


$m = 4;
$n = --$m * ++$m + $m-- - $m++;
// $n = 3 * 5 + 5 - 4 = 16
echo $n; // Output: 16

//-------------------------------------------

$i = 6;
$j = ++$i + $i-- - --$i * $i++;
// $j = 7 + 7 - 5 * 5 = 7 + 7 - 25 = -11
echo $j; // Output: -11

//---------------------------------------------

$a = 5;
$b = 10;
$c = --$a + ++$b - $a++ * --$b;
// $c = 4 + 11 - 4 * 10 = 4 + 11 - 40 = -25
echo $c; // Output: -25

//--------------------------------------------

$x = 3;
$y = ++$x - $x++ + --$x * $x--;
// $y = 4 - 4 + 3 * 3 = 4 - 4 + 9 = 5
echo $y; // Output: 5

//---------------------------------------------

$p = 2;
$q = $p++ - --$p * ++$p + $p--;
// $q = 2 - 2 * 3 + 3 = 2 - 6 + 3 = -1
echo $q; // Output: -1

//--------------------------------------------

$m = 4;
$n = --$m * ++$m + $m-- - --$m;
// $n = 3 * 4 + 4 - 2 = 12 + 4 - 2 = 14
echo $n; // Output: 14

//-------------------------------------------

$i = 6;
$j = ++$i + $i-- - --$i * $i++;
// $j = 7 + 7 - 5 * 5 = 7 + 7 - 25 = -11
echo $j; // Output: -11

//--------------------------------------


$a = 8;
$b = 3;
$c = ++$a - --$b * $a-- + ($b++ - ++$a);
// $c = 9 - 2 * 9 + (2 - 11) = 9 - 18 + (-9) = -18
echo $c; // Output: -18

//-------------------------------------------------


$x = 5;
$y = 2;
$z = ++$x + $x-- - --$y * $y++ + ($y-- - ++$x);
// $z = 6 + 6 - 1 * 1 + (1 - 8) = 6 + 6 - 1 + (-7) = 4
echo $z; // Output: 4

//------------------------------------------------------


$p = 7;
$q = 4;
$r = ++$p + --$q * $q-- + ($p++ - --$q);
// $r = 8 + 3 * 3 + (8 - 2) = 8 + 9 + 6 = 23
echo $r; // Output: 23

//----------------------------------------------------

$m = 6;
$n = 3;
$o = --$m - ++$n * $m-- + ($n++ - $m++);
// $o = 5 - 4 * 5 + (4 - 6) = 5 - 20 + (-2) = -17
echo $o; // Output: -17

//-----------------------------------------------------


$i = 4;
$j = 2;
$k = ++$i - --$j * $i++ + ($j-- - ++$i);
// $k = 5 - 1 * 5 + (1 - 7) = 5 - 5 + (-6) = -6
echo $k; // Output: -6

//----------------------------------------------------


$a = 9;
$b = 5;
$c = ++$a - $a-- * --$b + ($b++ - $a++);
// $c = 10 - 10 * 4 + (4 - 8) = 10 - 40 + (-4) = -34
echo $c; // Output: -34

//------------------------------------------------------
//======================================================


// 5.Logical operators
// fun-> &&/and , ||/or , !

$a = true;
$b = false;

// Logical AND
$result1 = $a && $b; // false

// Logical OR
$result2 = $a || $b; // true

// Logical NOT
$result3 = !$a; // false

// Logical AND with multiple conditions
$result4 = $a && $b && true; // false

// Logical OR with multiple conditions
$result5 = $a || $b || false; // true

// Logical AND with mixed conditions
$result6 = ($a && !$b); // true

// Logical OR with mixed conditions
$result7 = ($a || !$b); // true

// Short-circuit evaluation
$result8 = ($a && someFunction()); // false (someFunction() is not evaluated if $a is false)

// Combining logical operators
$result9 = ($a && $b) || ($a && !$b); // true

// Logical XOR
$result10 = ($a xor $b); // true

echo "Logical AND: " . ($result1 ? 'true' : 'false') . "<br>";
echo "Logical OR: " . ($result2 ? 'true' : 'false') . "<br>";
echo "Logical NOT: " . ($result3 ? 'true' : 'false') . "<br>";
echo "Logical AND with multiple conditions: " . ($result4 ? 'true' : 'false') . "<br>";
echo "Logical OR with multiple conditions: " . ($result5 ? 'true' : 'false') . "<br>";
echo "Logical AND with mixed conditions: " . ($result6 ? 'true' : 'false') . "<br>";
echo "Logical OR with mixed conditions: " . ($result7 ? 'true' : 'false') . "<br>";
echo "Short-circuit evaluation: " . ($result8 ? 'true' : 'false') . "<br>";
echo "Combining logical operators: " . ($result9 ? 'true' : 'false') . "<br>";
echo "Logical XOR: " . ($result10 ? 'true' : 'false') . "<br>";

//=============================================================

// 6.String operators
// ./.=

$a = "Hello";
$b = "World";

// Concatenation
$result1 = $a . $b; // "HelloWorld"
//---------------------------------------------------

// Concatenation assignment
$result2 = $a;
$result2 .= $b; // $result2 = "HelloWorld"
//------------------------------------------------------

//$tx1 ="HELLO";
//$tx2 ="PHP";
//$tx3 ="OPERATOR";
//$tx4 =$tx1 . $tx2 .$tx3; //hello php operator
//echo$tx4;
//---------------------------------------

// String length
$result3 = strlen($a); // 5

// String concatenation with numbers
$result4 = $a . 123; // "Hello123"

// String interpolation
$result5 = "{$a} {$b}"; // "Hello World"

// Case-insensitive string comparison
$result6 = strcasecmp($a, "hello"); // 0 (equal)

// String trimming
$string = "   Hello World   ";
$result7 = trim($string); // "Hello World"

// String splitting
$string = "Hello,World,How,Are,You";
$result8 = explode(",", $string); // ["Hello", "World", "How", "Are", "You"]

// String replacement
$string = "Hello World";
$result9 = str_replace("World", "Universe", $string); // "Hello Universe"

// String conversion to lowercase
$result10 = strtolower($a); // "hello"

echo "Concatenation: " . $result1 . "<br>";
echo "Concatenation assignment: " . $result2 . "<br>";
echo "String length: " . $result3 . "<br>";
echo "String concatenation with numbers: " . $result4 . "<br>";
echo "String interpolation: " . $result5 . "<br>";
echo "Case-insensitive string comparison: " . $result6 . "<br>";
echo "String trimming: " . $result7 . "<br>";
echo "String splitting: " . implode(", ", $result8) . "<br>";
echo "String replacement: " . $result9 . "<br>";
echo "String conversion to lowercase: " . $result10 . "<br>";

//============================================================

// 7.Array operators
// Example arrays
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [1, 2, 3];
$array4 = [3, 2, 1];
$array5 = ['a' => 1, 'b' => 2, 'c' => 3];
$array6 = ['d' => 4, 'e' => 5, 'f' => 6];
$array7 = ['a' => 1, 'b' => 2, 'c' => 3];
$array8 = ['c' => 3, 'b' => 2, 'a' => 1];

// Union
$result1 = $array1 + $array2; // [1, 2, 3, 4, 5, 6]

// Equality comparison
$result2 = ($array1 == $array3); // true

// Identity comparison
$result3 = ($array1 === $array3); // true

// Inequality comparison
$result4 = ($array1 != $array4); // true

// Non-identity comparison
$result5 = ($array1 !== $array4); // true

// Array merging
$result6 = array_merge($array1, $array2); // [1, 2, 3, 4, 5, 6]

// Array difference
$result7 = array_diff($array1, $array2); // [1, 2, 3]

// Array intersection
$result8 = array_intersect($array1, $array3); // [1, 2, 3]

// Array union (associative arrays)
$result9 = $array5 + $array6; // ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6]

// Array equality comparison (associative arrays)
$result10 = ($array5 == $array7); // true

echo "Union: " . implode(", ", $result1) . "<br>";
echo "Equality comparison: " . ($result2 ? 'true' : 'false') . "<br>";
echo "Identity comparison: " . ($result3 ? 'true' : 'false') . "<br>";
echo "Inequality comparison: " . ($result4 ? 'true' : 'false') . "<br>";
echo "Non-identity comparison: " . ($result5 ? 'true' : 'false') . "<br>";
echo "Array merging: " . implode(", ", $result6) . "<br>";
echo "Array difference: " . implode(", ", $result7) . "<br>";
echo "Array intersection: " . implode(", ", $result8) . "<br>";
echo "Array union (associative arrays): " . implode(", ", $result9) . "<br>";
echo "Array equality comparison (associative arrays): " . ($result10 ? 'true' : 'false') . "<br>";

//====================================================================

//8.Conditional Assignment Operator

// ??, ?:

// $age = 25;

//echo $age??"N/A";

//---------------------------------------------

// $a = 40;
// $b = 30;

// $c = ($a > $b)?"A is big":"B is big";
// echo $c;

// $a =20;
// $b =10;
// $c = ($a > $b)?"true part":"false part";
// echo $c;
// echo "<br>";

//--------------------------------------

// $a =20;
// $b =30;
// $c = ($a > $b)?"true part":"false part";
// echo $c;
// echo "<br>";

//----------------------------------------------

// 2.Null coalesecing
// $a = 10;
// $b = 20;

// $age = $age??"Nulls";

// echo $age;

// $sonu =$sonu??"kumar";

// echo "<br>";
// echo $sonu;

//===================================================








?>