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
    //start: 3
    //end: 7
    //output: 3 4 5 6 7 ~~ increasing order

    //start:7
    //end: 3
    //output: 7 6 5 4 3 ~~ decreasing order

    //input function
    //display function
    if(isset($_POST["display"])){
        function  getInputs(){
            $start = $_POST["start"];
            $end = $_POST["end"];

            displayNumbers($start, $end);
        }

        function displayNumbers($start, $end){
            if($start <= $end){
                for($a = $start; $a <= $end; $a++){
                    echo " " .$a;
                }
            }
            // else{
            //     for($a = $start; $a >= $end; $a--){
            //         echo " " .$a;
            //     }
            // }
        }

        getInputs();
    }
?>