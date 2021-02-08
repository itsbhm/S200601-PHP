<?php
/*

Folder Path: 3_Data_Types

PHP supports the following data types:

1). String
2). Integer
3). Float (floating point numbers - also called double)
4). Boolean
5). Array
6). Object
7). NULL
9). Resource

*/


// 1). String

$x = "Hello world!";
$y = 'Hello world!';

var_dump ($x);

echo "<br>";

var_dump($y);

// -------------------
echo '<hr>';
// -------------------

// 2). Integer
// -2,147,483,648 [Min] and 2,147,483,647 [Max]

$x = 5985;
var_dump($x);


// -------------------
echo '<hr>';
// -------------------


// 3). Float (floating point numbers - also called double)

$x = 10.365;
var_dump($x);

// -------------------
echo '<hr>';
// -------------------

// 4). Boolean
// true and false only

$x = true;
$y = false;

var_dump($y);

// -------------------
echo '<hr>';
// -------------------

// 5). Array

$arms = array("Anubhav", "Anurag", "Nitin", "Sangam", "Durgesh");

// print_r($arms);
var_dump($arms);

// -------------------
echo '<hr>';
// -------------------

// 6). Object

echo "Object Topic On Hold at 8th of Feb 2021";

// -------------------
echo '<hr>';
// -------------------

// 7). NULL

$y = "Hello world!";
$z = null;

var_dump($z);

// -------------------
echo '<hr>';
// -------------------

// 9). Resource

echo "Resource Topic On Hold at 8th of Feb 2021";