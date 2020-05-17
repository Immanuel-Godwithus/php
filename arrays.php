<?php
//_______________________________
//   INDEXED ARRAYS
//________________________________
// is anything that can store data
// it stores more than one value of data

//$names = array("Jose", "Matilda", "Immah", "Celine", "King");
$names = ["Jose", "Matilda", "Immah", "Celine", "King", 19, 56, 3.8, "Esther"];

rsort($names);

echo $names [0];
echo "<br>";
echo $names [2];
echo "<br>";
echo $names [4];
echo "<br>";
echo count($names);
echo "<br>";
echo $names [8];
echo "<br>";

$array_count = count($names);


for ($x = 0; $x < $array_count; $x++){
    echo $names[$x];
    echo "<br>";
}
echo "<hr>";

foreach ($names as $name){
    echo $name;
    echo "<br>";
}

// ------------------------------
// assosiative arrays
// ------------------------------

echo "<hr>";

$students = array("adm 1" => "Esther", 2 => "Nicole", "adm 3" => "Jedidah",
    "adm 4" => "Celine", "adm 5" => "Matilda", "adm 6" => "Pena");

arsort($students);
//ksort
//krsort
//sort
//rsort




print $students ["adm 6"];
echo "<br>";
echo $students [2];
echo "<br>";

foreach ($students as $key => $value){
    echo "Value: ".$value. " ";
    echo "Key: ".$key. " ";
    echo "<br>";
}
