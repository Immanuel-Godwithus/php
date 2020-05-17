<?php
/* function areaOfACylinder($Radius,$Height){
    echo areaOfACylinder();
}
areaOfACylinder(5,10);*/
// How do you do this?
$number = 3;
switch ($number){
    case 1:
        echo "You lost";
        break;
    case 2:
        echo "You almost won";
        break;
    case 3:
        echo "You won";
        break;
    default:
        echo "Enter a valid number";
        break;
}
while ($number<= 8){
    echo "$number";
    $number++;
    echo "<br>";
}
do {
    echo "$number";
    $number++;
    echo "<br>";
}while($number <= 10);
function myLastname($Fname){
    echo " Mathari<br>";
}
myLastname("Immanuel");
function Area($Length, $Width){
    $Area = $Length * $Width;
    echo "$Area<br>";
}
Area(10,100);
function myIntrest($Principal, $Rate, $Time){
    $Intrest = (($Principal * $Rate * $Time)/100);
    echo $Intrest;
    echo "<br>";
}
myIntrest(100000,10,3);
function myTrial(){
    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo "$z <br>";
}
myTrial();
