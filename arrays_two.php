<?php


//-----------------------------
// INDEXED ARRAYS
//----------------------------

$majina = array("Duncun", "Fortune", "Reuben", "Zeff", "Clement", "Paro");

foreach ($majina as $jina){
    echo $jina. "<br>";
}

//-----------------------------
// ASSOCIATIVE ARRAYS
//-----------------------------

echo "<br>";
echo "<hr>";
echo "<br>";


$staff = array("id 1"=> "Barak", "id 2"=> "Jeremy", "id 3" => "Bedan", "id 4" => "Israel",
    "id 5" => "Joseph", "id 6" => "Matilda", "id 7"=>"Manuel", "id 8"=> "Brayo");

foreach ($staff as $id => $name){
    echo "ID  :  ".$id."-------------- Name : ".$name;
    echo "<br>";
}