<?php
    //displays the numebr from 1-10
    // statring value(lower limit) ~~ 1
    //ending value(upper limit) ~~ 10
    // echo "1 2 3 4 5 6 7 8 9 10";

    // for($num = 1; $num <= 10; $num = $num + 1){
    for($num = 1; $num <= 10; $num++){
        echo "  " .$num;
    }
    echo "<br>";
    //dispay the numbers from 10-1 using loop
    for($num = 10; $num >= 1; $num--){
        echo " " .$num;
    }
    echo "<br> <br><hr>";
    //display the numbers 2, 4, 6, 8, 10 from 0-10 using loop
    for($num = 2; $num <= 10; $num = $num + 2){
        echo " " .$num;
    }
    echo "<br>";
    for($num = 1; $num <=10; $num++){
        if($num % 2 == 0){
            echo " " .$num;
        }
    }
?>