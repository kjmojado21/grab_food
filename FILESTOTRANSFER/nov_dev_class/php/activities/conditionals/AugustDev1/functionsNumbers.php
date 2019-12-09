<?php
    //create a function that computes
    //for the sum of the two numbers

    //create a fuction that displays
    //the sum of the two numbers

    $num1 = 5;
    $num2 = 18;
    computeSum($num1, $num2);
    computeDifference($num1, $num2);
    computeProduct($num1, $num2);
    computeQuotient($num1, $num2);
    computeRemainder($num1, $num2);

    function computeSum($n1, $n2){
        $sum = $n1 + $n2;
        displaySum($sum);
    }

    function computeDifference($n1, $n2){
        $diff = $n1 - $n2; //formula
        displayDiff($diff); //output
    }

    function computeProduct($num1, $num2){
        $prod = $num1 * $num2;
        displayProd($prod);
    }

    function computeQuotient($num1, $num2){
        $quo = $num1 / $num2;
        displayQuo($quo);
    }

    function computeRemainder($num1, $num2){
        $rem = $num1 % $num2;
        displayRem($rem);
    }

    function displaySum($s){
        echo "Sum is " .$s. "<br>";
    }

    function displayDiff($d){
        echo "Difference is " .$d. "<br>";
    }

    function displayProd($prod){
        echo "Product is " .$prod. "<br>";
    }

    function displayQuo($quo){
        echo "Quotient is " .$quo. "<br>";
    }
    
    function displayRem($rem){
        echo "Remainder is " .$rem. "<br>";
    }
?>