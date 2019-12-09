<?php
    $num1 = 5;
    $num2 = 20;

    echo "1 - the values of num1 and num2 in the main PHP body is " .$num1. " " .$num2. "<br>";

    func1($num1, $num2);
    func2($num1, $num2);

    echo "2 - the values of num1 and num2 after calling func2 is " .$num1. " " .$num2. "<br>";
    
    function func1($n1, $n2){
        echo "the values passed are: " .$n1. " " .$n2. "<br>";
    }

    function func2($num1, $num2){
        echo "the values being passed are: " .$num1. " " .$num2. "<br>";

        $num1 = 900;
        $num2 = 304;

        echo "the new values of num1 and num2 in func2 is " .$num1. " " .$num2. "<br>";
    }


?>