<?php
    // $first_num = $_POST["num1"];
    // $second_num = $_POST["num2"];

    // echo "Num 1: " .$first_num. "<br>";
    // echo "Num 2: " .$second_num. "<br>";

    // $sum = $first_num + $second_num;
    // echo "Sum of the two numbers is " .$sum. "<br>";

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2;
    $remainder = $num1 % $num2;

    echo "Addition: " .$sum. "<br>";
    echo "Subtraction: " .$difference. "<br>";
    echo "Multiplication: " .$product. "<br>";
    echo "Division: " .number_format($quotient,2). "<br>";
    echo "Modulo: " .$remainder. "<br>";
?>