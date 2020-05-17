<?php

if (isset($_GET ['x']) ){
    $name = $_GET['x'];
    $email = $_GET['y'];

    echo "Hello, $name your email address is $email";
}