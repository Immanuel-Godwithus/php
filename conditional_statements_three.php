<?php

$age = 18;

if($age<18){
    echo "Underage";
    echo "<br>";
}else{
    echo "Qualified";
    echo "<br>";
}

echo "<hr>";
// -----------------------------
// Calculate the BMI of a person.
// ------------------------------

$weight = 60;
$height = 1.5;

$BMI = $weight / ($height * $height);


echo "$BMI";
echo "<br>";
if ($BMI < 24){
    echo "You are underweight";
}elseif ($BMI > 24){
    echo "You have normal weight";
}elseif ($BMI < 44){
    echo "You are underweidht";
}elseif ($BMI < 54){
    echo "You are obese";
}else {
    echo "You are dead";
    echo "<br>";
}
echo "<hr>";



// -----------------------------
// A BETTING GAME.
// ------------------------------

// choose a number between 1 and 4

$number = 3;

if ($number == 0){
    echo "Sorry, try again";
    echo "<br>";
} elseif($number == 1){
    echo "Oops! You lost!!!";
    echo "<br>";
}elseif ($number == 2){
    echo "Oops! You lost!!!";
    echo "<br>";
}elseif ($number == 3){
    echo "Congrats! You have won a house in Muthaiga!!!";
    echo "<br>";
}elseif ($number == 4){
    echo "Oops! You lost!!!";
    echo "<br>";
}else{
    echo "Please enter a valid number";
    echo "<br>";
    echo "<br>";
}


// -----------------------------
// A Grading system.
// ------------------------------

$score = 10000;

if ($score <= 24){
    echo "E";
}elseif ($score <= 29){
    echo "D-";
}elseif ($score <= 34){
    echo "D";
}elseif ($score <= 39){
    echo "D+";
}elseif ($score <= 44){
    echo "C-";
}elseif ($score <= 49){
    echo "C";
}elseif ($score <= 54){
    echo "C+";
}elseif ($score <= 59){
    echo "B-";
}elseif ($score <= 64){
    echo "B";
}elseif ($score <= 69){
    echo "B+";
}elseif ($score <= 74){
    echo "A-";
}else{
    echo "A";
    echo "<br>";
}

















