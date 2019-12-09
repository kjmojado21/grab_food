<?php
    function displayHello($name){
        echo "hello $name<br>";
    }

    function displayAddress($name, $address){
        echo "Hi $name.";
        echo "You are from $address.";
    }

    //function call
    // displayHello("mary"); 
    // displayHello("john");

    //passing using ACTUAL VALUE
    displayAddress("mary", "USA");
   
    //passing values using VARIABLE NAMES
    $n = "paul";
    $a = "Australia";
    displayAddress($n, $a);
?>