<?php
    $num = array(21, 4, 78, 90, 1);

    echo $num[0];
    echo $num[4];

    //echo $num[5]; ~~ error no value to display
    echo "<hr>";

    $car = array("Honda", "Toyota", "BMW", "Mitsubishi", "Ferrari");
    echo " " .$car[0]. "<br>";
    echo " " .$car[1]. "<br>";
    echo " " .$car[2]. "<br>";

    echo "<hr>";
    print_r($car);

    echo "<hr>";
    $arr_length = count($car);
    echo "There are " .$arr_length. "  elements in the array";

    echo "<hr>";
    for($a = 0; $a < $arr_length; $a++){
        echo " " .$car[$a]. "<br>";
    }

?>