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
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        
        function getNumber(){
            $num = $_POST["num"];

            return $num;
        }

        function displayNumbers($num){
        //                     $start <= 10 ~~ 1 to 10 only
            for($start = 1; $start <= $num; $start++){
                echo " " .$start;
            }
        }

        $num = getNumber();
        displayNumbers($num);
    }
?>