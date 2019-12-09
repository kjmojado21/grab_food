<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="First number"><br>
        <input type="text" name="num2" placeholder="Second number"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
       
        //input function ~~ will get the values entered by the user
        function getInput(){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //call sum function
            computeSum($num1, $num2);
        }

        //process function
        function computeSum($num1, $num2){
            $sum = $num1 + $num2;

            //call output function
            displaySum($sum);
        }

        //output function
        function displaySum($sum){
            echo "Sum of the two numbers is " .$sum;
        }

        getInput();

    }
?>