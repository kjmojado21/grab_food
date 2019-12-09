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
        //display the numbers from N to N (start to end ~~~ are
        // entered by the user)

        //input function
        //display function

        function  getInputs(){
            $start = $_POST["start"];
            $end = $_POST["end"];

            displayNumbers($start, $end);
        }

        function displayNumbers($start, $end){
            for($a = $start; $a <= $end; $a++){
                echo " " .$a;
            }
        }

        getInputs();
    }
?>