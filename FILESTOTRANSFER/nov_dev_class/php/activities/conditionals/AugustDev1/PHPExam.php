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
        How many people are going to eat?
        <input type="text" name="num">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $len = $_POST["num"];

        echo "<hr>Enter the ages: <br>";
        echo "<form method='post' action=''>";
            for($a = 0; $a < $len; $a++){
                echo "<input type='text' name='age[]'><br>";
            }
            echo "<input type='submit' value='Calculate' name='calc'>";
        echo "</form>";
    }

    if(isset($_POST["calc"])){
        $ages = $_POST["age"];

        $len = count($ages);
        print_r($ages);
        $total = 0;
        
        for($a = 0; $a < $len; $a++){
            if($ages[$a] >= 0 && $ages[$a] <= 5){
                $rate = 0;
            }else if($ages[$a] >= 6 && $ages[$a] <= 10){
                $rate = 325 - (325 * 0.10);
            }else if($ages[$a] >= 11 && $ages[$a] <=59){
                $rate = 325;
            }else if($ages[$a] > 59){
                $rate = 325 - (325 * 0.05);
            }else{
                $rate = 0;
            }

            $total += $rate;
        }

        echo "<br>Amount to be paid is " .number_format($total, 2);
    }
?>