<?php
    $servername = "localhost";
    $username = "root";
    $password = "root"; // <----- mac
    // $password = ""; <---- windows
    $database = "kredo";

    //connection string ~~ we are passing the 4 values to database
    $conn = new mysqli($servername, $username, $password, $database);

    //check connection if there is problem display message and show the specific error
    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
        //die ~~ display ang EXIT from code
    }

    //if no problem with connection
    // echo "Connected successfully";