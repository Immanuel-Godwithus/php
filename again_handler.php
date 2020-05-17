<?php

# Check if the button has been clicked

if (isset($_POST ['btn_reg'])){
    # Start receiving data from the user

    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    // Write the query to connect to the database
    // To connect you need four parameters ie. the host, username, password, db_name
    $host = "localhost";
    $username = "root";
    $pwd = "";
    $database = "mbogi";
    $db_connection = mysqli_connect($host, $username, $pwd, $database);
    // Write an if statement to check if the connection to the database was successful

    if ($db_connection){
        //Proceed to saves

        // Write the query to insert to the DB

        $insert_data = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$password')";
        // To save, use the MySQLi query function

        $save = mysqli_query($db_connection , $insert_data);

        // Write the if statement to check if the saving was successful

        if ($save){
            echo "Saving was successful.";
        }else{
            echo "Saving failed.";
        }

    }else{
        echo "Connection failed";
    }
}