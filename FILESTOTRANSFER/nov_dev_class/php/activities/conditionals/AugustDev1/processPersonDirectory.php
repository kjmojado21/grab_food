<?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    //gourp form element ~~ use the name of the tag
    $country = $_POST["country"];
    $gender = $_POST["gender"];


    echo "First Name: " .$fname. "<br>";
    echo "Last Name: " .$lname. "<br>";
    echo "Country: " .$country. "<br>";
    echo "Gender: " .$gender. "<br>";

?>