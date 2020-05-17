<?php
// function is the same as method.

function members($firstname){
    echo "My name is $firstname Mathari <br>";
}

writeMsg();

echo "<br>";

function motto(){
    echo "Hello, this is our motto <br> ";

    return;
}

motto();

function vision(){
    echo "Life changing throung quality training";
    echo "<br>";
}


vision();
echo "<br>";

function area(){
    $length = 10;
    $width = 20;
    $answer = $length * $width;
    return $answer;
}

echo area();

echo "<br>";

function cylinder_volume($r , $h){
    $vol = 3.142 * $r * $r * $h;
    return $vol;
}

echo cylinder_volume(10,40 );

echo "<br>";

function simple_intrest($p, $r, $t){
    $intrest = ($p * $r * $t)/100;
    return $intrest;
}

$principal = 10000;
$rate = 5;
$time = 2;
echo simple_intrest($principal,$rate,$time);
// parsing parameters/ arguments.

echo "<br>";

function area_of_a_right_angle_triangle($b , $h){
    $Area = $b * $h * 0.5;
    return $Area;
}

$base = 10;
$height = 25;

echo area_of_a_right_angle_triangle($base,$height);

echo "<br>";

function my_details($n , $a){
    echo "Hello $n, you are $a years old";
}



$name = "manuel";
$age = 19;
my_details($name, $age);

echo "<br>";

function writeMsg() {
    echo "Hi Manu";
}

members("Immanuel");

function grade($name , $grade){
    echo "My name is $name and I scored $grade in KCSE. <br>";
}

grade("Immanuel" , "B+");

$xx = 5;
$yy = 10;

/*function myTest() {
    global $xx , $yy;
    return $xx + $yy;
}
myTest();*/

function myTest(){
    global $xx , $yy;
    $yy = $xx + $yy;
    return $yy;
}

myTest();

function myTestTwo(){
    static $x = 1;
    echo $x;
    $x++;
}
myTestTwo();
myTestTwo();
myTestTwo();

echo "<br>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);





















