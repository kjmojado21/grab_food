<?php
    //two integer variables
    $num1 = 5;
    $num2 = 18;

    //addition -- add
    $sum = $num1 + $num2;

    //subtraction --minus
    $difference = $num1 - $num2;

    //multiplication
    $product = $num1 * $num2;

    //division
    $quotient = $num1 / $num2;

    //modulo
    $remainder = $num1 % $num2;

    //output
    echo "Addition: " .$sum. "<br>";
    echo "subtraction: " .$difference. "<br>";
    echo "Multiplication: " .$product. "<br>";
    echo "Division: " .number_format($quotient,2). "<br>";
    echo "Modulo: " .$remainder. "<br>";
?>