<?php

//i love codding


//this is a calculation of the area of a circle

$radius = 7;



$area = pi() * $radius * $radius;

echo "the area is ".$area;

echo "<br>";
//this is the volume of a cylinder

$radi = 10;
$height = 20;

$volume = pi() * $radi * $radi * $height;

print "The volume of a cylinder is ".$area;
echo"<br>";

//write a php script to calculate the simple interest
// of a loan borrowed.

$P = 1000000;
$R = 10;
$T = 5;

$I = ($P * $R * $T)/100;

print "The interest of a loan of ksh". 1000000 . " at an interest rate of 10% in 5 years is ".$I;

$greeting = "Hello Manuel, welcome to our system";
$age = 29;
$weight = 50.4;
$married = true;
//word count
//function something programmed in a language to do a certain job
// ()
echo str_word_count($greeting);
echo "<br>";
echo count($greeting);
echo "<br>";
echo strpos($greeting, "system");
echo "<br>";
echo strrev($greeting);
echo "<br>";
echo str_replace("Hello", "Hi", $greeting);
echo "<br>";
var_dump($greeting);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($weight);
echo "<br>";
var_dump($married);