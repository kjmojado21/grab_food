<?php
    $num = array(2, 4, 9, 12, 56, 4, 7, 22, 90, 45);

    $arr_length = count($num);

    for($a = 0; $a < $arr_length; $a++){
        echo " " .$num[$a];
    }

    //random generation of numbers into the array
    for($counter = 0; $counter < 10; $counter++){
        $numbers[$counter] = rand(1,50);
    }

    echo "<br>The numbers generated are: ";
    for($counter = 0; $counter < 10; $counter++){
        echo " " .$numbers[$counter];
    }

?>