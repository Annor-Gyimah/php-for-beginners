<?php
// Arithematic operators
// * + - / **
$x = 2;
$y = 4;
$z = null;
$z = $x - $y;
echo "The subtraction result is {$z} <br>";
$z = $x + $y;
echo "The addition result is {$z} <br>";
$z = $x * $y;
echo "The multiplication result is {$z} <br>";
$z = $x ** $y;
echo "The raised to the power result is  {$z} <br>";
$z = $x/$y;
echo "The division result is {$z} <br>";
$z = $z % $y;
echo "The modulo result is {$z} <br>";

// Increment / Decrement operators

$counter = 10;
$counter++;
echo "the counter is {$counter} <br>";
$counter-=2;
echo "the new counter {$counter} <br>";

//operator sequence
// ()
// **
// * / %
// + -

$total = null;
$total = $x + $y - $x * $y / $x ** $y;
echo "the result is {$total}";

?>