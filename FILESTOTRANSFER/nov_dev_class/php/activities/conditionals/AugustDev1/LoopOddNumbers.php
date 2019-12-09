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
        <input type="text" name="start" placeholder="Starting Value"><br>
        <input type="text" name="end" placeholder="Ending Value"><br>
        <input type="submit" name="display" value="Show Numbers">
    </form>
</body>
</html>
<?php
    if(isset($_POST["display"])){
        function getInputs(){
            $num1 = $_POST["start"];
            $num2 = $_POST["end"];

            displayOddNumbers($num1, $num2);
        }

        function displayOddNumbers($num1, $num2){
            for($a = $num1; $a <= $num2; $a++){
                if($a % 2 != 0){
                    echo " " .$a;
                }
            }
        }

        getInputs();
    }
?>