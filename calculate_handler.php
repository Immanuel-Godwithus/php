<?php

// Check if btn_calculate has been clicked

if (isset($_POST ['btn_calculate']) ){
    // Start receiving data from the user.

    $name = $_POST['x'];
    $first_number = $_POST['y'];
    $second_number = $_POST['z'];

    // Do the calculation.

    $jibu = $first_number + $second_number;

    // Display the result.
    echo "The sum of $first_number and $second_number is $jibu";
}