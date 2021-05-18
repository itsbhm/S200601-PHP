<?php

// Create a PHP Constant

/*

To create a constant, use the define() function.

define(name, value, case-insensitive)


*/

// Create a constant with a case-sensitive name:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// Create a constant with a case-insensitive name:

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;


// PHP Constant Arrays

define("cars", ["Alfa Romeo", "BMW", "Toyota" ]);
echo cars[0];
