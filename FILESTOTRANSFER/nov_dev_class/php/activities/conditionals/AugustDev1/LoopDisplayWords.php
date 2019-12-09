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
        What do you want to display? <input type="text" name="word"><br>
        How may times do you want to display it? <input type="text" name="times"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        function getInputs(){
            $word = $_POST["word"];
            $num = $_POST["times"];

            displayIt($word, $num);
        }

        function displayIt($word, $num){
            for($start = 1; $start <= $num; $start++){
                echo " " .$word. "<br>";
            }
        }

        getInputs();
    }
?>