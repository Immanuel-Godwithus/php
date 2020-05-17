<?php
// -----------------------------
// WHILE LOOP.
// ------------------------------
// BE VERY SURE TO USE $X++; TO AVOID CRASHING.

$x = 0;
while ($x <= 5){
    echo "$x";
    $x++;
    // or $x+=1;  incriment.
    // or $x = $x + 1;
    echo "<br>";
}

// -----------------------------
// DO WHILE LOOP.
// ------------------------------
$y = 10;
do{
    echo $y;
    $y++;
    echo "<br>";
}while($y <= 15);


// -----------------------------
// FOR LOOP.
// ------------------------------

for ($z=20; $z<=25; $z++){
    echo "$z";
    echo "<br>";
}





