<?php

// Int -> Number
// Boolean -> True / False
// Double - > 10.001
// Float - > 10.11
// String - > Text


$w = 10;
//var_dump(is_int($w));


$x = 59.85;
//var_dump(is_int($x));

//is_float() OR is_double() will be same.
//is_numeric()


// Cast float to int
$y = 23465.768;
$int_cast_a = (int)$y;
echo $int_cast_a;

echo "<hr>";

// Cast string to int
$z = "23465.768";
$int_cast_b = (int)$z;
echo $int_cast_b;